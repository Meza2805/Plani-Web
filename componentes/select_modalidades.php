<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Modalidades;";
  $modalidad = mysqli_query($conexion,$consulta_cargo);
?>




<select class="form-select form-control fondo_degradado_azul" style="width: 100%" id="select_mod"    required>
  <option selected value="0">Modalidades</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) { ?>
    <option value="<?php echo $data_select["ID"] ?>"> <?php echo $data_select["DESCRIPCION"]; ?> </option>
    <?php }?>
</select>

<!-- <script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
      $('#select_mod').on('select2:select', function (e) {
                var data = e.params.data;
                cargar_horario(data.id);
            });
      
    });
</script>

<style>
.select2-container:not(.select2-container--open) { z-index: 1;}
</style> -->


