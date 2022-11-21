<?php
include '../includes/header02.php';

?>

<!-- Enunciado de pagina INICIO -->
<div class="row justify-content-between text-center mt-3 position-relative">
    <div class="form-group  flex-column d-flex">
        <h1 class="letra_fondo"> <i class="bi bi-person-badge-fill"></i> <strong> Registro Personal Educativo</strong> </h1>
    </div>
    <hr>
</div>
<!-- Enunciado de pagina FIN -->

<!-- Boton de agregar INICIO -->
<caption>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-agregar">
    Agregrar Nuevo <i class="bi bi-person-plus-fill"></i>
    </button>
</caption> 
<!-- Boton de agregar FIN -->

<!-- Llamado a tabla del personal ubicada en carpeta complemento INICIO -->
<div class="table-responsive" id="tabla_personal">
</div>
<!-- Llamado a tabla del personal ubicada en carpeta complemento FIN -->

<!-- Modal de registro de Personal FIN -->
<form id="form_registro" >
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-person-badge-fill"></i>  <strong>Registrar Personal Educativo</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" id="cedula" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="16" pattern="^\d{3}-\d{6}-\d{4}[A-Z]{1}$" required>
                        <label for="floatingInput" class="letra_fondo">Numero de Cedula    (incluya "-")</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombre" class="form-control letra_fondo text-uppercase" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="s_nombre" id="s_nombre" class="form-control letra_fondo text-uppercase" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="p_apellido" id="p_apellido" class="form-control letra_fondo text-uppercase" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="s_apellido" id="s_apellido" class="form-control letra_fondo text-uppercase" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo apellido</label>
                    </div>

                     <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" id="fecha_nac" class="form-control letra_fondo text-uppercase" required id="fecha" max="2004-12-31" min="1957-01-01">
                    </div>
                    <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo"  id="sexo" required>
                                <option selected disabled value="">SEXO</option>
                                <option value="1" class="letra_fondo">Femenino</option>
                                <option value="2" class="letra_fondo" >Masculino</option>
                        </select>
                     </div> 
                     
                     <div class="letra_fondo mb-3" id="cargo"> </div>
                  
                    <div class="form-floating letra_fondo mb-3">
                        <input type="text" id="telefono" class="form-control letra_fondo" placeholder="Numero Telefonico +505" pattern="^\d{8}" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   required>
                        <label for="floatingInput" class="letra_fondo">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating letra_fondo col-sm-12 mt-3">
                        <textarea class="form-control limitar_area text-uppercase" placeholder=" ¿Cuál es el impacto del resultado? " id="direccion" maxlength="300" required></textarea>
                        <label for="floatingTextarea"> Dirección </label>
                      
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
                        <input type="text" id="cedulau" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="16" disabled required>
                        <label for="floatingInput" class="letra_fondo">Numero de Cedula    (incluya "-")</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombreu" class="form-control letra_fondo text-uppercase" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="s_nombre" id="s_nombreu" class="form-control letra_fondo text-uppercase" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="p_apellido" id="p_apellidou" class="form-control letra_fondo text-uppercase" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="s_apellido" id="s_apellidou" class="form-control letra_fondo text-uppercase" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo apellido</label>
                    </div>

                     <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" id="fecha_nacu" class="form-control letra_fondo text-uppercase" required id="fechau" max="2004-12-31" min="1957-01-01">
                    </div>
                    
                    <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo"  id="sexou" required>
                                <option selected disabled value="">SEXO</option>
                                <option value="1" class="letra_fondo">Femenino</option>
                                <option value="2" class="letra_fondo" >Masculino</option>
                        </select>
                    </div> 

                     
                    <div class="letra_fondo mb-3" id="cargo_u"> </div>
                  
                    <div class="form-floating letra_fondo mb-3">
                        <input type="text" id="telefonou" class="form-control letra_fondo" placeholder="Numero Telefonico +505" pattern="^\d{8}" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   required>
                        <label for="floatingInput" class="letra_fondo">Numero Telefonico +505</label>
                    </div>

                    <div class="form-floating letra_fondo col-sm-12 mt-3">
                        <textarea class="form-control limitar_area text-uppercase" placeholder=" ¿Cuál es el impacto del resultado? " id="direccionu" maxlength="300" required></textarea>
                        <label for="floatingTextarea"> Dirección </label>
                      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="Ac_Personal">Actualizar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
      </div>
    </div>
</form>
<!-- Modal de actualizacion de Personal FIN -->




<!-- FUNCIONES DE JAVASCRIPT -->

<!-- para llamar al selectt cargo -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargo').load('../componentes/select_cargo.php');
    });
</script>

<!-- Para llamar al select cargo de actulizar -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargo_u').load('../componentes/select_cargo_u.php');
    });
</script>

<!-- para llamar la tabla de personal -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla_personal').load('../componentes/tabla_personal.php');
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
    function Eliminar(cedula,nombre){
        Swal.fire({
  title: '¿ELIMINAR EL REGISTRO DE '+ nombre + ' ?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1F618D',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText: 'No'
}).then((result) => {
  if (result.isConfirmed) {
    $(document).ready(function(){
        eliminar_personal(cedula);
    });
  }
})}
</script>


<script>
$(document).ready( function () {
    $('#registro').DataTable();
} );
</script>

<?php
include '../includes/footer02.php';
?>

