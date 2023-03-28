<?php
    require_once "conexion.php";
    $codigo_modalidad= $_POST['id_modalidad'];
    $codigo_grado= $_POST['id_grado'];
    $codigo_turno= $_POST['id_turno'];
    $codigo_seccion= $_POST['id_seccion'];

    $sql= " call SP_Buscar_Codigo_Grupo( $codigo_modalidad,$codigo_grado,$codigo_turno,$codigo_seccion)" ;
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
   
   

    echo json_encode($data);

?>