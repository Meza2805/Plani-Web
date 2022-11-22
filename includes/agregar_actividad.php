<?php
    require_once "conexion.php";
    $cedula=$_POST['cedula'];
    $linea_accion=$_POST['linea_accion'];
    $prota=$_POST['prota'];
    $meta_anual=$_POST['meta_anual'];
    $meta_trimestral=$_POST['meta_trimestral'];
    $p_femenino=$_POST['p_femenino'];
    $p_masculino=$_POST['p_masculino'];
    $cp01=$_POST['cp01'];
    $cp02=$_POST['cp02'];
    $cp03=$_POST['cp03'];
    $cp04=$_POST['cp04'];
    $cp05=$_POST['cp05'];
    $mp01=$_POST['mp01'];
    $mp02=$_POST['mp02'];
    $mp03=$_POST['mp03'];
    $mp04=$_POST['mp04'];
    $mp05=$_POST['mp05'];
    $dificultades=$_POST['dificultades'];
    $alertas=$_POST['alertas'];
    $propuestas=$_POST['propuestas'];
    $observaciones=$_POST['observaciones'];




    $sql=  "call SP_Insertar_Actividad('$cedula','$linea_accion','$prota',$meta_anual,$meta_trimestral,$p_femenino,$p_masculino,
    '$cp01','$cp02','$cp03','$cp04','$cp05','$dificultades','$mp01','$mp02','$mp03','$mp04','$mp05','$alertas',
    '$propuestas','$observaciones')";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    $mensaje = $row["MENSAJE"];
    echo json_encode($data);
?>