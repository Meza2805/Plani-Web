<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="asignatura-tabla">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Grado</th>
                                        <th scope="col">Modalidad</th>
                                        <th scope="col">Sección</th>
                                        <th scope="col">Turno</th>
                                        <th scope="col">Año Escolar</th>
                                        <th scope="col">Estado de Grupo</th>
                                        <th scope="col">Docente Guía</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>

                                <?php
                                 
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