<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actividades Curriculares</title> 
<?php
include 'includes/header.php';
?>
                <div class="row mt-4">
                    <div class="text-center">
                        <h2 class="letra_fondo"> <i class="bi bi-pencil-square"></i> Registro de Actividades Curriculares </h2>
                    </div>
                </div>
                <hr>
                <caption>
                    <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal_actividad">
                    Agregrar Nueva<i class="bi bi-pencil-square"></i>
                    </button>
                </caption> 
                     <hr>
                <!-- <div class="row mt-2">
                    <div class="text-center">
                        <h3 class="letra_fondo">Generalidades</h3>
                    </div>
                </div> -->
           
                <div id="actividad01" class="table-responsive">
                </div>
            <hr>
               
    <!-- llamado al modal de registro de actividades INCIO-->
        <form  id="form_actividad">
            <div class="modal fade" id="modal_actividad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Registro de Actividades</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                        <h4 class="text-center letra_fondo">Datos Generales </h4>
                        <div class="row">
                                    <div class="form-floating  mt-1">
                                        <textarea class="form-control limitar_area" placeholder="Línea_accion" id="linea_accion" maxlength="550" required></textarea>
                                        <label for="floatingTextarea" class="letra_fondo">Línea de acción</label>
                                    </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="des" maxlength="1300" required></textarea>
                                        <label for="des" class="letra_fondo">Descripción de Protagonistas</label>       
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="meta_anual" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="meta_anual" class="letra_fondo">Meta Anual</label>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="meta_trimestral" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="meta_trimestral" class="letra_fondo">Meta Trimestral</label>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="p_f" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="p_f" class="letra_fondo">Participantes Femeninos</label>   
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group form-floating flex-column d-flex mt-3">
                                    <input type="text" class="form-control" placeholder="Meta Anual" id="p_m" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                    <label for="p_m" class="letra_fondo">Participantes Masculinos</label>   
                            </div>
                        </div>
                        <h4 class="text-center letra_fondo">Valoración Cualitativa </h4>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp01" maxlength="1300" required></textarea>
                                        <label for="cp01" class="letra_fondo">¿Qué se hizo?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp02" maxlength="1300" required></textarea>
                                        <label for="cp02" class="letra_fondo">¿Con cuántos y quiénes fueron los protagonistas? </label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp03" maxlength="1300" required></textarea>
                                        <label for="cp03" class="letra_fondo">¿Sobre qué? </label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp04" maxlength="1300" required></textarea>
                                        <label for="cp04" class="letra_fondo">¿Para qué se hizo o cuál fue el resultado?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp05" maxlength="1300" required></textarea>
                                        <label for="cp05" class="letra_fondo"> ¿Cuál es el impacto del resultado?</label>       
                            </div>
                        </div>
                        <h4 class="text-center letra_fondo">Plan de Medidas</h4>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp01" maxlength="1300" required></textarea>
                                        <label for="mp01" class="letra_fondo"> ¿Cuándo se realizará?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp02" maxlength="1300" required></textarea>
                                        <label for="mp02" class="letra_fondo">¿Con quiénes?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp03" maxlength="1300" required></textarea>
                                        <label for="mp03" class="letra_fondo">¿Cuántos?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp04" maxlength="1300" required></textarea>
                                        <label for="mp04" class="letra_fondo">¿Cómo?</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3 mb-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="mp05" maxlength="1300" required></textarea>
                                        <label for="mp05" class="letra_fondo">¿Dónde?</label>       
                            </div>
                        </div>
                        <h4 class="text-center letra_fondo">Aspectos Finales</h4>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="difi" maxlength="1300" required></textarea>
                                        <label for="difi" class="letra_fondo">Principales Dificultades</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="alerta" maxlength="1300" required></textarea>
                                        <label for="alerta" class="letra_fondo">Situaciones en estado de alerta</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="propuesta" maxlength="1300" required></textarea>
                                        <label for="propuesta" class="letra_fondo">Propuesta de toma de Decisiones</label>       
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-floating mt-3">
                                        <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="observaciones" maxlength="1300"></textarea>
                                        <label for="observaciones" class="letra_fondo">Observaciones</label>       
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn fondo_degradado_azul text-light" id="agregar_actividad">Guardar</button>
                            <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de registro FIN-->



        <!-- llamado al modal de actualizacion de actividades INCIO-->
        <form  id="form_actividad_u">
            <div class="modal fade" id="modal_ac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fondo_azul" id="exampleModalLabel">   <i class="bi bi-pencil-square"></i> <strong>Actualización de Actividades</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <h4 class="text-center letra_fondo">Datos Generales </h4>
                            <div class="row">
                                <div class="form-group form-floating flex-column d-flex mt-1">
                                        <input type="text" class="form-control fondo_azul" placeholder="Codigo de Actividad" id="codigo_u" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" disabled>      
                                        <label for="meta_anual" class="fondo_azul">Codigo de Actividad</label>   
                                </div>
                            </div>
                             <div class="row">
                                        <div class="form-floating  mt-3">
                                            <textarea class="form-control fondo_azul" placeholder="Línea_accion" id="linea_accion_u" maxlength="550" required></textarea>
                                            <label for="floatingTextarea" class="fondo_azul">Línea de acción</label>
                                        </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="des_u" maxlength="1300" required></textarea>
                                            <label for="des" class="fondo_azul">Descripción de Protagonistas</label>       
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-floating flex-column d-flex mt-3">
                                        <input type="text" class="form-control fondo_azul" placeholder="Meta Anual" id="meta_anual_u" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                        <label for="meta_anual" class="fondo_azul">Meta Anual</label>   
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-floating flex-column d-flex mt-3">
                                        <input type="text" class="form-control fondo_azul" placeholder="Meta Anual" id="meta_trimestral_u" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                        <label for="meta_trimestral" class="fondo_azul">Meta Trimestral</label>   
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-floating flex-column d-flex mt-3">
                                        <input type="text" class="form-control fondo_azul" placeholder="Meta Anual" id="p_f_u" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                        <label for="p_f" class="fondo_azul">Participantes Femeninos</label>   
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group form-floating flex-column d-flex mt-3">
                                        <input type="text" class="form-control fondo_azul" placeholder="Meta Anual" id="p_m_u" minlength="0" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>      
                                        <label for="p_m" class="fondo_azul">Participantes Masculinos</label>   
                                </div>
                            </div>
                            <h4 class="text-center fondo_azul">Valoración Cualitativa </h4>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="cp01_u" maxlength="1300" required></textarea>
                                            <label for="cp01" class="fondo_azul">¿Qué se hizo?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="cp02_u" maxlength="1300" required></textarea>
                                            <label for="cp02" class="fondo_azul">¿Con cuántos y quiénes fueron los protagonistas? </label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="cp03_u" maxlength="1300" required></textarea>
                                            <label for="cp03" class="fondo_azul">¿Sobre qué? </label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="cp04_u" maxlength="1300" required></textarea>
                                            <label for="cp04" class="fondo_azul">¿Para qué se hizo o cuál fue el resultado?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3 mb-3">
                                            <textarea class="form-control limitar_area" placeholder="Descripción de Protagonistas" id="cp05_u" maxlength="1300" required></textarea>
                                            <label for="cp05" class="fondo_azul"> ¿Cuál es el impacto del resultado?</label>       
                                </div>
                            </div>
                            <h4 class="text-center fondo_azul">Plan de Medidas</h4>
                            <div class="row ">
                                <div class="form-floating mt-3 mb-3">
                                            <textarea class="form-control fondo_azul" placeholder="Descripción de Protagonistas" id="mp01_u" maxlength="1300" required></textarea>
                                            <label for="mp01" class="fondo_azul"> ¿Cuándo se realizará?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="mp02_u" maxlength="1300" required></textarea>
                                            <label for="mp02" class="fondo_azul">¿Con quiénes?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="mp03_u" maxlength="1300" required></textarea>
                                            <label for="mp03" class="fondo_azul">¿Cuántos?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="mp04_u" maxlength="1300" required></textarea>
                                            <label for="mp04" class="fondo_azul">¿Cómo?</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3 mb-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="mp05_u" maxlength="1300" required></textarea>
                                            <label for="mp05" class="fondo_azul">¿Dónde?</label>       
                                </div>
                            </div>
                            <h4 class="text-center fondo_azul">Aspectos Finales</h4>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="difi_u" maxlength="1300" required></textarea>
                                            <label for="difi" class="fondo_azul">Principales Dificultades</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="alerta_u" maxlength="1300" required></textarea>
                                            <label for="alerta" class="fondo_azul">Situaciones en estado de alerta</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="propuesta_u" maxlength="1300" required></textarea>
                                            <label for="propuesta" class="fondo_azul">Propuesta de toma de Decisiones</label>       
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-floating mt-3">
                                            <textarea class="form-control limitar_area fondo_azul" placeholder="Descripción de Protagonistas" id="observaciones_u" maxlength="1300"></textarea>
                                            <label for="observaciones" class="fondo_azul">Observaciones</label>       
                                </div>
                            </div> 
                        </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn fondo_degradado_azul text-light" id="agregar_actividad">Guardar</button>
                                <button type="button" class="btn fondo_degradado_rojo text-light" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                </div>
                </div>
            </div>
         </form>
    <!-- llamado al modal de registro FIN-->


   


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

<!-- Evento actualizar actividad -->
<script>
    var form = document.getElementById('form_actividad_u');
    form.addEventListener('submit',function(event){
    event.preventDefault();
    let codigo = $('#codigo_u').val();
    let linea_accion=$('#linea_accion_u').val();
    let prota=$('#des_u').val();
    let meta_anual=$('#meta_anual_u').val();
    let meta_trimestral=$('#meta_trimestral_u').val();
    let p_femenino=$('#p_f_u').val();
    let p_masculino=$('#p_m_u').val();
    let cp01=$('#cp01_u').val();
    let cp02=$('#cp02_u').val();
    let cp03=$('#cp03_u').val();
    let cp04=$('#cp04_u').val();
    let cp05=$('#cp05_u').val();
    let mp01=$('#mp01_u').val();
    let mp02=$('#mp02_u').val();
    let mp03=$('#mp03_u').val();
    let mp04=$('#mp04_u').val();
    let mp05=$('#mp05_u').val();
    let dificultades=$('#difi_u').val();
    let alertas=$('#alerta_u').val();
    let propuestas=$('#propuesta_u').val();
    let observaciones=$('#observaciones_u').val();
     actualizar_actividad(codigo,linea_accion,prota,meta_anual,meta_trimestral,p_femenino,p_masculino,cp01,cp02,cp03,cp04
     ,cp05,mp01,mp02,mp03,mp04,mp05,dificultades,alertas,propuestas,observaciones);
 });
</script>


<!-- para llamar la tabla de actividad01 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#actividad01').load('../componentes/tabla_Actividad01.php');
    });
</script>

<?php
include 'includes/footer.php';
?>
