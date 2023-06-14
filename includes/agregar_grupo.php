<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $id_modalidad= $_POST['id_modalidad'];
    $id_grado= $_POST['id_grado'];
    $id_turno= $_POST['id_turno'];
    $id_seccion= $_POST['id_seccion'];
    $sql=  "call SP_Insertar_Grupo($id_grado,$id_seccion,$id_turno,$id_modalidad,'$cedula');";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>