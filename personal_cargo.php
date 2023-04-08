<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cargo</title>
<?php
include 'includes/header.php';
?>
    
        <div class="row mt-4 mb-5">
            <div class="text-center">
                <h2 class="letra_fondo  animate__animated animate__jackInTheBox animate__delay-1s	1s"> <i class="bi bi-person-video2"></i>Registro de Cargo Educativo </h2>
            </div>
        </div>
        <div class="container text-left mb-3">
            <div class="row">
                <div class="col-6">
                        <button class="btn fondo_degradado_azul text-light animate__animated  animate__fadeInBottomLeft  animate__delay-2s	2s" data-bs-toggle="modal" data-bs-target="#modal-cargo">
                        Agregar Nuevo <i class="bi bi-person-video2"></i>
                        </button>
                    </div>
                <!-- <div class="col-5">
                    <input type="text" class="form-control text-uppercase w-50"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
                </div> -->
            </div>
                <hr>
        </div> 

    <div class="table-responsive mt-4 animate__animated animate__fadeInUp animate__delay-3s	3s" id="cargo-remoto">                   
    </div>

    <!-- llamado al modal de registro  cargo INCIO-->
    <form id="form_c">
        <div class="modal fade" id="modal-cargo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Registrar Cargo de Personal Educativo</strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" id="cargo_d" class="form-control fondo_azul" placeholder="Cargo Académico"   minlength="0" maxlength="16" required>
                            <label for="floatingInput" class="fondo_azul">Cargo Académico</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn fondo_degradado_azul text-light" id="agregar_cargo">Guardar</button>
                        <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                    </div>
             </div>
            </div>
        </div>
    </form>
    <!-- llamado al modal de registro FIN-->

   


      <!-- llamado al modal de actualizacon  cargo INCIO-->
    <form id="form_cargo_u" >
        <div class="modal fade" id="modal-cargo_u" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Actualizar Cargo Académico</strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="id_c_u" class="form-control fondo_azul" placeholder="Numero de Cedula"   minlength="0" maxlength="16" disabled required>
                        <label for="floatingInput" class="fondo_azul">Código</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="cargo_u" class="form-control fondo_azul" placeholder="Numero de Cedula"   minlength="0" maxlength="25" required>
                        <label for="floatingInput" class="fondo_azul">Cargo Académico</label>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn fondo_degradado_azul text-light">Guardar</button>
                <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
      </div>
    </div>
    </form>
    <!-- llamado al modal de registro FIN-->



    
<?php
include 'includes/footer.php';
?>
<!-- Funcion para agregar tabla -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargo-remoto').load('../componentes/tabla_cargo.php');
    });
</script>

<!-- Evento agregar cargo -->
<script type="text/javascript">
    var form = document.getElementById('form_c');
    form.addEventListener('submit',function(event){
    event.preventDefault();
    let cargo=$('#cargo_d').val();
    agregar_cargo(cargo);

 });
</script>

<!-- Evento actualizar cargo -->
<script type="text/javascript">
    var form = document.getElementById('form_cargo_u');
    form.addEventListener('submit',function(event){
    event.preventDefault();
   
    let id_cargo=$('#id_c_u').val();
    let cargo=$('#cargo_u').val();
    actualizar_cargo(id_cargo,cargo);
 });
</script>


<!-- Modal de pregunta para consulta Eliminacion de Cargo -->
<script type="text/javascript">
    function Eliminar(id_cargo,cargo){
        Swal.fire({
  title: '¿ELIMINAR EL REGISTRO DE '+ cargo + ' ?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1F618D',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText: 'No'
}).then((result) => {
  if (result.isConfirmed) {
    $(document).ready(function(){
        eliminar_cargo(id_cargo);
    });
  }
})}
</script>
