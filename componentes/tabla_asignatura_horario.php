<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];
 $sql = "call SP_HORARIO($codigo_grupo);";
$horario = [];
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
                <th>lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
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
            </tr>
<?php
        }
       
?>
            </tbody>
        </table>
