<?php
require_once "../includes/conexion.php";   
$sql = "CALL SP_Mostrar_Docentes();";
$resultado = mysqli_query($conexion,$sql); 
?>

<!-- <div class="mt-3 mb-3 w-25">
    <input type="text" class="form-control text-uppercase"  placeholder="Buscar" id="searchTerm" type="text" onkeyup="Buscar()">
</div> -->
<link rel="stylesheet" type="text/css" href="../css/ancho_tabla.css">
<table class="table nowrap table-bordered compact hover display" id="tbdocente">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
             
            </tr>
        </thead>
         <tbody>
        <?php  
         while($ver = mysqli_fetch_row($resultado))
        {
            ?>
        <tr>   
           <td><?php echo $ver[0] ?></td>
           <td> <?php echo $ver[1] ?></td>
        </tr>
            <?php
        }
             ?>  
    </tbody>
       
</table>





<script>
    $('#tbdocente').DataTable({
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
            "search": "Digite el Nombre del Docente:  ",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        pageLength : 3,
        lengthMenu: [[3], [3]]
    });
    
</script>



<script>
        //Cuando la página esté cargada completamente
        $(document).ready(function(){
            //Creamos el evento mouseover en el elemento con id = texto
            $('#tbdocente').mouseover(function(){
                //Al poner el cursor encima cambia el borde a rojo
                $('#tbdocente').css("cursor","Pointer");
            }); //Asimismo debemos crear el evento mouseout para que vuelva a ponerse negro  
        });
        $(document).ready(function () {
             var table = $('#tbdocente').DataTable();
                $('#tbdocente tbody').on('click', 'tr', function () {
                    var data = table.row(this).data();
                   // alert('You clicked on ' + data[0] + "'s row");
                    $('#cedula02').val('');  //limpia el input
                    $('#cedula02').val(data[0]);
                });
        });
        

        
</script>










