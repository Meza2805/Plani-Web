<?php
    require_once "conexion.php";
    $id_asignatura= $_POST['id_asignatura'];
    $asginatura= $_POST['asignatura'];
    $sql=  "call SP_Actualizar_Asigantura($id_asignatura,'$asginatura')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>