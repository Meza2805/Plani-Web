<?php
  require'../includes/conexion.php';
  $consulta_cargo = "call SP_Mostrar_Info_Docente();";
  $modalidad = mysqli_query($conexion,$consulta_cargo);
?>

<select class="form-select form-control fondo_degradado_azul mi-selector" style="width: 100%" id="sdi01"    required>
  <option selected value="">Busque y Seleccione un Docente</option>       
  <?php
    while ($data_select = mysqli_fetch_array($modalidad)) { ?>
    <option value="<?php echo $data_select["cedula"];?>"> <?php echo $data_select["NOMBRE"]; ?> </option>
    <?php }?>
</select>

<script>
      $(document).ready(function()
       { 
      $('.mi-selector').select2(); 
   
    });

    $('#sdi01').on('select2:select', function (e) {
    var data = e.params.data;
  
    cedula= (data.id);
          
        $('#tablaInfo01').load('../componentes/tabla_Detalle_Docente.php',{cedula});
        $('#tablaInfo02').load('../componentes/tabla_Detalle_Docente02.php',{cedula});
        $('#btnBuscarInfoDocente').load('../componentes/btn_BuscarInfoDocente.php');
});
</script>

<!-- <style>
.select2-container:not(.select2-container--open) { z-index: 1;}
</style> -->


