<?php
    require_once "conexion.php";
    $id= $_POST['id_modalidad'];
    $modalidad= $_POST['modalidad'];
    $sql=  "call SP_Actualizar_Modalidad($id,'$modalidad')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>