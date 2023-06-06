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
                <div class="col content-select" id="select_modalidad" class="mt-3 fondo_azul">
                </div>
                <div class="col"  id="select_grado" class="mt-3 fondo_azul">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" id="select_turno" class="mt-3 fondo_azul">
                </div>
                <div class="col"  id="select_seccion" class="mt-3 fondo_azul">
                </div>
            </div>
        </div>  
        <div class="container mt-3 mb-3" id="btn">
        </div>
              
                <div class="mt-2" id="tabla_guia">                    
                </div>
        
        <div class=" mt-2">        
                <div class="mt-2 " id="tabla_asignatura_horario">                    
                </div>
              
        </div>
    </form>


    
<!-- Modal de Bloque 01 INICIO-->
<!-- <form id="form_registro" >
    <div   class="modal fade" id="modal-bloque" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fondo_azul" id="exampleModalLabel">  <i class="bi bi-person-badge-fill"></i>  <strong>Registro / Actualización Bloques de Clases</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                <div class="row">
                    <div id="h_bloque" class="mt-3 fondo_azul ">
                        <div id="codigo_bloque"></div>
                        <h5 class="text-start">Lunes</h5>
                        <div id="lunes" class="row"></div>
                        <div id="docente_lunes" class="row"></div>
                        <h5 class="text-start">Martes</h5>
                        <div id="martes" class="row"></div>
                        <div id="docente_martes" class="row"></div>
                        <h5 class="text-start">Miercoles</h5>
                        <div id="miercoles" class="row"></div>
                        <div id="docente_miercoles" class="row"></div>
                        <h5 class="text-start">Jueves</h5>
                        <div id="jueves" class="row"></div>
                        <div id="docente_jueves" class="row"></div>
                        <h5 class="text-start">Viernes</h5>
                        <div id="viernes" class="row"></div>
                        <div id="docente_viernes" class="row"></div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn fondo_degradado_azul text-light" id="guardar">Guardar</button>
                    <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cerrar</button>     
                </div> 
            </div>
      </div>
    </div>
</form> -->
<div class ="container w-75"  
style=" background: rgb(2, 0, 36);
        background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(35, 106, 201, 1) 100%, rgba(0, 212, 255, 1) 100%);
        border-radius: 10px 100px / 120px;" id="containerHorario">
   <form id="form_registro">
        <div class="container p-3">
            <h3 class="fondo_azul text-center text-light" id="">  <i class=""></i>  <strong>Registro / Actualización Bloques de Clases</strong> </h3>
        </div>
        <div class="container"> 
            <div class="row">
                    <div id="h_bloque" class="mt-3 text-light"> </div>
                    <div id="codigo_bloque"></div>
                    <h5 class="text-start text-light">Lunes</h5>
                    <div id="lunes" class="row mb-3"></div>
                    <div id="docente_lunes" class="row"></div>
                    <h5 class="text-start text-light">Martes</h5>
                    <div id="martes" class="row mb-3"></div>
                    <div id="docente_martes" class="row"></div>
                    <h5 class="text-start text-light">Miercoles</h5>
                    <div id="miercoles" class="row mb-3"></div>
                    <div id="docente_miercoles" class="row"></div>
                    <h5 class="text-start text-light">Jueves</h5>
                    <div id="jueves" class="row mb-3"></div>
                    <div id="docente_jueves" class="row"></div>
                    <h5 class="text-start text-light">Viernes</h5>
                    <div id="viernes" class="row mb-3"></div>
                    <div id="docente_viernes" class="row"></div>
            </div>
        </div>
        <div class="mt-3 mb-3 text-center">
            <button type="submit" class="btn fondo_degradado_azul text-light mb-3" id="guardar">Guardar</button>
        </div> 
    </form>

</div>


   

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

        // $('#select_grado_ac').load('../componentes/select_grados_Modal.php',{codigo_modalidad});  
        // $('#tabla_docente').load('../componentes/tabla_docente.php');
        // $('#txt_cedula').load('../componentes/txt_cedula.php');
        // $('#lunes').load('../componentes/Horario_Bloque/select_dia_lunes.php', {codigo_modalidad});
        // $('#martes').load('../componentes/Horario_Bloque/select_dia_martes.php',{codigo_modalidad});
        // $('#miercoles').load('../componentes/Horario_Bloque/select_dia_miercoles.php',{codigo_modalidad});
        // $('#jueves').load('../componentes/Horario_Bloque/select_dia_jueves.php',{codigo_modalidad});
        // $('#viernes').load('../componentes/Horario_Bloque/select_dia_viernes.php',{codigo_modalidad});
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

    <!-- <script text="type/javascript">
        $(document).ready(function(){
            $('#lunes').load('../componentes/Horario_Bloque/select_dia_lunes.php'); 
            $('#martes').load('../componentes/Horario_Bloque/select_dia_martes.php'); 
            $('#miercoles').load('../componentes/Horario_Bloque/select_dia_miercoles.php'); 
            $('#jueves').load('../componentes/Horario_Bloque/select_dia_jueves.php'); 
            $('#viernes').load('../componentes/Horario_Bloque/select_dia_viernes.php');  
        });
    </script> -->

        <!-- Evento para buscar horario -->
    <script type="text/javascript">
        var form = document.getElementById('form_registro');
        form.addEventListener('submit',function(event){
        event.preventDefault();
          alert('Funcionando')
        });
    </script>

<script text="type/javascript">
    $(document).ready(function(){
        $('#containerHorario').hide()
    });
</script>
<?php
include 'includes/footer.php';
?>
