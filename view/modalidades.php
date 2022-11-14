<?php
include '../includes/header02.php';
?>
 <div class="row mt-4">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-border-width"></i> <Strong> Registro de Modalidades </Strong></h1>
                                </div>
                            </div>
                            <hr>
   <!-- <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
                            <div class="row mt-4">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-border-width"></i> <Strong> Registro de Modalidades </Strong></h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3">
                                <div class="text-left flex-column d-flex">
                                    <h3 class="letra_fondo">Datos Generales</h3>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-4 position-relative letra_fondo">
                                
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" placeholder="Descripcion de Modalidad" minlength="0" maxlength="15" required>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                    
                                </div>
                            </div>



                            <hr>
                            <div class="row justify-content text-left mt-3">
                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit">  <strong>Guardar</strong> </button>
                                </div>

                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="reset"> <strong>Limpiar</strong> </button>
                                </div>

                            </div>


                        </form> -->
                        <div class="table-responsive mt-4" id="tabla_modalidades">
                           
                        </div>



<?php
include '../includes/footer02.php';
?>

<script text="type/javascript">
    $(document).ready(function(){
        $('#tabla_modalidades').load('../componentes/tabla_modalidades.php');

    });
</script>
