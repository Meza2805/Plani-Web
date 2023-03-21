<?php
  require'../includes/conexion.php';
  $consulta_turno = "call SP_Mostrar_Turno;";
  $modalidad = mysqli_query($conexion,$consulta_turno);
?>
<select class="form-select form-control" id="select_turno" required>
  <option selected value="">Turno</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) { ?>
    <option value="<?php echo $data_select["ID"] ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>
