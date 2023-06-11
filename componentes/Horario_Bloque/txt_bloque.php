<?php
  $bloque= $_REQUEST['bloque'];
$porciones = explode(" ", $bloque);

?>
<h4 class="text-center">Bolque : <?php echo "$bloque"; ?></h4>

<script text="type/javascript">    
            var h01 ="<?php echo $porciones[0];?>"
            var h02 ="<?php echo $porciones[2]?>"
 </script>

