<?php
require_once "../includes/conexion.php";    
?>
<table class="table nowrap tabla_d  table-bordered compact hover display" id="datos">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Modalidad</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $conteo = 1;
                                    $sql = "call SP_Mostrar_Modalidades()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                             
                                    <tr>
                                   
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><button class="btn fondo_degradado_verde text-light"  data-bs-toggle="modal" data-bs-target="#modal-actualizar" onclick="cargar_modalidad('<?php echo $ver[0]  ?>','<?php echo $ver[1]?>')">
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn fondo_degradado_rojo text-light"  onclick="Eliminar_Modalidad('<?php echo $ver[0] ?>','<?php echo $ver[1]?>')"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                // $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>

                                                        <!-- llamado a la hoja de funciones -->
<script src="../js/DataTable.js"></script>