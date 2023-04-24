<?php
    require_once "conexion.php";
    $id_grupo= $_POST['id_grupo'];
     $sql=  "call SP_Eliminar_Grupo ($id_grupo)";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>