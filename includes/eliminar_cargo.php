<?php
    require_once "conexion.php";
    $id_cargo= $_POST['id_cargo'];
   
    $sql=  "call SP_Eliminar_Cargo('$id_cargo')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>