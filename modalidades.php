<!DOCTYPE html>
<html lang="es">
<head>

    <title>MODALIDADES</title>
<?php
include 'includes/header.php';
?>
                <div class="row mt-4">
                    <div class="text-center">
                        <h1 class="letra_fondo"> <i class="bi bi-border-width"></i> <Strong> Registro de Modalidades </Strong></h1>
                    </div>
                </div>
                <hr>
                <caption>
              
                </caption> 


                <div class="container text-left mb-3">
    <div class="row">
        <div class="col-6">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-agregar" >
                   AGREGAR NUEVO <i class="bi bi-border-width"></i>
                </button>
        </div>
        <div class="col-5">
            <input type="text" class="form-control text-uppercase w-50"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
        </div>
    </div>
    <hr>
</div> 


                <div class="table-responsive mt-4" id="tabla_modalidades">
                </div>



<!-- Modal de registro de MODALIDADES FIN -->
<form id="form_agregar" >
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-border-width"></i> <strong>REGISTRAR MODALIDAD</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="modalidad" class="form-control letra_fondo text-uppercase" placeholder="" minlength="0" maxlength="35" required>
                        <label for="floatingInput" class="letra_fondo">Modalidad</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
                </div>
              
            </div>
           
      </div>
    </div>
</form>
<!-- Modal de registro de MODALIDADES FIN -->


<!-- Modal de actualizacion de MODALIDADES FIN -->
<form id="form_actualizar" >
    <div class="modal fade" id="modal-actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-border-width"></i> <strong>ACTUALIZAR MODALIDAD</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text"  id="codigou" class="form-control letra_fondo text-uppercase" placeholder="" minlength="0" maxlength="35" required disabled>
                        <label for="floatingInput" class="letra_fondo">CODIGO</label>
                    </div>
                </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text"  id="modalidadu" class="form-control letra_fondo text-uppercase" placeholder="" minlength="0" maxlength="35" required>
                        <label for="floatingInput" class="letra_fondo">MODALIDAD</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="atualizar">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
                </div>
              
            </div>
           
      </div>
    </div>
</form>
<!-- Modal de actualizacion de MODALIDADES FIN -->


    


<?php
include 'includes/footer.php';
?>

<!-- Cargar tabla de modalidades -->
<script text="type/javascript">
    $(document).ready(function(){
        $('#tabla_modalidades').load('../componentes/tabla_modalidades.php');

    });
</script>


<!-- Evento del boton Guardar Modalidad -->
<script>
var form = document.getElementById('form_agregar');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let modalidad=$('#modalidad').val(); 
    agregar_modalidad(modalidad);
});
</script>


<!-- Evento del boton Actualizar Modalidad -->
<script type="text/javascript" >
var form = document.getElementById('form_actualizar');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let id=$('#codigou').val();
    let modalidad=$('#modalidadu').val(); 
    actualizar_modalidad(id,modalidad);
});
</script>



<!-- Modal de pregunta para consulta Eliminacion de Modalidad -->
<script type="text/javascript">
    function Eliminar_Modalidad(id_modalida,modalidad){
        Swal.fire({
        title: '¿ELIMINAR EL REGISTRO DE '+ modalidad + ' ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1F618D',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
         }).then((result) => {
            if (result.isConfirmed) {
                $(document).ready(function(){
                    eliminar_modalidad(id_modalida);
                });
            }
            })

}
</script>



