<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table table-striped mt-4 table-primary table-hover table-bordered display" id="actividad_tabla01">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Linea de Acción</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>

                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad01()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                <tbody >
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                       
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_actividad01" onclick="cargar_actividad01('<?php echo $ver[0] ?>')" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                          
                                 }
                            ?>
                                  
                                </tbody>
                            </table>

<script  type="text/javascript">
$(document).ready(function () {
            $('#actividad_tabla01').DataTable({
                scrollY: '48vh',
                scrollCollapse: true,
                paging: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                }
            });
        });
</script>