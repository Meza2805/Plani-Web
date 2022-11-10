<?php
include '../includes/header02.php';
?>
   <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
                    <div class="row mt-4">
                        <div class="text-center">
                            <h1 class="letra_fondo"> <i class="bi bi-pencil-square"></i> <strong>Registro de Asignatura</strong> </h1>
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
                            <input type="text" class="form-control letra_fondo" placeholder="Descripcion de Asignatura" minlength="0" maxlength="25" required>
                            <div class="invalid-tooltip">
                                Campo Obligatorio
                            </div>
                
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="text-left flex-column d-flex">
                            <h3 class="letra_fondo">Modalidades de Asignatura</h3>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left mt-1 position-relative letra_fondo">
                        <div class="form-group col-sm-3 flex-column d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                          Preescolar Formal
                                        </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                          Prescolar Comunitario
                                        </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-3 flex-column d-flex letra_fondo">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                          Primaria Regular
                                        </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                          Secundaria Diurna
                                        </label>
                            </div>




                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">

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
                            <button class="btn btn-primary" type="submit"> <strong>Limpiar</strong></button>
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

include '../includes/footer02.php';
?>