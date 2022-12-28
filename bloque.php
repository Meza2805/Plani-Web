<!DOCTYPE html>
<html lang="es">
<head>

    <title>REGISTROS DE BLOQUES</title>
<?php
include 'includes/header.php';
?>
<form class="form-card needs-validation" novalidate>
                            <div class="row mt-4">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-calendar-range"></i>  <strong>Registro de Bloques</strong> </h1>
                                </div>
                            </div>
                       
                            <div class="row mt-3">
                                <div class="text-left flex-column d-flex">
                                    <h4 class="letra_fondo">Datos Generales</h4>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left mt-1 position-relative">
                                <div class="col-sm-6 flex-column d-flex mt-1 ml-3 letra_fondo">
                                    <label for="" class="">Modalidad</label>
                                    <select class="form-select form-control" name="" id="" required>
                                        <option selected disabled value="">Seleccione...</option>
                                        <option value="1">Preescolar Comunitario</option>
                                        <option value="1">Primaria Regular</option>
                                        <option value="1">Secundaria Diurna</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="col-sm-6 flex-column d-flex mt-1">
                                    <label for="">Numero de Bloque</label>
                                    <select class="form-select form-control" name="" id="" required>
                                            <option selected disabled value="">Seleccione...</option>
                                            <option value="1">Bloque 1</option>
                                            <option value="1">Bloque 2</option>
                                            <option value="1">Bloque 3</option>
                                        </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-1 position-relative">
                                <div class="col-sm-6 flex-column d-flex mt-1">
                                    <label for="" class="">Turno</label>
                                    <select class="form-select form-control" name="" id="" required>
                                        <option selected disabled value="">Seleccione...</option>
                                        <option value="1">Matutino</option>
                                        <option value="1">Vespertino</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <hr style="color: #072342;" size="" />

                            <!-- Tiempo Designado   Inicio-->

                            <div class="row mt-3 mb-3">
                                <div class="text-left flex-column d-flex">
                                    <h4 class="letra_fondo"> Tiempo designado para cada bloque</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row justify-content">
                                    <div class="form-group col-sm-2 flex-column d-flex mt-1">
                                        <h5 class="letra_fondo">Incio</h5>
                                    </div>
                                </div>

                                <div class="row mt-1 mb-0">
                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-control">Hora</label>
                                            <input type="number" class="form-control" name="test" min=1 max=12 oninput="validity.valid||(value='');" required>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-control">Minutos</label>
                                            <input type="number" class="form-control" name="test" min=1 max=59 oninput="validity.valid||(value='');" required>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-co"><i class="bi bi-alarm-fill"></i></label>
                                            <select class="form-select form-control" name="" id="" required>
                                                <option selected disabled value="">---</option>
                                                <option value="1">AM</option>
                                                <option value="1">PM</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row justify-content">
                                    <div class="form-group col-sm-2 flex-column d-flex mt-3">
                                        <h5 class="text-primary">Fin</h5>
                                    </div>
                                </div>
                                <div class="row mt-1 mb-0">
                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-control">Hora</label>
                                            <input type="number" class="form-control" name="test" min=1 max=12 oninput="validity.valid||(value='');" required>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-control">Minutos</label>
                                            <input type="number" class="form-control" name="test" min=1 max=59 oninput="validity.valid||(value='');" required>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 flex-column d-flex mt-1">
                                        <div class="input-group">
                                            <label class="input-group-text fondo text-white form-co"><i class="bi bi-alarm-fill"></i></label>
                                            <select class="form-select form-control" name="" id="" required>
                                                <option selected disabled value="">---</option>
                                                <option value="1">AM</option>
                                                <option value="1">PM</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr style="color: #072342;" size="" />

                            <!-- Tiempo Designado   Fin-->


                            <div class="row justify-content text-left mt-3 mb-3">
                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit"> <strong>Guardar</strong></button>
                                </div>

                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="reset"> <strong>Limpiar</strong> </button>
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
