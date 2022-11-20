<?php
    require_once "conexion.php";
    $id_asignatura= $_POST['id_asignatura'];
    $sql=  "call SP_Eliminar_Asigantura($id_asignatura)";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>