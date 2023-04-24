<?php
  require'../includes/conexion.php';
  $consulta_seccion = "call SP_Mostrar_Seccion;";
  $codigo_seccion= $_REQUEST['id_seccion'];
  $seccion = mysqli_query($conexion,$consulta_seccion);
  
?>
<select class="form-select form-control" id="select_s_ac" required>
  <option selected value="">Seccion</option>       
  <?php
   while ($data_select = mysqli_fetch_array($seccion)) 
   { 
     if ($data_select["ID"] != $codigo_seccion )
     {
   ?>
      <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
   <?php
     }
     else
     {
     ?>
       <option  selected="selected"  value="<?php echo $codigo_seccion ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
     <?php
     }
   }?>
</select>
