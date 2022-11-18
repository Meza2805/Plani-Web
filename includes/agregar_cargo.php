<?php
    require_once "conexion.php";
    $cargo= $_POST['cargo'];
    $sql=  "call SP_Insertar_Cargo('$cargo')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>