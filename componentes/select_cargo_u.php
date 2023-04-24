<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Cargo();";
  $cargo = mysqli_query($conexion,$consulta_cargo);
  $id_cargo= $_REQUEST['id_cargo'];
?>
<select class="form-select form-control fondo_azul"  id="select_cargo" required>
 
  <?php
    while ($data_select = mysqli_fetch_array($cargo)) 
    { 
      if ($data_select["ID"] != $id_cargo  )
      {
    ?>
       <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php
      }
      else
      {
      ?>
        <option  selected="selected"  value="<?php echo $id ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
      <?php
      }
    }?>
</select>