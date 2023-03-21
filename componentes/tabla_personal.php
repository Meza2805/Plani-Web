<?php
require_once "../includes/conexion.php";   
$sql = "call SP_Mostrar_Personal()";
$resultado = mysqli_query($conexion,$sql); 
?>

<!-- <div class="mt-3 mb-3 w-25">
    <input type="text" class="form-control text-uppercase"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
</div> -->
<link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css">
<table class="table nowrap tabla_d  table-bordered compact hover display" id="datos">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Cargo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
         <tbody>
        <?php  
         while($ver = mysqli_fetch_row($resultado))
        {
            ?>
        <tr>   
           <td><?php echo $ver[0] ?></td>
           <td><p class="overflow-ellipsis text-center"><?php echo $ver[1] ?></p></td>
            <td><?php echo $ver[2] ?></td>
            <td><?php echo $ver[3] ?></td>
            <td><?php echo $ver[4] ?></td>
            <td><p class="overflow-ellipsis text-center"><?php echo $ver[5] ?></p></td>
            <td><?php echo $ver[6] ?></td> 
          <td><button class="btn fondo_degradado_verde" data-bs-toggle="modal" data-bs-target="#editar_personal" onclick="cargar_form('<?php echo $ver [0] ?>')">
                <i class="bi bi-pencil text-white"></i>
                </button>
            </td>
            <td>
                <button class="btn fondo_degradado_rojo text-light" onclick="Eliminar('<?php  echo $ver[0]?>','<?php  echo $ver[1]?>')"><i class="bi bi-trash"></i>
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













