<?php
include '../includes/header02.php';
?>
                <div class="row mt-4">
                    <div class="text-center">
                        <h1 class="letra_fondo"> <i class="bi bi-border-width"></i> <Strong> Registro de Modalidades </Strong></h1>
                    </div>
                </div>
                <hr>
                <caption>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-agregar" >
                    Agregrar Nuevo  <i class="bi bi-border-width"></i>
                </button>
                </caption> 


                <div class="table-responsive mt-4" id="tabla_modalidades">
                </div>



<!-- Modal de registro de MODALIDADES FIN -->
<form action="" class="needs-validation" novalidate >
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-border-width"></i> <strong>Registrar Modalidad</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombre" class="form-control letra_fondo text-uppercase" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Modalidad</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="guardar" onclick="mostrar()">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
                </div>
              
            </div>
           
      </div>
    </div>
</form>
<!-- Modal de registro de MODALIDADES FIN -->


<!-- Modal de actualizacion de MODALIDADES FIN -->
<form action="" class="needs-validation" novalidate >
    <div class="modal fade" id="modal-actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-border-width"></i> <strong>Registrar Modalidad</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="codigou" class="form-control letra_fondo text-uppercase" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">CODIGO</label>
                    </div>
                </div>
                <div class="modal-body"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="p_nombre" id="p_nombre" class="form-control letra_fondo text-uppercase" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="modalidadu">MODALIDAD</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="guardar" onclick="mostrar()">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
                </div>
              
            </div>
           
      </div>
    </div>
</form>
<!-- Modal de actualizacion de MODALIDADES FIN -->


    


<?php
include '../includes/footer02.php';
?>

<script text="type/javascript">
    $(document).ready(function(){
        $('#tabla_modalidades').load('../componentes/tabla_modalidades.php');

    });
</script>
