<?php
require_once "../includes/conexion.php";   
$sql = "CALL SP_Mostrar_AdminUsuario();";
$resultado = mysqli_query($conexion,$sql); 
?>

<!-- <div class="mt-3 mb-3 w-25">
    <input type="text" class="form-control text-uppercase"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
</div> -->
<!-- <link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css"> -->
<table class="table nowrap tabla_d  table-bordered compact hover display" id="AdminUsertbl">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Rol</th>
                <th>Nombre de Uusario</th>
                <th>Contraseña</th>
                <th>Editar</th>
            </tr>
        </thead>
         <tbody>
        <?php  
         while($ver = mysqli_fetch_row($resultado))
        {
            ?>
        <tr>   
           <td><?php echo $ver[1] ?></td>
           <td> <?php echo $ver[2] ?></td>
           <td> <?php echo $ver[3] ?></td>
           <td> <?php echo $ver[4] ?></td>
           <td><button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal"  data-bs-target="#modal-InfoAdmin" onclick="BuscarInfoAdmin('<?php echo $ver[0]?>')" >
                <i class="bi bi-pencil text-white"></i>
                </button>
            </td>
        </tr>
            <?php
        }
             ?>  
    </tbody>
       
</table>

                            <!-- llamado a la hoja de funciones -->
                            <script src="../js/DataTable.js"></script>



<!-- 
<script>
    $('#AdminUsertbl').DataTable({
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
        pageLength : 3,
        lengthMenu: [[3], [3]]
    });
    
</script>
 -->

