<?php
// Conectar a la base de datos
$con = mysqli_connect('localhost','root','karen_t','planificacion_academica');
// Crear una variable para almacenar los datos
$data_array = array();
// SQL para obtener los datos
$sql = "select * from personal";
// Ejeuctar el SQL
$query = $con->query($sql);
// Recorrer los resultados
while($data = $query->fetch_object()){
    // Poner los datos en un array en el orden de los campos de la tabla
    $data_array[] = array($data->CEDULA, $data->PRIMER_NOMBRE, $data->SEGUNDO_NOMBRE, $data->PRIMER_APELLIDO);
}
// crear un array con el array de los datos, importante que esten dentro de : data
$new_array  = array("data"=>$data_array);
// crear el JSON apartir de los arrays
echo json_encode($new_array);
?>