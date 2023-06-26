<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $sql= "call SP_Mostrar_InfoAdmin('$cedula')" ;
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
    echo json_encode($data);
?>