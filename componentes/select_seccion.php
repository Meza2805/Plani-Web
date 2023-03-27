<?php
  require'../includes/conexion.php';
  $consulta_seccion = "call SP_Mostrar_Seccion;";
  $seccion = mysqli_query($conexion,$consulta_seccion);
?>
<select class="form-select form-control" id="select_s" required>
  <option selected value="">Seccion</option>       
  <?php
    while ($data_select = mysqli_fetch_array($seccion)) { ?>
    <option value="<?php echo $data_select["ID"] ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>
