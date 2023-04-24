<?php
  $sexo= $_REQUEST['sexo'];
  if ($sexo == 'F'){
?>
    <select class="form-select form-control fondo_azul"  id="sexou" required>
      <option selected disabled value="">Sexo</option>
      <option selected="selected" value="1" class="fondo_azul">Femenino</option>
      <option value="2" class="fondo_azul" >Masculino</option>
    </select>
<?php
    }
    else
    {
  ?>
<select class="form-select form-control fondo_azul"  id="sexou" required>
      <option selected disabled value="">Sexo</option>
      <option  value="1" class="fondo_azul">Femenino</option>
      <option selected="selected" value="2" class="fondo_azul" >Masculino</option>
    </select>
<?php
    }
?>

