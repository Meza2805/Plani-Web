<?php
    require_once "conexion.php";
    $id= $_POST['id'];

    $sql= "CALL SP_Buscar_Actividad($id)" ;
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
   
   

    echo json_encode($data);

?>