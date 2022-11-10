<?php
include '../includes/header02.php';
?>


<form class="form-card needs-validation" novalidate>
                            <div class="row mt-4">
                                <div class="text-center flex-column d-flex">
                                    <h1 class="letra_fondo"> <i class="bi bi-people-fill"></i></i> Grupos de Clases</h1>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="text-left flex-column d-flex">
                                    <h3 class="letra_fondo"> Datos Generales</h3>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-1 position-relative">
                              
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <select class="form-select form-control" name="" id="" required>
                                        <option selected disabled value="">Modalidad</option>
                                        <option value="1">Preescolar Comunitario</option>
                                        <option value="1">Primaria Regular</option>
                                        <option value="1">Secundaria Diurna</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <select class="form-select form-control" name="" id="" required>
                                            <option selected disabled  value="">Grado</option>
                                            <option value="1">Primero</option>
                                            <option value="1">Segundo</option>
                                            <option value="1">Tercero</option>
                                            <option value="1">....</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <div class="row justifiy-conten text-left mt-3 position-relative">
                             


                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <select class="form-select form-control" name="" id="" required>
                                        <option selected disabled value="">Turno</option>
                                        <option value="1">Matutino</option>
                                        <option value="1">Vespertino</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <select class="form-select form-control" name="" id="" required>
                                    
                                    <option selected disabled value="">Sección</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                </select>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>

                                </div>
                            </div>

                        
                            <div class="row mt-3">
                                <div class="text-left flex-column d-flex">
                                    <h4 class="letra_fondo"> Datos Profesor Guia</h4>
                                </div>
                            </div>



                            <div class="row justify-content-between text-left mt-1 position-relative">

                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nombre de Profesor" required>
                                        <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                                        <div class="invalid-tooltip">
                                            Campo Obligatorio
                                        </div>
                                    </div>

                                </div>

                            </div>



                            <div class="table-responsive mt-1">
                                <table class="table table-striped mt-1 table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>

                                            <th scope="col">Nombre de Profesor</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>

                                            <td>Otto</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>

                                            <td>Otto</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="row justify-content text-left mt-3">
                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>

                                <div class="form-group col-sm-3 flex-column d-flex mt-1">
                                    <button class="btn btn-primary" type="submit">Limpiar</button>
                                </div>

                            </div>


                        </form>
                        <div class="table-responsive mt-1">
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
