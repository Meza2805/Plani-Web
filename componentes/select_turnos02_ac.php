<?php
  require'../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['id_modalidad'];
  $codigo_turno= $_REQUEST['id_turno'];
  $consulta = "call SP_Mostrar_Turno02($codigo_modalidad);";
  $turno = mysqli_query($conexion,$consulta);
?>
<select class="form-select form-control" id="select_t_ac" required>
  <option selected value="">Turno</option>       
  <?php
    while ($data_select = mysqli_fetch_array($turno)) 
    { 
      if ($data_select["ID"] != $codigo_turno )
      {
    ?>
       <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["TURNO"]; ?> </option>
    <?php
      }
      else
      {
      ?>
        <option  selected="selected"  value="<?php echo $codigo_turno ?>"> <?php echo $data_select["TURNO"]; ?> </option>
      <?php
      }
    }?>
</select>


