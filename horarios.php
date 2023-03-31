<!DOCTYPE html>
<html lang="es">
<head>

    <title>Horarios de Clases</title>
    <?php
    include 'includes/header.php';
    ?>

    <div class="row mt-4">
        <div class="text-center flex-column d-flex">
            <h3 class="letra_fondo"> <i class="bi bi-alarm-fill"></i> Horarios de Clases</h3>
        </div>
    </div>

    <form id="id_horario">
        <div class="container">
            <div class="row">
                <div class="col" id="select_modalidad" class="mt-3 fondo_azul">
                </div>
                <div class="col"  id="select_grado" class="mt-3 fondo_azul"">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" id="select_turno" class="mt-3 fondo_azul">
                </div>
                <div class="col"  id="select_seccion" class="mt-3 fondo_azul"">
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-4" id="txt_cedula">
                   
                </div>
            </div>
            <div class="row mt-2">        
                <div class="mt-2" id="tabla_docente">                    
                </div>
            </div> -->
        </div>  
        <div class="container mt-3 mb-3" id="btn">
        </div>
        <div class="row mt-2">        
                <div class="mt-2" id="tabla_guia">                    
                </div>
        </div>
        <div class="row mt-2">        
                <div class="mt-2 col-2" id="tabla_bloque">                    
                </div>
                <div class="mt-2 col-2" id="tabla_asignatura_horario">                    
                </div>
                <div class="mt-2 col-2" id="tabla_asignatura_horario02">                    
                </div>
                <div class="mt-2 col-2" id="tabla_asignatura_horario03">                    
                </div>
                <div class="mt-2 col-2" id="tabla_asignatura_horario04">                    
                </div>
                <div class="mt-2 col-2" id="tabla_asignatura_horario05">                    
                </div>
        </div>
    </form>



        <!-- Funcion para llamar a la tabla de grupos de clases -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_grupo').load('../componentes/tabla_grupo.php');
            $(".readonly").keydown(function(e){
            e.preventDefault();
             });
        });
    </script>

        <!-- Funcion para llamar el select de las modalidades -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#select_modalidad').load('../componentes/select_modalidades.php');
        });
    </script>



      <!-- Codigo para cargar el select de turno en dependecia de la modalidad seleccionada -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_turno').load('../componentes/select_turnos02.php',{codigo_modalidad});
        $('#select_grado').load('../componentes/select_grados.php',{codigo_modalidad});
        $('#select_seccion').load('../componentes/select_seccion.php');
        $('#btn').load('../componentes/btn_buscarHorario.php');
        // $('#tabla_docente').load('../componentes/tabla_docente.php');
        // $('#txt_cedula').load('../componentes/txt_cedula.php');
        });   
    </script>

    
<!-- Evento para buscar horario -->
    <script type="text/javascript">
        var form = document.getElementById('id_horario');
        form.addEventListener('submit',function(event){
        event.preventDefault();
            var codigo_modalidad = document.getElementById("select_mod").value;
            var codigo_grado = document.getElementById("select_grados").value;
            var codigo_turno= document.getElementById("select_t").value;
            var codigo_seccion= document.getElementById("select_s").value;
            
            // var cedula=$('#cedula02').val();
            // $('#tabla_guia').load('../componentes/tabla_guia.php',{codigo_modalidad,codigo_grado,codigo_turno,codigo_seccion});
            var retorno;
           buscar_codigo_grupo(codigo_modalidad,codigo_grado,codigo_turno,codigo_seccion);
           
        });
    </script>


    
<?php
include 'includes/footer.php';
?>
