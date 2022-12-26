<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost','root','meza93','planificacion_academica');

$consulta = "call SP_Mostrar_Personal()";
$registro = mysqli_query($conexion, $consulta);


while ( $data = mysqli_fetch_assoc($registro)){
    $arreglo ["data"][] = $data;
}
echo json_encode($arreglo);
mysqli_free_result($registro);
mysqli_close($conexion);
