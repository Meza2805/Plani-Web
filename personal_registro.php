<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de Personal Educativo</title>
    <?php
    include 'includes/header.php';
    ?>
<!-- Enunciado de pagina INICIO -->
<div class="row justify-content-between text-center mt-3 position-relative">
    <div class="form-group  flex-column d-flex">
        <h2 class="letra_fondo"> <i class="bi bi-person-badge-fill"></i>Registro de Personal Educativo </h2>
    </div>

</div>

<!-- Boton de agregar FIN -->
<div class="mb-2">
  <div class="row gx-5">
     <div class="">
        <button class="btn btn-info fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal-agregar">
            Agregar Nuevo  <i class="bi bi-person-badge-fill"></i>
         </button>
    </div>

  </div>
</div>


<!-- Llamado a tabla del personal ubicada en carpeta complemento INICIO -->
<div class="table-responsive" id="tabla_personal">
</div>
<!-- Llamado a tabla del personal ubicada en carpeta complemento FIN -->

<!-- Modal de registro de Personal INICIO -->
<form id="form_registro" >
    <div   class="modal fade" id="modal-agregar"  aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fondo_azul" id="exampleModalLabel">  <i class="bi bi-person-badge-fill"></i>  <strong>Registrar Personal Educativo</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" id="cedula" class="form-control fondo_azul" placeholder="Numero de Cedula"   minlength="0" maxlength="16" pattern="^\d{3}-\d{6}-\d{4}[A-Z]{1}$" required>
                        <label for="floatingInput" class="fondo_azul"> Numero de Cedula    (incluya "-") </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombre" class="form-control fondo_azul" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="fondo_azul">Primer Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="s_nombre" id="s_nombre" class="form-control fondo_azul" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="fondo_azul">Segundo Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="p_apellido" id="p_apellido" class="form-control fondo_azul" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="fondo_azul">Primer apellido</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="s_apellido" id="s_apellido" class="form-control fondo_azul" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="fondo_azul">Segundo apellido</label>
                    </div>
                     <div class="form-group mb-3">
                        <label for="fecha" class="form-label fondo_azul"> Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" id="fecha_nac" class="form-control fondo_azul" required id="fecha" max="2004-12-31" min="1957-01-01">
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-control fondo_azul "   id="sexo" required>
                                <option selected disabled value="">Sexo</option>
                                <option value="1" class="fondo_azul">Femenino</option>
                                <option value="2" class="fondo_azul" >Masculino</option> 

                        </select>
                     </div>  
                     <div class="mb-3" id="cargo">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="telefono" class="form-control" placeholder="Numero Telefonico +505" pattern="^\d{8}" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   required>
                        <label for="floatingInput" class="fondo_azul">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating col-sm-12 mt-3">
                        <textarea class="form-control limitar_area" placeholder="Dirección" id="direccion" maxlength="300" required></textarea>
                        <label for="floatingTextarea" class="fondo_azul"> Dirección </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn fondo_degradado_azul text-light" id="guardar">Guardar</button>
                    <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cerrar</button>     
                </div> 
            </div>
      </div>
    </div>
</form>
<!-- Modal de registro de Personal FIN -->




<!-- Modal de actualizacion de Personal INICIO -->
<form id="form_actualizar" >
    <div class="modal fade" id="editar_personal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Editar Personal Educativo</strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="cedulau" class="form-control fondo_azul" placeholder="Numero de Cedula"   minlength="0" maxlength="16" disabled required>
                        <label for="floatingInput" class="fondo_azul">Numero de Cedula</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombreu" class="form-control fondo_azul" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="fondo_azul">Primer Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="s_nombre" id="s_nombreu" class="form-control fondo_azul" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="fondo_azul">Segundo Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="p_apellido" id="p_apellidou" class="form-control fondo_azul" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="fondo_azul">Primer apellido</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="s_apellido" id="s_apellidou" class="form-control fondo_azul" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="fondo_azul">Segundo apellido</label>
                    </div>
                     <div class="form-group mb-3">
                        <label for="fecha" class="form-label fondo_azul"> Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" id="fecha_nacu" class="form-control fondo_azul" required id="fechau" max="2004-12-31" min="1957-01-01">
                    </div>
                    <div class="mb-3" >
                        <div id="sexo_u">    
                        </div>
                    </div>  
                    <!-- Llamado a todos los cargos actuales de la base de datos -->
                     <div class="mb-3 fondo_azul" id="cargo_u"> </div>
                    <div class="form-floating  mb-3">
                        <input type="text" id="telefonou" class="form-control fondo_azul" placeholder="Numero Telefonico +505" pattern="^\d{8}" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   required>
                        <label for="floatingInput" class="fondo_azul">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating col-sm-12 mt-3">
                        <textarea class="form-control fondo_azul" placeholder="Dirección" id="direccionu" maxlength="300" required></textarea>
                        <label for="floatingTextarea" class="fondo_azul"> Dirección </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn fondo_degradado_azul text-light" id="Ac_Personal">Actualizar</button>
                    <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
      </div>
    </div>
</form>
<!-- Modal de actualizacion de Personal FIN -->

<!-- Codigo para cargar el select de sexo  -->
<script text="type/javascript">
    $(document).ready(function(){
        // $('#sexo_u').load('../componentes/select_sexo.php');
    });
</script>



<!-- Evento del boton Guardar Personal -->
<script type="text/javascript" >
var form = document.getElementById('form_registro');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let cedula=$('#cedula').val();
        let p_nombre=$('#p_nombre').val();
        let s_nombre=$('#s_nombre').val();
        let p_apellido=$('#p_apellido').val();
        let s_apellido=$('#s_apellido').val();
        let telefono=$('#telefono').val();
        let direccion=$('#direccion').val();
        // /*variable para guardar fecha*/
        let fecha_nac=$('#fecha_nac').val();
        // /*Ubicando el select del cargo*/ 
        let select_cargo = document.getElementById('select_cargo');
        // /*Obteniendo el valor de la opcion de cargo*/
        let value_cargo = select_cargo.value;
        // /*Ubicando el select de sexo*/
        let select_sexo = document.getElementById('sexo');
        // /*Obteniendo el valor de la opcion de sexo*/
        let value_sexo = select_sexo.value;
        alert('Funciona')
        agregar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido, fecha_nac, value_sexo, telefono, direccion, value_cargo);
 });
</script>

<!-- Evento del boton Actualizar Personal -->
<script type="text/javascript" >
var form = document.getElementById('form_actualizar');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let cedula=$('#cedulau').val();
        let p_nombre=$('#p_nombreu').val();
        let s_nombre=$('#s_nombreu').val();
        let p_apellido=$('#p_apellidou').val();
        let s_apellido=$('#s_apellidou').val();
        let telefono=$('#telefonou').val();
        let direccion=$('#direccionu').val();
        // /*variable para guardar fecha*/
        let fecha_nac=$('#fecha_nacu').val();
        // /*Ubicando el select del cargo*/ 
        let select_cargo = document.getElementById('select_cargo_u');
        // /*Obteniendo el valor de la opcion de cargo*/
        let value_cargo = select_cargo.value;
        // /*Ubicando el select de sexo*/
        let select_sexo = document.getElementById('sexou');
        // /*Obteniendo el valor de la opcion de sexo*/
        let value_sexo = select_sexo.value;
        

    
        actualizar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido, fecha_nac, value_sexo, telefono, direccion, value_cargo);
      
});
</script>


<!-- Modal de pregunta para consulta Eliminacion de Personal -->
<script type="text/javascript">
   function Eliminar(cedula, nombre) {
    
    Swal.fire({
        title: '¿ELIMINAR EL REGISTRO DE ' + nombre + ' ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1F618D',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            $(document).ready(function() {
                eliminar_personal(cedula);
            });
        }
    })
}

</script>




<!-- 
<script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
      $('#sexo').select2({
        width: '100%',
        dropdownParent: $("#modal-agregar")
    })
    });
</script> -->



<?php
include 'includes/footer.php';
?>

