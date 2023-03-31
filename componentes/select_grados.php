<?php
  require'../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['codigo_modalidad'];
  $consulta = "call SP_Mostrar_Grado($codigo_modalidad);";
  $grado = mysqli_query($conexion,$consulta);
?>
<select class="form-select form-control  animate__backInLeft" id="select_grados" required>
  <option selected value="">Grados</option>       
  <?php
    while ($data_select = mysqli_fetch_array($grado)) { ?>
    <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["GRADO"]; ?> </option>
    <?php }?>
</select>


