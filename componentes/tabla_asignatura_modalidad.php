<?php
require_once "../includes/conexion.php";    
?>
<table class="table tabla_d table-responsive table-bordered compact hover display" id="datos">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Asignatura</th>
                                        <th scope="col">Modalidad Designada</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                
                                    $sql = "call SP_Mostrar_Asignatura_Modalidad()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><button class="btn fondo_degradado_rojo text-light" onclick="Eliminar_Asignacion('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                $conteo++;
                                 }
                            ?>   
                                </tbody>
                            </table>


      <!-- llamado a la hoja de funciones -->
      <script src="../js/DataTable.js"></script>