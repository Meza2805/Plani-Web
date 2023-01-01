<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Cargo();";
  $cargo = mysqli_query($conexion,$consulta_cargo);
?>

<link rel="stylesheet" href="../css/mis_estilos.css">
<select class="form-select form-control fondo_azul"  id="select_cargo" required>
  <option class="" selected value="">Cargo</option>       
  <?php
    while ($data_select = mysqli_fetch_array($cargo)) { ?>
    <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>

