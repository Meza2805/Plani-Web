<?php
    require_once "conexion.php";
    $cedula= $_POST['cedula'];
    $sql= "select concat(g.DESCRIPCION,' ',s.DESCRIPCION ,' ',t.DESCRIPCION)as columna
                           from grupo gg inner join grado g on gg.ID_GRADO = g.ID
                           inner join modalidad m on gg.ID_MODALIDAD =  m.ID
                           inner join seccion s on gg.ID_SECCION = s.ID
                           inner join turno t on gg.ID_TURNO = t.ID
                           inner join personal p on gg.CEDULA_DOCENTE = p.CEDULA where year(gg.ANIO_ESCOLAR) = year (curdate()) and 
                           p.CEDULA = '$cedula' ";
    $r= mysqli_query($conexion,$sql);
    $data = mysqli_fetch_assoc($r);
    echo json_encode($data);
?>