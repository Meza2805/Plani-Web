<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];
$id_modalidad= $_REQUEST['id_modalidad'];
$sql = "call SP_HORARIO($codigo_grupo);";
$horario = []; //arreglo para almacenar el resultado de la consulta
$result=mysqli_query($conexion,$sql) ;
while($row = mysqli_fetch_array($result)) {
    // Verificar que existe hora_inicial en arreglo
    $hora = $row['BLOQUE'];
    $horario[$hora][$row['DESCRIPCION']] = $row['ASIGNATURA'];
}
?>
 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla02.css">
<table id="example3" class="table table-light  table-striped">
            <thead>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th scope="col">Editar</th>
            </tr>
            </thead>
            <tbody>
<?php
        // Llenar tabla
        foreach($horario as $hora => $dias) {
?>
            <tr>
                <td><?php echo $hora ?></td>
                <td><?php echo "{$dias['LUNES']}" ?></td>
                <td><?php echo "{$dias['MARTES']}" ?></td>
                <td><?php echo "{$dias['MIERCOLES']}" ?></td>
                <td><?php echo "{$dias['JUEVES']}" ?></td>
                <td><?php echo "{$dias['VIERNES']}" ?></td>
                <td>
                <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal-bloque" onclick="mostrar_bloque('<?php echo $hora ?>','<?php echo $id_modalidad ?>')" >
                  <i class="bi bi-pencil text-white"></i>  
                    </button>  
                </td>
            </tr>
<?php
        }
       
?>
            </tbody>
        </table>
