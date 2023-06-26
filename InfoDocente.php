<!DOCTYPE html>
<html lang="es">
<head>
    <title>Información Docente</title>
<?php
include 'includes/header.php';
?>
 <h2 class="letra_fondo text-center mt-3"> <i class="bi bi-journal-bookmark-fill"></i> <strong>Información Docente</strong> </h2>
 <div class="container ">
        <div id="BuscarDocente" class="mt-2  text-center">
        </div>
        <div id="tablaInfo01" class=" mt-3 text-center" >   
        </div>
        
        <div id="tablaInfo02" class=" mt-3 text-center" >   
        </div>
        <div id="btnBuscarInfoDocente" class="text-left mt-3 text-center mb-3" >   
        </div>
 </div>


<script text="type/javascript">
        $(document).ready(function(){
           
            $('#BuscarDocente').load('../componentes/select_docente_Info.php');
        });
</script>


 


<?php
include 'includes/footer.php';
?>
