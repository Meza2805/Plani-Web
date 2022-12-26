<?php
require_once "../includes/conexion.php";    
?>

<!-- <div class="mt-3 mb-3 w-25">
    <input type="text" class="form-control text-uppercase"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
</div> -->

<table class="table table-hover table-condensed table-bordered" id="datos">
        <thead>
            <tr>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>TELEFONO</th>
                <th class="upper">DIRECCIÓN</th>
                <th>CARGO</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
    <?php
        $sql = "call SP_Mostrar_Personal()";
        $resultado = mysqli_query($conexion,$sql);
        while($ver = mysqli_fetch_row($resultado)){
    
    ?>


    <tbody>
        <tr>                            
            <td><?php echo $ver [0] ?></td>
            <td><?php echo $ver [1] ?></td>
            <td><?php echo $ver [2] ?></td>
            <td><?php echo $ver [3] ?></td>
            <td><?php echo $ver [4] ?></td>
            <td><?php echo $ver [5] ?></td>
            <td><?php echo $ver [6] ?></td>
            <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar_personal" onclick="cargar_form('<?php echo $ver [0] ?>')">
                <i class="bi bi-pencil text-white"></i>
                </button>
            </td>
            <td><button class="btn btn-danger" onclick="Eliminar('<?php  echo $ver[0]?>','<?php  echo $ver[1]?>')"><i class="bi bi-trash"></i></button></td>
            
        </tr>
    </tbody>
        <?php
            }
        ?>
</table>



<script type="text/javascript">

</script>








