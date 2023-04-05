<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];

?>
<table class="table table-light table-striped " id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Modalidad</th>
                                        <th scope="col">Grado</th>
                                        <th scope="col">Sección</th>
                                        <th scope="col">Turno</th>
                                        <th scope="col">Docente Guia</th>
                                    
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_Buscar_Grupo($codigo_grupo)";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [5]?></td>
                                    </tr>
                            <?php
                                 }
                            ?>
                                </tbody>
</table>
