<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Cargo();";
  $cargo = mysqli_query($conexion,$consulta_cargo);
?>
<select class="form-select form-control letra_fondo"  id="select_cargo_u" required>
  <option selected value="">CARGO</option>       
  <?php
    while ($data_select = mysqli_fetch_array($cargo)) { ?>
    <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>