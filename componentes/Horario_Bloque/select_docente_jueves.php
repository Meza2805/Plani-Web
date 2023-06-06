<?php
  require'../../includes/conexion.php';
  $consulta02 = "call SP_Mostrar_Docentes();";
  $docente = mysqli_query($conexion,$consulta02);
?>
    <select id="select_jueves" class="form-select form-control mb-1 mi-selector" required>
      <option value="0">Docente</option>
      <?php
        while ($data_select = mysqli_fetch_array($docente)) { ?>
        <option value="<?php echo $data_select["cedula"]; ?>"> <?php echo $data_select["NOMBRE"]; ?> </option>
        <?php }?>
    </select> 

    <script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
      $('#select_jueves').select2({
        width: '100%',
    })
    });
</script>