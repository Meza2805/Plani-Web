<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table table-striped mt-4 table-primary table-hover table-bordered display" id="actividad_tabla06">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Principales Dificultades</th>
                                        <th scope="col">Situaciones en Estado de Alerta</th>
                                        <th scope="col">Propuesta de Toma de Decisiones</th>
                                        <th scope="col">Observaciones</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>

                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad06()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4]?></td>
                                  
                                    
                                      
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#" onclick="cargar_asignatura('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <!-- <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td> -->
                                     
                                    </tr>
                            <?php
                                $conteo++;
                                 }
                            ?>
                                  
                                </tbody>
                            </table>

<script  type="text/javascript">
$(document).ready(function () {
            $('#actividad_tabla06').DataTable({
                scrollY: '48vh',
                scrollCollapse: true,
                paging: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                }
            });
        });
</script>