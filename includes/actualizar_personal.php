<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $p_nombre= $_POST['p_nombre'];
    $s_nombre= $_POST['s_nombre'];
    $p_apellido= $_POST['p_apellido'];
    $s_apellido= $_POST['s_apellido'];
    $fecha_nac= $_POST['fecha_nac'];
    $sexo= $_POST['value_sexo'];
    $telefono= $_POST['telefono'];
    $direccion= $_POST['direccion'];
    $cargo =  $_POST['value_cargo'];

    $sql=  "call SP_Actualizar_Datos_Basicos_Personal('$cedula','$p_nombre','$s_nombre','$p_apellido','$s_apellido','$fecha_nac'
    ,$sexo,'$telefono','$direccion',$cargo)";
    $r= mysqli_query($conexion,$sql);
    $row = mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo $mensaje ;
?>