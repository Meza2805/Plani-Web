<?php
  require'../includes/conexion.php';
  $consulta = "call SP_Mostrar_Asignatura()";
  $asignatura = mysqli_query($conexion,$consulta);
?>
<select class="form-select form-control letra_fondo" id="select_asig" required>
  <option selected value="">Asignatura</option>       
  <?php
    while ($data_select = mysqli_fetch_array($asignatura)) { ?>
    <option value="<?php echo $data_select["ID"] ?>"> <?php echo $data_select["ASIGNATURA"] ?> </option>
    <?php }?>
</select>