<?php
include 'includes/header.php';
// include '../includes/acceso_login.php';
?>

<script>
   Swal.fire({
   html: `<h4>BIENVENID@   <?php echo "$usuario "?></h4>
    <p><?php echo "$cargo "?> </p>
    `,
    icon: 'success',
//   title: 'BIENVENIDO',
//   icon: 'success',
//   text: ' NOMBRE:  <?php echo "$usuario "?> ,\n CARGO: <?php echo "$cargo "?> ',

})

</script>

<div class="text-center">
    <h1 class="letra_fondo"> <strong> Sistema de Control y Planificación Académica</strong></h1>
    <h1 class="letra_fondo"> <strong> SICOPLAD </strong></h1>

    <!-- <h1> <?php echo $nombre ?>  </h1> -->
    <img src="/images/logo.png" alt="" class="escudo_index" width="">

    <h1 class="letra_fondo"> <strong> Escuela pública José Daniel Ortega Saavedra </strong></h1>
</div>



<img style="display:scroll;
position:fixed; bottom:10%; right:3%;"
src="/images/logo-colores-08.png" width="5%" >

<?php
include '../includes/footer.php';
?>
