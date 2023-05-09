<?php
  require'../includes/conexion.php';
  $consulta = "call SP_Mostrar_Asignatura()";
  $asignatura = mysqli_query($conexion,$consulta);
?>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<select class="form-select form-control " id="select_asig" required>
  <option selected value="">Asignatura</option>       
  <?php
    while ($data_select = mysqli_fetch_array($asignatura)) { ?>
    <option value="<?php echo $data_select["ID"] ?>"> <?php echo $data_select["ASIGNATURA"] ?> </option>
    <?php }?>
</select>




<script>
 $(document).ready(function() {
        $('.mi-selector').select2();
    });
</script>

