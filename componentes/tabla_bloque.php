<?php
require_once "../includes/conexion.php";    
$codigo_grupo= $_REQUEST['resultado'];

?>
<table class="table" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Bloque</th>
                                     
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $sql = "call SP_Mostrar_Bloque_Horario($codigo_grupo)";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                              
                                    <tr>
                                        
                                        <td><?php echo $ver [1]?></td>
                                    </tr>
                            <?php
                                 }
                            ?>
                                </tbody>
</table>
