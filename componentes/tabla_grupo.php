<?php
require_once "../includes/conexion.php";    
?>
<table class="table nowrap tabla_d  table-bordered compact hover display" id="tbGrupo">
                                <thead>
                                    <tr>
                                        <th >Código</th>
                                        <th >Modalidad</th>
                                        <th >Turno</th>
                                        <th >Grado</th>
                                       
                                        <th >Sección</th>
                                     
                                        
                                        <!-- <th >Estado de Grupo</th> -->
                                        <th>Docente Guía</th>
                                        <th >Editar</th>
                                        <th >Eliminar</th>
                                    </tr>
                                </thead>

                               
                                <tbody >
                                <?php
                                 
                                 $sql = "call SP_Mostrar_Grupos()";
                                 $resultado = mysqli_query($conexion,$sql);
                                while($ver = mysqli_fetch_row($resultado)){
                             ?>
                                    <tr>
                                   
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [2]?></td>
                                      
                                        <td><?php echo $ver [3] ?></td>
                                      
                                        <td><?php echo $ver [5]?></td>
                                        <!-- <td><?php echo $ver [6] ?></td> -->
                                        <!-- <td><?php echo $ver [7]?></td> -->
                                      
                                        <td><button class="btn fondo_degradado_azul" onclick="cargar_form_grupo('<?php echo $ver[0] ?>')" data-bs-toggle="modal" data-bs-target="#modal_grupoAC" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn fondo_degradado_rojo" onclick="Eliminar_gr('<?php echo $ver[0] ?>','<?php echo $ver[2]?>','<?php echo $ver[3]?>','<?php echo $ver[4]?>')"><i class="bi bi-trash text-white"></i></button></td>
                                     
                                    </tr>
                            <?php
                                // $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>

<!-- llamado a la hoja de funciones -->
<script src="../js/DataTable.js"></script>



    <!-- Prueba de Funcion para capturar elemento de una tabla  -->
