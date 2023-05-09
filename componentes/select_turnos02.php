<?php
  require'../includes/conexion.php';
  $codigo_modalidad= $_REQUEST['codigo_modalidad'];
  $consulta = "call SP_Mostrar_Turno02($codigo_modalidad);";
  $turno = mysqli_query($conexion,$consulta);
?>
<select class="form-select form-control mi-selector" id="select_t"  style="width: 100%" required>
  <option selected value="">Turno</option>       
  <?php 
  while ($data_select = mysqli_fetch_array($turno)) 
    { 
     
    ?>
       <option value="<?php echo $data_select["ID"]; ?>"> <?php echo $data_select["TURNO"]; ?> </option>
    <?php
    
    }?>
</select>




<!-- <script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
       $('#select_t').on('select2:select', function (e) {
               
            });
    });
</script> -->

