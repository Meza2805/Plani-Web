<!DOCTYPE html>
<html lang="es">
<head>
    <title>Información Docente</title>
<?php
include 'includes/header.php';
?>
 <h2 class="letra_fondo text-center mt-3"> <i class="bi bi-journal-bookmark-fill"></i> <strong>Información Docente</strong> </h2>
<div id="BuscarDocente" class="mt-2 w-75">
</div>

<script text="type/javascript">
        $(document).ready(function(){
            $('#BuscarDocente').load('../componentes/select_docente_Info.php');
        });
</script>



<?php
include 'includes/footer.php';
?>
