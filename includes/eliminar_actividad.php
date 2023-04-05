<?php
    require_once "conexion.php";
    $id_actividad= $_POST['id'];
    $sql=  "call SP_Eliminar_Actividad($id_actividad);";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    // $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>