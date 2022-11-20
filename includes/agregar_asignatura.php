<?php
    require_once "conexion.php";
    $asginatura= $_POST['asignatura'];
    $sql=  "call SP_Insertar_Asigantura('$asginatura')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>