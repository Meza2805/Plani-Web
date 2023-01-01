<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table tabla_d table-responsive table-bordered compact hover display" id="act07">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">¿Cuándo se realizará?</th>
                                        <th scope="col">¿Con quiénes?</th>
                                        <th scope="col">¿Cuántos?</th>
                                        <th scope="col">¿Cómo?</th>
                                        <th scope="col">¿Donde?</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad05()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                                
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [5]?></td>
                                    
                                      
                                        <td><button class="btn fondo_degradado_verde text-light" data-bs-toggle="modal" data-bs-target="#" onclick="cargar_asignatura('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')" >
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

<!-- llamado a la hoja de funciones -->
<script  type="text/javascript">
$(document).ready(function () {
    $('#act07').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });
        });
</script>
