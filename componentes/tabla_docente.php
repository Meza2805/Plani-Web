<?php
require_once "../includes/conexion.php";   
$sql = "CALL SP_Mostrar_Docentes();";
$resultado = mysqli_query($conexion,$sql); 
?>

<!-- <div class="mt-3 mb-3 w-25">
    <input type="text" class="form-control text-uppercase"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
</div> -->
<link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css">
<table class="table nowrap table-bordered compact hover display" id="docente">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
             
            </tr>
        </thead>
         <tbody>
        <?php  
         while($ver = mysqli_fetch_row($resultado))
        {
            ?>
        <tr>   
           <td><?php echo $ver[0] ?></td>
           <td> <?php echo $ver[1] ?></td>
        </tr>
            <?php
        }
             ?>  
    </tbody>
       
</table>


<script>
$('#docente').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Digite el Nombre del Docente:  ",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });


</script>











