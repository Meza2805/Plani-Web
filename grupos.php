<!DOCTYPE html>
<html lang="es">
<head>

    <title>Grupos de Clases</title>
    <?php
    include 'includes/header.php';
    ?>

    <div class="row mt-4">
        <div class="text-center flex-column d-flex">
            <h3 class="letra_fondo"> <i class="bi bi-people-fill"></i> Grupos de Clases</h3>
        </div>
    </div>

    <hr>
                <caption>
                    <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal_grupo">
                    Agregrar Nuevo <i class="bi bi-people-fill"></i>
                    </button>
                </caption> 
     <hr>

    <div class="table-responsive mt-1" id="tabla_grupo">    
    </div>




        <!-- llamado al modal de registro de grupos de clases INCIO-->
        <form  id="form_grupo">
            <div class="modal fade" id="modal_grupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">   <i class="bi bi-people-fill"></i><strong> Registro de Grupo de Clases</strong>  </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                        <!-- <h4 class="text-center letra_fondo">Buscar Docente </h4> -->
                            <div class="row">
                               
                                <h5 class=" letra_fondo mt-3">Busque y Seleccione el Docente </h5>
                                <div class="container">
                                <div class="form-floating">
                                    <div class="mt-2 p-3 border border-primary" id="tabla_docente">
                                
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-floating mt-3">
                                            <input class="form-control " placeholder="Descripción de Protagonistas" id="cedula" maxlength="1300" disabled></input>
                                            <label for="observaciones" class="letra_fondo">Cedula de Docente</label>        
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_modalidad" class="mt-3 fondo_azul"">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_grado" class="mt-3 fondo_azul"">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_turno" class="mt-3 fondo_azul"">
                                </div>
                            </div>
                            <div class="row">
                                <div id="select_seccion" class="mt-3 fondo_azul"">
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
    <!-- Funcion para llamar a la tabla docente -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_docente').load('../componentes/tabla_docente.php');
        });
    </script>

        <!-- Funcion para llamar a la tabla de grupos de clases -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_grupo').load('../componentes/tabla_grupo.php');
        });
    </script>

        <!-- Funcion para llamar el select de las modalidades -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#select_modalidad').load('../componentes/select_modalidades.php');
        });
    </script>

        <!-- Codigo para cargar el select de grado en dependecia de la modalidad seleccionada -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_grado').load('../componentes/select_grados.php',{codigo_modalidad});
    });   
    </script>

      <!-- Codigo para cargar el select de turno en dependecia de la modalidad seleccionada -->
    <script text="type/javascript">
        var codigo_modalidad;
        document.getElementById("select_modalidad").addEventListener('change', (event) => {
        codigo_modalidad= (event.target.value);
        $('#select_turno').load('../componentes/select_turnos02.php',{codigo_modalidad});
        });   
    </script>

    <!-- Codigo para cargar el select de seccion  -->
    <script text="type/javascript">
        $(document).ready(function(){
            $('#select_seccion').load('../componentes/select_seccion.php');
        });
    </script>

        <!-- Prueba de Funcion para capturar elemento de una tabla  -->
    <!-- <script text="type/javascript">
        $('#tbdocente tr').on('click', function(){
            var dato = $(this).find('td:first').html();
        
        
            $('#cedula').val(dato);
    
        });
    </script> -->

    

<?php
include 'includes/footer.php';
?>
