<?php
    require_once "conexion.php";
    $modalidad= $_POST['modalidad'];
    $sql=  "call SP_Insertar_Modalidad('$modalidad')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>