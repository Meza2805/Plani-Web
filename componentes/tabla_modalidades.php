<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="asignatura-tabla">
                                <thead>
                                    <tr>
                                        <th scope="col">CODIGO</th>
                                        <th scope="col">MODALIDAD</th>
                                        <th scope="col">ESTADO</th>
                                        <th scope="col">EDITAR</th>
                                        <th scope="col">ELIMINAR</th>
                                    </tr>
                                </thead>

                                <?php
                                    $conteo = 1;
                                    $sql = "call SP_Mostrar_Modalidades()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                   
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modal-actualizar">
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                // $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>