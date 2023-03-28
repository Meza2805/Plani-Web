<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];

?>
 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css">
 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla02.css">
<table class="table nowrap tabla_d  table-bordered compact hover display" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Lunes</th>
                                   
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_MOSTRAR_ASIGANTURA_HORARIO($codigo_grupo)";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        <td> <p class="overflow-ellipsis"><?php echo $ver [0]?></p></td>
                                     
                                    </tr>
                            <?php
                                 }
                            ?>
                                </tbody>
</table>
