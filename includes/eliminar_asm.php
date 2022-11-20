<?php
    require_once "conexion.php";
    $id= $_POST['id']; 
    $sql=  "call SP_Eliminar_Asignatura_Modalidad($id)";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>