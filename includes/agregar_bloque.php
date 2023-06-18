<?php
    require_once "conexion.php";
    // $DocenteLunes=$_POST['DocenteLunes'];
    // $DocenteMartes=$_POST['DocenteMartes'];
    // $DocenteMiercoles=$_POST['DocenteMiercoles'];
    // $DocenteJueves=$_POST['DocenteJueves'];
    // $DocenteViernes=$_POST['DocenteViernes'];
    // $AsignaturaLunes=$_POST['AsignaturaLunes'];
    // $AsignaturaMartes=$_POST['AsignaturaMartes'];
    // $AsignaturaMiercoles=$_POST['AsignaturaMiercoles'];
    // $AsignaturaJueves=$_POST['AsignaturaJueves'];
    // $AsignaturaViernes=$_POST['AsignaturaViernes'];
    // $CodigoGrupoFinal=$_POST['CodigoGrupoFinal'];
    // $h01=$_POST['h01'];
    // $h02=$_POST['h02'];
    $DocenteLunes='001-070989-0239L';
    $DocenteMartes='001-070989-0239L';
    $DocenteMiercoles='001-070989-0239L';
    $DocenteJueves='001-070989-0239L';
    $DocenteViernes='001-070989-0239L';
    $AsignaturaLunes=1;
    $AsignaturaMartes=1;
    $AsignaturaMiercoles=1;
    $AsignaturaJueves=1;
    $AsignaturaViernes=1;
    $CodigoGrupoFinal=118;
    $h01='07:00:00';
    $h02='07:45:00';
    $sql="call SP_Insertar_Bloque_Horario('$DocenteLunes','$DocenteMartes','$DocenteMiercoles', '$DocenteJueves','$DocenteViernes',
    $AsignaturaLunes,$AsignaturaMartes, $AsignaturaMiercoles,$AsignaturaJueves, $AsignaturaViernes,$CodigoGrupoFinal,'$h01','$h02');";
    $r= mysqli_query($conexion,$sql);
    $data= mysqli_fetch_assoc($r);
    echo json_encode($data);
?>