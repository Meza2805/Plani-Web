<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $c= $_POST['c'];
    $sql=  "call SP_Cambiar_contra('$cedula','$c')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>