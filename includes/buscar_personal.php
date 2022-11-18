<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];

    $sql= "call SP_Buscar_Personal('$cedula')" ;
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
    $p_nombre = $row['PRIMER_NOMBRE'];
    $s_nombre = $row['SEGUNDO_NOMBRE'];
    $p_apellido = $row['PRIMER_APELLIDO'];
    $s_apellido = $row['SEGUNDO_APELLIDO'];
    $fecha_nac = $row['FECHA_NAC'];
    $sexo = $row['SEXO'];
    $telefono = $row['TELEFONO'];
    $direccion = $row['DIRECCION'];
    $cargo = $row['ID_CARGO'];
    
    // echo $p_nom;
    // echo $_nombr;
    // echo $p_apellido;
    // echo $s_apellido;
    // echo $fecha_nac;
    // echo $sexo;
    // echo $telefono;
    // echo $direccion;
    // echo $cargo;

    echo json_encode($data);

?>