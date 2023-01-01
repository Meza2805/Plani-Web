<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table tabla_d table-responsive table-bordered compact hover display" id="actividad_tabla01">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Linea de Acción</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad01()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                       
                                        <td><button class="btn fondo_degradado_verde text-light" data-bs-toggle="modal" data-bs-target="#modal_actividad01" onclick="cargar_actividad01('<?php echo $ver[0] ?>')" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn fondo_degradado_rojo text-light"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                          
                                 }
                            ?>
                                  
                                </tbody>
                            </table>

<!-- llamado a la hoja de funciones -->
<script src="../js/DataTable.js"></script>
