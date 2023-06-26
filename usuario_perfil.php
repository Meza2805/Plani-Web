<!DOCTYPE html>
<html lang="es">
<head>

<title>Grupos de Clases</title>
<?php
include 'includes/header.php';
?>


    <div class="row mt-4">
            <div class="text-center flex-column d-flex">
                <h3 class="letra_fondo"> <i class="bi bi-gear"></i> Administración de Usuarios </h3>
            </div>
    </div>

    <hr>
    <div id="adminUser">
    </div>
      <!-- llamado al modal de actualizacon  de InfoUsuari INCIO-->
      <form id="form_AdminInfo" >
            <div class="modal fade" id="modal-InfoAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Actualizar Informacion de Acceso</strong> </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" id="cedula01" class="form-control fondo_azul" placeholder="Cedula"   minlength="0" maxlength="16" disabled required>
                            <label for="cedula01" class="fondo_azul">Cedula</label>
                        </div>
                         <div class="form-floating mb-3">
                            <input type="text" id="nombre01" class="form-control fondo_azul" placeholder="Nombre"   minlength="0" maxlength="16" disabled required>
                            <label for="nombre01" class="fondo_azul">Nombre Completo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="userAdmin" class="form-control fondo_azul" placeholder="Usuario"   minlength="0" maxlength="16"  required>
                            <label for="userAdmin" class="fondo_azul">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" id="contaAdmin" class="form-control fondo_azul" placeholder="contra"   minlength="0" maxlength="25" required>
                            <label for="contaAdmin" class="fondo_azul">Contraseña</label>
                        </div>
                        <div class="form-row">
                             <div class="col">
                        <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
                        </div>
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

<script type="text/javascript">
    var form = document.getElementById('form_AdminInfo');
    form.addEventListener('submit',function(event){
    event.preventDefault();
    let cedula=$('#cedula01').val();
    let user=$('#userAdmin').val();
    let contra=$('#contaAdmin').val();
    ActualizarInfoAdmin(cedula, user, contra);
 });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#adminUser').load('../componentes/tabla_AdminUser.php');
    });
</script>

<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("contaAdmin");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>