
<!DOCTYPE html>
<html lang="es">
<head>

    <title>PRINCIPAL</title>
<?php
include 'includes/header.php';
?>

<script>
   Swal.fire({
   html: `<h4>BIENVENID@   <?php echo "$nombre "?></h4>
    <p><?php echo "$cargo "?> </p>
    `,
    icon: 'success',
})

</script>


<div class="text-center">
    <h2 class="letra_fondo  animate__backInDown"> <strong> Sistema de Control y Planificación Académica</strong></h2>
    <h2 class="letra_fondo"> <strong> SICOPLAD </strong></h2>
    <img src="/images/logo.png" alt="" class="escudo_index" width="">
    <h2 class="letra_fondo"> <strong> Escuela pública José Daniel Ortega Saavedra </strong></h2>
</div>

</main>
