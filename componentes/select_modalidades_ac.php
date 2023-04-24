<?php
  require'../includes/conexion.php';
  $ID_Modalidad = $_REQUEST['id_modalidad'];
  $consulta_cargo = "call SP_Mostrar_Modalidades;";
  $modalidad = mysqli_query($conexion,$consulta_cargo);
?>
<select class="form-select form-control" id="select_mod_ac" required>
  <option selected value="">Modalidades</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) 
    { 
      if ($data_select["ID"] != $ID_Modalidad )
      {
    ?>
       <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php
      }
      else
      {
      ?>
        <option  selected="selected"  value="<?php echo $ID_Modalidad ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
      <?php
      }
    }?>
</select>

