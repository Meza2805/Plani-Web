<?php
    require_once "conexion.php";
    $ID= $_POST['id_grupo'];
    $sql= "call SP_Buscar_Grupo_all($ID)" ;
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
 
    echo json_encode($data);

?>