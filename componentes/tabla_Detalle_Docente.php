<?php
require_once "../includes/conexion.php";   
$cedula = $_REQUEST['cedula']; 
?>
<table class="table table-light table-striped" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Docente</th>
                                        <th scope="col">Horas Clases</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_Mostrar_Detalle_Docente('$cedula')";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                    </tr>
                            <?php
                                 }
                            ?>
                                </tbody>
                            </table>

                            <!-- llamado a la hoja de funciones -->
<!-- <script src="../js/DataTable.js"></script> -->