<?php
include '../includes/header02.php';
// include '../includes/acceso_login.php';
?>

<script>
   Swal.fire({
  icon: 'success',
  title: 'BIENVENIDO',
  text: ' USUARIO:  <?php echo "$usuario "?> ROL: <?php echo "$rol "?> ',
})
   // swal("Acceso Exitoso", "  USUARIO:  <?php echo "$usuario "?>  ROL: <?php echo "$cedula "?> ","success");
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
include '../includes/footer02.php';
?>
