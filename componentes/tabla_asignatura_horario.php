<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];
 $sql = "call SP_HORARIO($codigo_grupo);";
$horario = []; //arreglo para almacenar el resultado de la consulta
$result=mysqli_query($conexion,$sql) ;
while($row = mysqli_fetch_array($result)) {
    // Verificar que existe hora_inicial en arreglo
    $hora = $row['BLOQUE'];
    $horario[$hora][$row['DIA']] = $row['ASIGNATURA'];
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
                <td><?php echo "{$dias['Lunes']}" ?></td>
                <td><?php echo "{$dias['Martes']}" ?></td>
                <td><?php echo "{$dias['Miercoles']}" ?></td>
                <td><?php echo "{$dias['Jueves']}" ?></td>
                <td><?php echo "{$dias['Viernes']}" ?></td>
                <td>
                <button class="btn fondo_degradado_azul text-light" data-bs-toggle="modal" data-bs-target="#modal-bloque" >
                        <i class="bi bi-pencil text-white"></i>
                    </button>
                </td>
            </tr>
<?php
        }
       
?>
            </tbody>
        </table>
