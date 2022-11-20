<?php
    require_once "conexion.php";
    $id_asignatura= $_POST['id_asignatura'];
    $id_modalidad= $_POST['id_modalidad'];
    $sql=  "call SP_Insertar_Asigantura_Modalidad($id_asignatura,$id_modalidad)";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);

    echo json_encode($data);
?>