<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table table-striped mt-4 table-primary table-hover table-bordered display" id="actividad_tabla05">
                                <thead>
                                    <tr>
                                        <th scope="col">CODIGO</th>
                                        <th scope="col">¿CUÁNDO SE REALIZARÁ?</th>
                                        <th scope="col">¿CON QUIÉNES?</th>
                                        <th scope="col">¿CUÁNTOS?</th>
                                        <th scope="col">¿CÓMO?</th>
                                        <th scope="col">¿DONDE?</th>
                                        <th scope="col">EDITAR</th>
                                      
                                    </tr>
                                </thead>

                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad05()";
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
                                        <td><?php echo $ver [5]?></td>
                                    
                                      
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
            $('#actividad_tabla05').DataTable({
                scrollY: '48vh',
                scrollCollapse: true,
                paging: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                }
            });
        });
</script>