<?php
require_once "../includes/conexion.php";    

// Crear una variable para almacenar los datos
$data_array = array();
// SQL para obtener los datos
$sql = "call SP_Mostrar_Personal()";
// Ejeuctar el SQL
$query = $conexion->query($sql);
// Recorrer los resultados
while($data = $query->fetch_object()){
    // Poner los datos en un array en el orden de los campos de la tabla
    $data_array[] = array($data->CEDULA, $data->NOMBRE, $data->EDAD, $data->SEXO,$data->TELEFONO,$data->DIRECCION,$data->CARGO);
}
// crear un array con el array de los datos, importante que esten dentro de : data
$new_array  = array("data"=>$data_array);
// crear el JSON apartir de los arrays
echo json_encode($new_array);





?>