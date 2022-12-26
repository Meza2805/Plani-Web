<?php
include '../includes/header.php';
?>
                <div class="row mt-4">
                    <div class="text-center">
                        <h1 class="letra_fondo"> <i class="bi bi-pencil-square"></i> <strong>Registro de Actividades</strong> </h1>
                    </div>
                </div>
                <hr>
                <caption>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_actividad">
                    Agregrar Nueva<i class="bi bi-pencil-square"></i>
                    </button>
                </caption> 

                <div class="row mt-2">
                    <div class="text-center">
                        <h3 class="letra_fondo">GENERALIDADES</h3>
                    </div>
                </div>
                <hr>

                <div id="actividad01">
                </div>
                        <hr>

                <div id="actividad02">
                </div>
                <div class="row mt-2">
                    <div class="text-center">
                        <h3 class="letra_fondo">AVANCES Y RESULTADOS</h3>
                    </div>
                </div>
                <hr>

                <div id="actividad03">
                </div>

                <div class="row mt-2">
                    <div class="text-center">
                        <h4 class="letra_fondo">VALORACIÓN CUALITATIVA</h4>
                    </div>
                </div>
                <hr>

                <div id="actividad04">
                </div>

                <div class="row mt-2">
                    <div class="text-center">
                        <h4 class="letra_fondo">PLAN DE MEDIDAS</h4>
                    </div>
                </div>
                <hr>
        
                <div id="actividad05">
                </div>

                        </div>

                        
        <div class="row mt-2">
            <div class="text-center">
                <h4 class="letra_fondo">ASPECTOS FINALES</h4>
            </div>
        </div>
        <hr>
        <div id="actividad06">
        </div>

    <!-- llamado al modal de registro  cargo INCIO-->
        <form  id="form_actividad">
            <div class="modal fade" id="modal_actividad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Registro de Actividades</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                        <h4 class="text-center">Datos Generales </h4>
                        <div class="row">
                                    <div class="form-floating  mt-1">
                                        <textarea class="form-control limitar_area" placeholder="Línea_accion" id="linea_accion" maxlength="550" required></textarea>
                                        <label for="floatingTextarea">Línea de acción</label>
                                    </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="des" maxlength="1300" required></textarea>
                                        <label for="des">Descripción de Protagonistas</label>       
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="meta_anual" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="meta_anual">Meta Anual</label>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="meta_trimestral" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="meta_trimestral">Meta Trimestral</label>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="p_f" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="p_f">Participantes Femeninos</label>   
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="p_m" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="p_m">Participantes Masculinos</label>   
                            </div>
                        </div>
                        <h4 class="text-center">Valoración Cualitativa </h4>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp01" maxlength="1300" required></textarea>
                                        <label for="cp01">¿Qué se hizo?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp02" maxlength="1300" required></textarea>
                                        <label for="cp02">¿Con cuántos y quiénes fueron los protagonistas? </label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp03" maxlength="1300" required></textarea>
                                        <label for="cp03">¿Sobre qué? </label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp04" maxlength="1300" required></textarea>
                                        <label for="cp04">¿Para qué se hizo o cuál fue el resultado?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp05" maxlength="1300" required></textarea>
                                        <label for="cp05"> ¿Cuál es el impacto del resultado?</label>       
                            </div>
                        </div>
                        <h4 class="text-center">Plan de Medidas</h4>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp01" maxlength="1300" required></textarea>
                                        <label for="mp01"> ¿Cuándo se realizará?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp02" maxlength="1300" required></textarea>
                                        <label for="mp02">¿Con quiénes?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp03" maxlength="1300" required></textarea>
                                        <label for="mp03">¿Cuántos?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp04" maxlength="1300" required></textarea>
                                        <label for="mp04">¿Cómo?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp05" maxlength="1300" required></textarea>
                                        <label for="mp05">¿Dónde?</label>       
                            </div>
                        </div>
                        <h4 class="text-center">Aspectos Finales</h4>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="difi" maxlength="1300" required></textarea>
                                        <label for="difi">Principales Dificultades</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="alerta" maxlength="1300" required></textarea>
                                        <label for="alerta">Situaciones en estado de alerta</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="propuesta" maxlength="1300" required></textarea>
                                        <label for="propuesta">Propuesta de toma de Decisiones</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="observaciones" maxlength="1300" required></textarea>
                                        <label for="observaciones">Observaciones</label>       
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="agregar_actividad">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de registro FIN-->



    <!-- llamado al modal de actualizacion actividad 01-->
     <form  id="form_actividad01">
            <div class="modal fade" id="modal_actividad01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Actualización</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                       
                        <div class="row">
                                <div class="form-floating  mt-1">
                                    <textarea class="form-control limitar_area altura_area"  row="100" placeholder="Línea_accion" id="linea_accion" maxlength="550"   required></textarea>
                                    <label for="floatingTextarea">Línea de acción</label>
                                </div>
                        </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de actualizacion actividad 01-->

      <!-- llamado al modal de actualizacion actividad 02-->
      <form  id="form_actividad02">
            <div class="modal fade" id="modal_actividad02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Actualización</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                       
                        <div class="row">
                                <div class="form-floating  mt-1">
                                    <textarea class="form-control limitar_area altura_area"  row="100" placeholder="Línea_accion" id="linea_accion" maxlength="550"   required></textarea>
                                    <label for="floatingTextarea">Línea de acción</label>
                                </div>
                        </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de actualizacion actividad 02-->

      <!-- llamado al modal de actualizacion actividad 02-->
      <form  id="form_actividad03">
            <div class="modal fade" id="modal_actividad03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Actualización</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                       
                        <div class="row">
                                <div class="form-floating  mt-1">
                                    <textarea class="form-control limitar_area altura_area"  row="100" placeholder="Línea_accion" id="linea_accion" maxlength="550"   required></textarea>
                                    <label for="floatingTextarea">Línea de acción</label>
                                </div>
                        </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de actualizacion actividad 02-->

   
<?php
include '../includes/footer.php';
?>

<!-- Evento agregar actividad -->
<script>
 var form = document.getElementById('form_actividad');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let cedula = "<?php echo $cedula ?>";
    let linea_accion=$('#linea_accion').val();
    let prota=$('#des').val();
    let meta_anual=$('#meta_anual').val();
    let meta_trimestral=$('#meta_trimestral').val();
    let p_femenino=$('#p_f').val();
    let p_masculino=$('#p_m').val();
    let cp01=$('#cp01').val();
    let cp02=$('#cp02').val();
    let cp03=$('#cp03').val();
    let cp04=$('#cp04').val();
    let cp05=$('#cp05').val();
    let mp01=$('#mp01').val();
    let mp02=$('#mp02').val();
    let mp03=$('#mp03').val();
    let mp04=$('#mp04').val();
    let mp05=$('#mp05').val();
    let dificultades=$('#difi').val();
    let alertas=$('#alerta').val();
    let propuestas=$('#propuesta').val();
    let observaciones=$('#observaciones').val();
  agregar_actividad(cedula,linea_accion,prota,meta_anual,meta_trimestral,p_femenino,p_masculino,cp01,cp02,cp03,cp04
  ,cp05,mp01,mp02,mp03,mp04,mp05,dificultades,alertas,propuestas,observaciones);
 });
</script>

<!-- para llamar la tabla de actividad01 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad01').load('../componentes/tabla_Actividad01.php');
    });
</script>

<!-- para llamar la tabla de actividad02 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad02').load('../componentes/tabla_Actividad02.php');
    });
</script>
<!-- para llamar la tabla de actividad03 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad03').load('../componentes/tabla_Actividad03.php');
    });
</script>
<!-- para llamar la tabla de actividad04 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad04').load('../componentes/tabla_Actividad04.php');
    });
</script>
<!-- para llamar la tabla de actividad05 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad05').load('../componentes/tabla_Actividad05.php');
    });
</script>
<!-- para llamar la tabla de actividad06 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad06').load('../componentes/tabla_Actividad06.php');
    });
</script>


