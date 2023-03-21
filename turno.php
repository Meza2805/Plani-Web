<!DOCTYPE html>
<html lang="es">
<head>

    <title>TURNOS</title>
<?php
include 'includes/header.php';
?>

    <div class="row mt-4">
        <div class="text-center">
            <h1 class="letra_fondo"> <i class="bi bi-clock"></i> <strong> Registro de Turnos </strong></h1>
        </div>
    </div>

    <div class="table-responsive mt-1" id="tabla_turno">    
    </div>


                       
<?php
include 'includes/footer.php';
?>


<!-- Funcion para llamar a la tabla turno -->
<script text="type/javascript">
    $(document).ready(function(){
        $('#tabla_turno').load('../componentes/tabla_turno.php');
    });
</script>