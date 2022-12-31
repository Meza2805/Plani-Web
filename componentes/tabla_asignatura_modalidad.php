<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="datos">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Asignatura</th>
                                        <th scope="col">Modalidad Designada</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>

                                <?php
                                
                                    $sql = "call SP_Mostrar_Asignatura_Modalidad()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><button class="btn btn-danger" onclick="Eliminar_Asignacion('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>