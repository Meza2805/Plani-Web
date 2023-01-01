<?php
require_once "../includes/conexion.php";    
?>
                    <table class="table tabla_d table-responsive table-bordered compact hover display" id="datos">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Protagonistas</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                
                                    $sql = "call SP_Mostrar_Actividad02()";
                                    $resultado = mysqli_query($conexion,$sql);
                                   while($ver = mysqli_fetch_row($resultado)){
                                ?>
                               
                                    <tr>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><button class="btn fondo_degradado_verde text-light" data-bs-toggle="modal" data-bs-target="#modal_actividad02">
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                      
                                    </tr>
                            <?php
                             
                                 }
                            ?>
                                  
                                </tbody>
                            </table>


<!-- llamado a la hoja de funciones -->
<script  type="text/javascript">
$(document).ready(function () {
    $('#datos').DataTable({
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


