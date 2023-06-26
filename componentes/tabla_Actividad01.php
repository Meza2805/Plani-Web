<?php
require_once "../includes/conexion.php";    
?>
 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css">
 <link rel="stylesheet" type="text/css" href="../css/ancho_tabla02.css">
                    <table class="table nowrap table-bordered  compact hover display" id="act08">
                                <thead >
                                    <tr >
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Eliminar</th>
                                        <th class="text-center">Imprimir</th>
                                        <th  class="text-center" >Código</th>
                                        <th  class="text-center">   Linea de Acción</th>
                                        <th  class="text-center">Protagonistas</th>
                                        <th  class="text-center">Meta Anual</th>
                                        <th  class="text-center">Meta Trimestral</th>
                                        <th class="text-center">Participantes Femeninos</th>
                                        <th class="text-center">Participantes Masculinos</th>
                                        <th class="text-center">Total Participantes</th>
                                        <th class="text-center">Alcance Trimestral</th>
                                        <th class="text-center">Alcance Anual</th>
                                        <th class="text-center">¿Qué se hizo?</th>
                                        <th class="text-center">¿Con cuántos y quiénes fueron los protagonistas?</th>
                                        <th class="text-center">¿sobre qué?</th>
                                        <th class="text-center">¿Para qué se hizo o cuál fue el resultado?</th>
                                        <th class="text-center">¿Cuál es el impacto del resultado?</th>
                                        <th class="text-center">¿Cuándo se realizará?</th>
                                        <th class="text-center">¿Con quiénes?</th>
                                        <th class="text-center">¿Cuántos?</th>
                                        <th class="text-center">¿Cómo?</th>
                                        <th class="text-center">¿Donde?</th>
                                        <th class="text-center">Principales Dificultades</th>
                                        <th class="text-center">Situaciones en Estado de Alerta</th>
                                        <th class="text-center">Propuesta de Toma de Decisiones</th>
                                        <th class="text-center">Observaciones</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "call SP_Mostrar_Actividad01();";
                                        $resultado = mysqli_query($conexion,$sql);
                                    while($ver = mysqli_fetch_row($resultado)){
                                    ?>
                                    <tr>
                                    <td><button class="btn fondo_degradado_azul text-light"  
                                         onclick="buscar_actividad('<?php echo $ver [0]?>');" data-bs-toggle="modal" data-bs-target="#modal_ac">
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn fondo_degradado_rojo text-light text-center" onclick="consulta_eliminar_actividad('<?php echo $ver [0]?>');"><i class="bi bi-trash"></i></button></td>
                                        <td><button class="btn fondo_degradado_verde text-light" onclick="CargarActividad('<?php echo $ver [0]?>');"><i class="bi bi-printer-fill"></i></i></button></td>
                                        
                                        <td class="text-center"><?php echo $ver [0] ?></td>
                                        <td ><p class="overflow-ellipsis"> <?php echo $ver [1]?></p></td>
                                        <td><p class="overflow-ellipsis "><?php echo $ver [2]?></p> </td>
                                        <td class="text-center"><?php echo $ver [3]?></td>
                                        <td class="text-center"><?php echo $ver [4]?></td>
                                        <td class="text-center"><?php echo $ver [5]?></td>
                                        <td class="text-center"> <?php echo $ver [6]?></td>
                                        <td class="text-center"><?php echo $ver [7]?></td>
                                        <td class="text-center"><?php echo $ver [8]?></td>
                                        <td class="text-center"><?php echo $ver [9]?></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [10]?></p></td>
                                        <td> <p class="overflow-ellipsis02 text-center"><?php echo $ver [11]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [12]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [13]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [14]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [15]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [16]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [17]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [18]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [19]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [20]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [21]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [22]?></p></td>
                                        <td> <p class="overflow-ellipsis text-center"><?php echo $ver [23]?></p></td>  
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>                               
                                </tbody>
                    </table>

<!-- llamado a la hoja de funciones -->
<!-- <script src="../js/DataTable.js"></script> -->

<script  type="text/javascript">
    $(document).ready(function () {
        $('#act08').DataTable({
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
        pageLength : 5,
        lengthMenu: [
            [5,10, 25, 50, -1],
            [5,10, 25, 50, 'Todas'],
        ]
        });
            });   
</script>

<script type="text/javascript">
    let obtenerDato = document.getElementsByTagName("td");
    console.log(obtenerDato[2].innerHTML);
</script>



