<?php
require_once "../includes/conexion.php";   
$cedula = $_REQUEST['cedula']; 
?>
<table class="table nowrap tabla_d  table-bordered compact hover display" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Dia</th>
                                        <th scope="col">No Bloque</th>
                                        <th scope="col">Tiempo Bloque</th>
                                        <th scope="col">Asignatura</th>
                                        <th scope="col">Grado</th>
                                        <th scope="col">Seccion</th>
                                        <th scope="col">Turno</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_Mostrar_Detalle_Docente02('$cedula')";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2] ?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4] ?></td>
                                        <td><?php echo $ver [5]?></td>
                                        <td><?php echo $ver [6]?></td>
                                    </tr>
                            <?php
                                 }
                            ?>
                                </tbody>
                            </table>

                            <!-- llamado a la hoja de funciones -->
<script src="../js/DataTable.js"></script>