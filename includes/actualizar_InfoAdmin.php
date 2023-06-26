<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $user= $_POST['user'];
    $contra= $_POST['contra'];
    $sql=  "call SP_ActualizarInfoAdmin('$cedula','$user','$contra')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>