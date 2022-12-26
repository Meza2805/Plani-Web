<?php
    require_once "conexion.php";
    session_start(); //Inicio de sesion
    $usuario= $_POST['usuario'];
    $contra= $_POST['contra'];


    // $usuario= 'magda123';
    // $contra= 'magda123';
    $sql = "call SP_Login('$usuario','$contra')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
   


    // Variables de sesion
    $_SESSION['nombre']=$data["NOMBRE"];
    $_SESSION['cargo']= $data["CARGO"];
    $_SESSION['cedula']= $data["CEDULA"];

    echo json_encode($data);
    // echo ($_SESSION['nombre']);
    // echo ($_SESSION['cargo']);
    // echo ($_SESSION['cedula']);
?>