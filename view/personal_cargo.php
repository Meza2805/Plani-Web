<?php
include '../includes/header02.php';
?>
    <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
        <div class="row mt-4 mb-5">
            <div class="text-center">
                <h1 class="letra_fondo"> <i class="bi bi-person-video2"></i></i> <strong> Cargo Educativo  </strong></h1>
            </div>
        </div>
        <caption>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-cargo">
            Agregrar Nuevo  <i class="bi bi-person-video2"></i>
            </button>
        </caption> 

    </form>
    <div class="table-responsive mt-4" id="cargo-remoto">                   
    </div>

    <!-- llamado al modal de registro  cargo INCIO-->
    <form action="" class="needs-validation" novalidate >
    <div class="modal fade" id="modal-cargo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Registrar Cargo Administrativo</strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="cargo" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="16" required>
                        <label for="floatingInput" class="letra_fondo">CARGO ACADÉMICO </label>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="agregar_cargo">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
      </div>
    </div>
    </form>
    <!-- llamado al modal de registro FIN-->


      <!-- llamado al modal de actualizacon  cargo INCIO-->
    <form action="" class="needs-validation" novalidate >
        <div class="modal fade" id="modal-cargo_u" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>ACTUALIZAR CARGO ACADÉMICO </strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="id_c_u" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="16" disabled required>
                        <label for="floatingInput" class="letra_fondo">CODIGO </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="cargo_u" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="25" required>
                        <label for="floatingInput" class="letra_fondo">CARGO ACADÉMICO </label>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="actualizar_cargo">GUARDAR</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
            </div>
        </div>
      </div>
    </div>
    </form>
    <!-- llamado al modal de registro FIN-->
<?php
include '../includes/footer02.php';
?>

<!-- Funcion para agregar tabla -->
<script type="text/javascript">
    $(document).ready(function(){

        $('#cargo-remoto').load('../componentes/tabla_cargo.php');
    });

</script>

<!-- Evento agregar cargo -->
<script type="text/javascript">
$(document).ready(function(){
    $('#agregar_cargo').click(function(){
        let cargo=$('#cargo').val();
        agregar_cargo(cargo);
    });
    });
</script>

<!-- Evento actualizar cargo -->
<script type="text/javascript">
$(document).ready(function(){
    $('#actualizar_cargo').click(function(){
        let id_cargo=$('#id_c_u').val();
        let cargo=$('#cargo_u').val();
        actualizar_cargo(id_cargo,cargo);
    });
    });
</script>




