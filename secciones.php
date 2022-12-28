<!DOCTYPE html>
<html lang="es">
<head>

    <title>SECCIONES</title>
<?php
include 'includes/header.php';
?>
    <!-- <img src="/images/perfil.png" alt=""> -->
    <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
                            <div class="row mt-4">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-tag"></i>  <strong>Registro de Secciones</strong> </h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3">
                                <div class="text-left flex-column d-flex">
                                    <h3 class="letra_fondo">Datos Generales</h3>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-4 position-relative">   
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <select class="form-select form-control letra_fondo" required>
                                            <option selected disabled value="">Seleccione Sección...</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="2">C</option> 
                                            <option value="2">D</option>
                                             <option value="2">E</option>
                                             <option value="2">G</option>
                                             <option value="2">H</option>
                                        </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content text-left mt-3">
                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit"> <strong>Guardar</strong></button>
                                </div>
                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit">  <strong>Limpiar</strong></button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped mt-4 table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Cargo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mark</td>
                                        <td>Otto</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>


<?php
include 'includes/footer.php';
?>
