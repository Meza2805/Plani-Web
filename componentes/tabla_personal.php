<?php
require_once "../includes/conexion.php";    
?>
<table class="table table-striped mt-4 table-primary table-hover table-bordered display" id="registro">
                                <thead>
                                    <tr>
                                        
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
    
                                   while($ver = mysqli_fetch_row($resultado)){
                                    $cedula=$ver["CEDULA"];
                                ?>
                                <tbody >
                                    <tr>
                                        
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1] ?></td>
                                        <td><?php echo $ver [2] ?></td>
                                        <td><?php echo $ver [3] ?></td>
                                        <td><?php echo $ver [4] ?></td>
                                        <td><?php echo $ver [5] ?></td>
                                        <td><?php echo $ver [6] ?></td>
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar_personal" onclick="cargar_form('<?php echo $ver [0] ?>')">
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger" onclick="Eliminar('<?php  echo $ver[0]?>','<?php  echo $ver[1]?>')"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                }
                            ?>
                                  
                                </tbody>
                            </table>




<script  type="text/javascript">
    $(document).ready(function () {
        $('#registro').DataTable({
        scrollY: '48vh',
        scrollCollapse: true,
        paging: true,
       
            language: {
            url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
            }
        });
    });
</script>