<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Modalidades;";
  $grado = mysqli_query($conexion,$consulta_cargo);
?>
<select class="form-select form-control" required>
  <option selected value="">Grados</option>       
  <?php
    while ($data_select = mysqli_fetch_array($grado)) { ?>
    <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>


