<?php
  require'../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['id_modalidad'];
  $codigo_grado= $_REQUEST['id_grado'];
  $consulta = "call SP_Mostrar_Grado($codigo_modalidad);";
  $grado = mysqli_query($conexion,$consulta);
?>
<select class="form-select form-control  animate__backInLeft" id="select_grados_ac" required>
  <option selected value="">Grados</option>       
  <?php
     while ($data_select = mysqli_fetch_array($grado)) 
     { 
       if ($data_select["ID"] != $codigo_grado )
       {
     ?>
        <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["GRADO"]; ?> </option>
     <?php
       }
       else
       {
       ?>
         <option  selected="selected"  value="<?php echo $codigo_grado ?>"> <?php echo $data_select["GRADO"]; ?> </option>
       <?php
       }
     }?>
</select>


