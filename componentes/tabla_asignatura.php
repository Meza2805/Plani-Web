<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="datos">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Asignatura</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>

                                <?php
                                    $conteo = 1;
                                    $sql = "call SP_Mostrar_Asignatura()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                   
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-editar" onclick="cargar_asignatura('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger" onclick="Eliminar_Asignatura('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                // $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>



