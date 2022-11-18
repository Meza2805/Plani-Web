<?php
    require_once "conexion.php";
    $id_cargo= $_POST['id_cargo'];
    $cargo= $_POST['cargo'];
    $sql=  "call SP_Actualizar_Cargo($id_cargo,'$cargo')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>