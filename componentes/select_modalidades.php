<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Modalidades;";
  $modalidad = mysqli_query($conexion,$consulta_cargo);
?>


<select class="form-select form-control letra_fondo" required>
  <option selected value="">MODALDIDADES</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) { ?>
    <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>