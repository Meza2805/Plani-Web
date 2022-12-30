<?php
require_once "../includes/conexion.php";   
$sql = "call SP_Mostrar_Personal()";
       
$result = mysqli_query($conexion,$sql);
 
while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    
    "data" => $array
);

echo json_encode($dataset);




?>