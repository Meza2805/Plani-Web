<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
   
    $sql=  "call SP_Eliminar_Personal('$cedula')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];

    
    echo json_encode($data);
?>