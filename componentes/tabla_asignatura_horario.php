<?php
require_once "../includes/conexion.php";    
// $codigo_grupo= $_REQUEST['resultado'];


?>

 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla02.css">
<table class="table table-dark table-striped table-sm" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Lunes</th>
                                        <th scope="col">Martes</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_MOSTRAR_ASIGANTURA_HORARIO(3,1);";
                                    $sql .= "call SP_MOSTRAR_ASIGANTURA_HORARIO(3,2)";
                                    if (mysqli_multi_query($conexion, $sql)) {
                                        do {
                                            echo  "<br>";
                                            if ($result = mysqli_store_result($conexion)) {
                                                while ($row = mysqli_fetch_row($result)) {
                                                    // printf("%s\n", $row[0]);
                                                    // echo $row[0] . "<br>";
                                                    //  $resultado = mysqli_query($conexion,$sql);
                                                    //  while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        <td> <p class="overflow-ellipsis"><?php echo $row[0]?></p></td>
                                        <!-- <td> <p class="overflow-ellipsis"><?php echo $row[0]?></p></td> -->
                                    </tr>
                            <?php       }
                                                mysqli_free_result($result);
                                            }
                                  } while (mysqli_next_result($conexion));
                                }
                            ?>
                                </tbody>
</table>
