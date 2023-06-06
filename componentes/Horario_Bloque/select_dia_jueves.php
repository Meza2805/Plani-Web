<?php
  require'../../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['id_modalidad'];
  $consulta = "call SP_Mostrar_Asignatura_SModalidad($codigo_modalidad);";
  $grado = mysqli_query($conexion,$consulta);
?>
     <select id="select_jueves00" class="form-select form-control mb-1 mi-selector" required>
     <option value="0">Asignatura</option>
      <?php
      while ($data_select = mysqli_fetch_array($grado)) { ?>
      <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["ASIGNATURA"]; ?> </option>
      <?php }?>
    </select> 

    <script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
      $('#select_jueves00').select2({
        width: '100%',
    })
    });
</script>
 