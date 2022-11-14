<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered" id="registro">
                                <thead>
                                    <tr>
                                        <th scope="col">NO.</th>
                                        <th scope="col">CEDULA</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">EDAD</th>
                                        <th scope="col">SEXO</th>
                                        <th scope="col">TELEFONO</th>
                                        <th scope="col" class="upper">DIRECCIÓN</th>
                                        <th scope="col">CARGO</th>
                                        <th scope="col">EDITAR</th>
                                        <th scope="col">ELIMINAR</th>
                                    </tr>
                                </thead>

                                <?php
                                    $sql = "call SP_Mostrar_Personal()";
                                    $resultado = mysqli_query($conexion,$sql);
                                    $contador = 1;
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                        <th scope="row"><?php echo $contador ?></th>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [5]?></td>
                                        <td><?php echo $ver [6]?></td>
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-editar" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                 $contador++;   }
                            ?>
                                  
                                </tbody>
                            </table>