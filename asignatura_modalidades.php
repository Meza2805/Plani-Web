<!DOCTYPE html>
<html lang="es">
<head>
    <title>Asignaturas y Modalidades</title>
<?php
include 'includes/header.php';
?>
   <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
                    <div class="row mt-4">
                        <div class="text-center">
                            <h2 class="letra_fondo"> <i class="bi bi-pencil-square"></i> Designación de Asignaturas en Modalidades </h2>
                        </div>
                    </div>
                    <hr>
                    <div class="container text-left mb-3">
    <div class="row">
        <div class="col-6">
        <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal-agregar">
                    Designar Asignatura <i class="bi bi-pencil-square"></i>
                    </button>
        </div>
        <!-- <div class="col-5">
            <input type="text" class="form-control text-uppercase w-50"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
        </div> -->
    </div>
    <hr>
</div> 
    </form>
    <div class="table-responsive mt-4" id="tabla_asig">
    </div>

<!-- Modal de asignar modalidad FIN -->
<form  id="id_form" >
    <div class="modal fade" id="modal-agregar"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  Asignar Modalidad a Asignatura </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                <div  class="mb-3 mt-5" id="select_asignatura">
                </div> 
                <div class="mb-3 mt-5" id="select_modalidades">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn fondo_degradado_azul text-light" id="guardar" >Guardar</button>
                    <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cerrar</button>     
                </div>
            </div>
      </div>
    </div>
</form>
<!-- Modal de registro de Personal FIN --> 

<?php
include 'includes/footer.php';
?>

<!-- cargar tabla asignatura -->
<script text="text/javascript">
    $(document).ready(function(){
    $('#tabla_asig').load('../componentes/tabla_asignatura_modalidad.php');
    });

</script>

<!-- cargar select de asignatura -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#select_asignatura').load('../componentes/select_asignatura_am.php');
    });
</script>

<!-- cargar select de modalidades -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#select_modalidades').load('../componentes/select_modalidades.php');
    });
</script>

<!-- Evento del boton Guardar Asignacion Modalidad Asignatura -->
<script type="text/javascript">
    var form = document.getElementById('id_form');
    form.addEventListener('submit',function(event){
        event.preventDefault();
        // /*Ubicando el select de la asignatura*/ 
        let select_asignatura= document.getElementById('select_asig');
        // /*Obteniendo el valor de la opcion de asignatura*/
        let id_asignatura = select_asignatura.value;
        // /*Ubicando el select de la asignatura*/ 
        let select_modalidad = document.getElementById('select_mod');
        // /*Obteniendo el valor de la opcion de asignatura*/
        let id_modalidad = select_modalidad.value;
      
        agregar_asmd(id_asignatura,id_modalidad);
        });
</script>


<!-- Modal de pregunta para consulta Eliminacion de Asignacion -->
<script type="text/javascript">
    function Eliminar_Asignacion(id,asignatura){
        Swal.fire({
            title: '¿ELIMINAR LA ASIGNACIÒN DE '+ asignatura + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1F618D',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
         }).then((result) => {
            if (result.isConfirmed) {
                $(document).ready(function(){
                    eliminar_asignatura_modalidad(id);
                });
  }
})}
</script>

