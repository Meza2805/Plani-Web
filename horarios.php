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



<div class ="container w-75"  
style=" background: rgb(2, 0, 36);
        background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(35, 106, 201, 1) 100%, rgba(0, 212, 255, 1) 100%);
        border-radius: 10px 100px / 120px;" id="containerHorario">
   <form id="form_horario">
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

      <!-- Codigo para cargar el select de turno en dependecia de la modalidad seleccionada -->
      <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_turno').load('../componentes/select_turnos02.php',{codigo_modalidad});
        $('#select_grado').load('../componentes/select_grados.php',{codigo_modalidad});
        $('#select_seccion').load('../componentes/select_seccion.php');
        $('#btn').load('../componentes/btn_buscarHorario.php');
});
    </script>


<script type="text/javascript">
        var form = document.getElementById('form_horario');
        form.addEventListener('submit',function(event){
        event.preventDefault();
        let DocenteLunes, DocenteMartes, DocenteMiercoles ,DocenteJueves, DocenteViernes;
    //    // var AsignaturaLunes,AsignaturaMartes, AsignaturaMiercoles, AsignaturaJueves,AsignaturaViernes;
        DocenteLunes = document.getElementById("select_lunes").value;
        DocenteMartes = document.getElementById("select_martes").value;
         DocenteMiercoles = document.getElementById("select_miercoles").value;
         DocenteJueves = document.getElementById("select_jueves").value;
         DocenteViernes = document.getElementById("select_viernes").value;
        AsignaturaLunes = document.getElementById("select_lunes00").value;
        AsignaturaMartes = document.getElementById("select_martes00").value;
        AsignaturaMiercoles = document.getElementById("select_miercoles00").value;
        AsignaturaJueves = document.getElementById("select_jueves00").value;
        AsignaturaViernes = document.getElementById("select_viernes00").value;
        Insertar_Bloque_Horario(DocenteLunes, DocenteMartes,DocenteMiercoles,DocenteJueves,DocenteViernes,AsignaturaLunes,AsignaturaMartes,
        AsignaturaMiercoles,AsignaturaJueves,AsignaturaViernes,CodigoGrupoFinal,h01,h02,codigo_modalidad)
        });
    </script>

   

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

   

<script text="type/javascript">
    $(document).ready(function(){
        $('#containerHorario').hide()
    });
</script>
<?php
include 'includes/footer.php';
?>
