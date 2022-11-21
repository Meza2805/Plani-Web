<?php
include '../includes/header02.php';
?>

    <!-- <form class="form-card needs-validation letra_fondo" novalidate onsubmit="event.preventDefault()">
                            <div class="row">
                                <div class="text-center">
                                    <h1 class="letra_fondo">   <i class="bi bi-journal-medical"></i>   <strong> Actividades Académicas</strong>     </h1>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">
                                <h4 class="text-center">Datos Generales </h4>
                                <div class="form-floating col-sm-6 mt-3">
                                    <textarea class="form-control limitar_area" placeholder="Línea_accion" id="linea_accion" maxlength="450" required></textarea>
                                    <label for="floatingTextarea">Línea de acción</label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-3">
                                    <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">Descripción de Protagonistas</label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <input type="text" class="form-control" placeholder="Meta Anual" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                  
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <input type="text" class="form-control" placeholder="Meta Trimestral" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <input type="text" class="form-control" placeholder="Participantes Femeninos" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>

                                 
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <input type="text" class="form-control" placeholder="Participantes Masculinos" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">

                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">
                             
                                <h4 class="text-center">Valoración Cualitativa </h4>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Qué se hizo? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Qué se hizo? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Con cuántos y quiénes fueron los protagonistas? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Con cuántos y quiénes fueron los protagonistas? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder=" ¿Sobre qué? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea"> ¿Sobre qué? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Para qué se hizo o cuál fue el resultado? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Para qué se hizo o cuál fue el resultado?</label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-floating col-sm-12 mt-1">
                                    <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea"> ¿Cuál es el impacto del resultado? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>


                            </div>




                            <div class="row justify-content-between text-left mt-3 position-relative">
                                <h4 class="text-center">Principales Dificultades </h4>
                          
                                <div class="form-floating col-sm-12 mt-1 text-center">
                                    <textarea class="form-control limitar_area" placeholder=" Redacte un párrafo donde señale la causa del incumplimiento " id="floatingTextarea" maxlength="300"></textarea>
                                    <label for="floatingTextarea"> Redacte un párrafo donde señale la causa del incumplimiento </label>

                                </div>


                            </div>



                            <div class="row justify-content-between text-left mt-3 position-relative">
                              
                                <h4 class="text-center">Plan de Medidas </h4>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Qué se hizo? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Cuándo se realizará? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Con cuántos y quiénes fueron los protagonistas? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Con quiénes? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder=" ¿Sobre qué? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea"> ¿Cuántos? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Para qué se hizo o cuál fue el resultado? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">¿Cómo?</label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-floating col-sm-12 mt-1">
                                    <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea"> ¿Dónde? </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>


                            </div>


                            <div class="row justify-content-between text-left mt-3 position-relative">
                            
                                <h4 class="text-center">Detalles Curriculares </h4>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Qué se hizo? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">Situaciones en estado de Alertas </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>
                                <div class="form-floating col-sm-6 mt-1">
                                    <textarea class="form-control limitar_area" placeholder="¿Con cuántos y quiénes fueron los protagonistas? " id="floatingTextarea" maxlength="300" required></textarea>
                                    <label for="floatingTextarea">Propuesta de toma de decisiones para la Dirección Superior </label>
                                    <div class="invalid-tooltip">
                                        Campo Obligatorio
                                    </div>
                                </div>

                            </div>


                            <div class="row justify-content-between text-left mt-3 position-relative">

                                <div class="form-floating col-sm-12 mt-1">
                                    <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="observacion" maxlength="300"></textarea>
                                    <label for="observacion"> Observaciones</label>

                                </div>

                            </div>






                            <div class="row justify-content text-left mt-3">
                                <div class="form-group col-sm-3 flex-column d-flex mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                    <button class="btn btn-primary" type="submit"> <strong>  Guardar </strong></button>
                                </div>
                            </div>
                           
                          
                        </form> -->

                <div class="row mt-4">
                    <div class="text-center">
                        <h1 class="letra_fondo"> <i class="bi bi-pencil-square"></i> <strong>Registro de Actividades</strong> </h1>
                    </div>
                </div>
                <hr>
                <caption>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-agregar">
                    Agregrar Nueva<i class="bi bi-pencil-square"></i>
                    </button>
                </caption> 

                <div class="row mt-2">
                    <div class="text-center">
                        <h2 class="letra_fondo">  Generalidades</h2>
                    </div>
                </div>

                        <div id="actividad01">

                        </div>





<?php
include '../includes/footer02.php';
?>

<!-- <script>
    $(document).ready( function(){
   
} );
</script> -->

<!-- para llamar la tabla de actividad01 -->
<script type="text/javascript">
    $(document).ready(function(){
       
        $('#actividad01').load('../componentes/tabla_Actividad01.php');
    });
</script>
