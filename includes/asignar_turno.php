<?php
    require_once "conexion.php";
    $id_turno= $_POST['id_turno'];
    $id_modalidad= $_POST['id_modalidad'];
    $sql=  "call SP_Insertar_Turno_Modalidad($id_turno,$id_modalidad)";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>