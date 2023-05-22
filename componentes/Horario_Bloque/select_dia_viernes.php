<?php
  require'../../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['id_modalidad'];
  $consulta = "call SP_Mostrar_Asignatura_SModalidad($codigo_modalidad);";
  $grado = mysqli_query($conexion,$consulta);
?>
<div class="row mb-3">
<h5 class="text-start">Viernes</h5>
    <select name="select" class="form-select form-control mb-1">
     <option value="0">Asignatura</option>
      <?php
      while ($data_select = mysqli_fetch_array($grado)) { ?>
      <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["ASIGNATURA"]; ?> </option>
      <?php }?>
    </select> 
    <select name="select" class="form-select form-control mb-1">
        <option value="Docente">Docente</option>
        <option value="value2">Value 2</option>
        <option value="value3">Value 3</option>
    </select>
</div>