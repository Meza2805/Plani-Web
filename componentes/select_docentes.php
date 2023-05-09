<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Docentes();";
  $modalidad = mysqli_query($conexion,$consulta_cargo);
?>

<select class="form-select form-control fondo_degradado_azul mi-selector" style="width: 100%" id="select_doc"    required>
  <option selected value="0">Seleccione un Docente de la Lista</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) { ?>
    <option value="<?php echo $data_select["cedula"] ?>"> <?php echo $data_select["NOMBRE"]; ?> </option>
    <?php }?>
</select>

<script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
      $('#select_doc').select2({
        width: '100%',
        dropdownParent: $("#modal_grupo")
    })
    });
</script>

<style>
.select2-container:not(.select2-container--open) { z-index: 1;}
</style>


