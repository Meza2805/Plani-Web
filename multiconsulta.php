<?php
require_once "includes/conexion.php";    
// $sql = "call SP_MOSTRAR_ASIGANTURA_HORARIO(3,1);";
 $sql = "select  d.DESCRIPCION AS DIA, bc.HORA_INICIO, bc.HORA_FIN, a.DESCRIPCION AS ASIGNATURA from bloque_clase bc inner join asignatura a on bc.ID_ASIGNATURA = a.ID
 inner join dia d on bc.ID_DIA = d.ID
where bc.ID_GRUPO = 3 ;";

// $resultado = mysqli_query($conexion,$sql);
// while($ver = mysqli_fetch_row($resultado)){
//     // echo $ver[0] ."<br>";
//     printf($ver[0]."<br>");
// }

// if (mysqli_multi_query($conexion, $sql)) {
//     do {
//         echo  "<br>";
//         if ($result = mysqli_store_result($conexion)) {
//             while ($row = mysqli_fetch_row($result)) {
//                 // printf("%s\n", $row[0]);
//                 echo $row[0] . "<br>";
//             }
//             mysqli_free_result($result);
//         }
//         // if (mysqli_more_results($conexion)) {
//         //     printf("-----------------\n");
//         // }
//     } while (mysqli_next_result($conexion));
// }

// mysqli_close($conexion);


    $horario = [];
    $resultado = mysqli_query($conexion,$sql);
    while($row = mysqli_fetch_array($resultado)){
        $hora = $row['HORA_INICIO'];
        if(!isset($horario[$hora])) {
            // Crear arreglo con 5 elementos, uno para cada día
            $horario[$hora] = ['', '', '', '', ''];
        }
        // Agregar materia a $hora, en espacio correspondiente
        // Los índices de arreglo inician en cero, van de cero = lunes a 4 = viernes
        // Por eso el - 1
        $horario[$hora][$row['DIA'] ] = $row['nombre_materia'];
    }

?>