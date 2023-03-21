<!DOCTYPE html>
<html lang="es">
<head>

    <title>GRADOS</title>
<?php
include 'includes/header.php';
?>

                            <div class="row mt-4">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-mortarboard"></i>  <strong>Registro de Grados</strong> </h1>
                                </div>
                            </div>
                           
                            
                           
                           
                           
                     
                            <div class="table-responsive mt-1" id="tabla_grado">    
                            </div>
<?php
include 'includes/footer.php';
?>


      <!-- Funcion para llamar a la tabla de grados -->
      <script text="type/javascript">
        $(document).ready(function(){
            $('#tabla_grado').load('../componentes/tabla_grado.php');
        });
    </script>