<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="asignatura-tabla">
                                <thead>
                                    <tr>
                                        <th scope="col">CODIGO</th>
                                        <th scope="col">GRADO</th>
                                        <th scope="col">MODALIDAD</th>
                                        <th scope="col">SECCION</th>
                                        <th scope="col">TURNO</th>
                                        <th scope="col">AÑO ESCOLAR</th>
                                        <th scope="col">ESTADO DE GRUPO</th>
                                        <th scope="col">DOCENTE GUIA</th>
                                    </tr>
                                </thead>

                                <?php
                                    $conteo = 1;
                                    $sql = "call SP_Mostrar_Grupos()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                   
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3] ?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [5]?></td>
                                        <td><?php echo $ver [6] ?></td>
                                        <td><?php echo $ver [7]?></td>
                                        <td><?php echo $ver [8]?></td>
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-editar" >
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