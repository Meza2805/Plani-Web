<!DOCTYPE html>
<html lang="es">
<head>

    <title>Grupos de Clases</title>
    <?php
    include 'includes/header.php';
    ?>

    <div class="row mt-4">
        <div class="text-center flex-column d-flex">
            <h3 class="letra_fondo"> <i class="bi bi-people-fill"></i> Grupos de Clases</h3>
        </div>
    </div>

    <hr>
                <caption>
                    <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal_grupo">
                    Agregrar Nuevo <i class="bi bi-people-fill"></i>
                    </button>
                </caption> 
     <hr>

    <div class="table-responsive mt-1 mb-4" id="tabla_grupo">    
    </div>




        <!-- llamado al modal de registro de grupos de clases INCIO-->
        <form  id="form_grupo">
            <div class="modal fade" id="modal_grupo" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-people-fill"></i><strong> Registro de Grupo de Clases</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                       
                            <div class="row">
                                <div id="select_docente" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_modalidad" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_grado" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_turno" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_seccion" class="mt-3 fondo_azul">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn fondo_degradado_azul text-light" id="agregar_actividad">Guardar</button>
                            <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                </div>
                </div>
                 </div>
        </form>


          <!-- llamado al modal de registro de grupos de clases INCIO-->
          <form  id="form_grupoAC">
            <div class="modal fade" id="modal_grupoAC"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-people-fill"></i><strong> Actualizar Grupo de Clases</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                        <!-- <h4 class="text-center letra_fondo">Buscar Docente </h4> -->
                        <div class="row">
                                <div class="form-floating mt-3">
                                            <input class="form-control " placeholder="Descripción de Protagonistas" id="grupo_ac" maxlength="1300" disabled></input>
                                            <label for="observaciones" class="letra_fondo">ID Grupo</label>        
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_docente_ac" class="mt-3 fondo_azul">
                                </div>
                            </div>

                            <div class="row">
                                <div id="select_modalidad_ac" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_grado_ac" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_turno_ac" class="mt-3 fondo_azul">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_seccion_ac" class="mt-3 fondo_azul">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn fondo_degradado_azul text-light" id="agregar_actividad_ac">Guardar</button>
                            <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                </div>
                </div>
                 </div>
        </form>



    <!-- Funcion para llamar a la tabla docente -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_docente').load('../componentes/tabla_docente.php');
        });
    </script>

        <!-- Funcion para llamar a la tabla docente -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_docente_ac').load('../componentes/tabla_docente_ac.php');
        });
    </script>

        <!-- Funcion para llamar a la tabla de grupos de clases -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_grupo').load('../componentes/tabla_grupo.php');
        });
    </script>

        <!-- Funcion para llamar el select de las modalidades -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#select_modalidad').load('../componentes/select_modalidades.php');
        });
    </script>


    <!-- Funcion para llamar el select de los docentes disponibles para asignar a un grupo -->
    <script text="type/javascript">
    $(document).ready(function(){
        $('#select_docente').load('../componentes/select_docentes.php');
    });
    </script>



   <!-- Funcion para llamar el select de los docentes disponibles para asignar a un grupo -->
   <!-- <script text="type/javascript">
    $(document).ready(function(){
        $('#select_docente_ac').load('../componentes/select_docentes_ac.php');
    });
    </script> -->


        <!-- Codigo para cargar el select de grado en dependecia de la modalidad seleccionada -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_grado').load('../componentes/select_grados.php',{codigo_modalidad});
    });   
    </script>


  <!-- Codigo para cargar el select de grado en dependecia de la modalidad seleccionada en el formulario de Actualizacion -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad_ac").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_grado_ac').load('../componentes/select_grados.php',{codigo_modalidad});
    });   
    </script>


    <!-- Codigo para cargar el select de turno en dependecia de la modalidad seleccionada -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_turno').load('../componentes/select_turnos02.php',{codigo_modalidad});
        });   
    </script>


    <!-- Codigo para cargar el select de turno en dependecia de la modalidad seleccionada en el formulario de Actualizacion-->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad_ac").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_turno_ac').load('../componentes/select_turnos02.php',{codigo_modalidad});
        });   
    </script>


    <!-- Codigo para cargar el select de seccion  -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#select_seccion').load('../componentes/select_seccion.php');
        });
    </script>

 <!-- Codigo para cargar el select de seccion en el formulario Actualizacion -->
 <script text="type/javascript">
        valida = 1
       document.getElementById("select_modalidad_ac").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
         valida = 0
        $('#select_seccion_ac').load('../componentes/select_seccion.php',{codigo_modalidad});
        }); 
</script>


<!-- Evento del boton Guardar Grupo -->
<script type="text/javascript" >
var form = document.getElementById('form_grupo');
 form.addEventListener('submit',function(event){
    event.preventDefault();
           
        let cedula=$('#select_doc').val();
       
        // /*Ubicando el select del modalidad*/ 
        let select_modalidad = document.getElementById('select_mod');
        // /*Obteniendo el valor de la opcion de modalidad*/
        let value_modalidad = select_modalidad.value;
        // /*Ubicando el select de grado*/
        let select_grado = document.getElementById('select_grados');
        // /*Obteniendo el valor de la opcion de grado*/
        let value_grado = select_grado.value;
        // /*Obteniendo el valor de la opcion de turno*/
        let select_turno = document.getElementById('select_t');
        // /*Obteniendo el valor de la opcion de turno*/
        let value_turno = select_turno.value;
        // /*Obteniendo el valor de la opcion de turno*/
        let select_seccion = document.getElementById('select_s');
        // /*Obteniendo el valor de la opcion de turno*/
        let value_seccion = select_seccion.value;

        agregar_grupo(cedula ,value_modalidad ,value_grado,value_turno,value_seccion)
        // alert(cedula)
       
 });
</script>


<!-- Evento del boton Actualizar Grupo -->
<script type="text/javascript" >
var form = document.getElementById('form_grupoAC');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    
        let id_grupo=$('#grupo_ac').val();
        let cedula=$('#select_doc_a').val();
        // /*Ubicando el select del modalidad*/ 
        let select_modalidad = document.getElementById('select_mod_ac');
        // /*Obteniendo el valor de la opcion de modalidad*/
        let value_modalidad = select_modalidad.value;
        if (valida == 0){

            // /*Ubicando el select de grado*/
            let select_grado = document.getElementById('select_grados');
            // /*Obteniendo el valor de la opcion de grado*/
            let value_grado = select_grado.value;
            // /*Obteniendo el valor de la opcion de turno*/
            let select_turno = document.getElementById('select_t');
            // /*Obteniendo el valor de la opcion de turno*/
            let value_turno = select_turno.value;
            // /*Obteniendo el valor de la opcion de turno*/
            let select_seccion = document.getElementById('select_s');
            // /*Obteniendo el valor de la opcion de turno*/
            let value_seccion = select_seccion.value;
        }else
        {

            // /*Ubicando el select de grado*/
             select_grado = document.getElementById('select_grados_ac');
            // /*Obteniendo el valor de la opcion de grado*/
             value_grado = select_grado.value;
            // /*Obteniendo el valor de la opcion de turno*/
             select_turno = document.getElementById('select_t_ac');
            // /*Obteniendo el valor de la opcion de turno*/
             value_turno = select_turno.value;
            // /*Obteniendo el valor de la opcion de turno*/
             select_seccion = document.getElementById('select_s_ac');
            // /*Obteniendo el valor de la opcion de turno*/
             value_seccion = select_seccion.value;
       
        }
        // alert(id_grupo+' '+ cedula +' '+value_modalidad +' '+value_grado+' '+value_turno+' '+value_seccion)      
        actualizar_grupo(id_grupo,cedula ,value_modalidad ,value_grado,value_turno,value_seccion)
        // // alert(cedula +" "+value_modalidad +" "+value_grado+" "+value_turno+" "+value_seccion)
 });
</script>

<!-- Modal de pregunta para consulta Eliminacion de Grupo -->
<script type="text/javascript">
    function Eliminar_gr(id,grado, seccion,turno){
        Swal.fire({
  title: '¿ELIMINAR EL REGISTRO DE '+ grado +' '+ seccion+' '+ turno+' ?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1F618D',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText: 'No'
}).then((result) => {
  if (result.isConfirmed) {
    $(document).ready(function(){
        eliminar_grupo(id);
    });
  }
})}
</script>

<?php
include 'includes/footer.php';
?>
