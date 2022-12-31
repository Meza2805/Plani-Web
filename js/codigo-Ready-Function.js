//////////////////////////---DECLARACION DE CODIGO READY-FUNCTION---//////////////////////////

// Codigo para llamar la tabla personal
$(document).ready(function() {
    $('#tabla_personal').load('../componentes/tabla_personal.php');
});

// Codigo para cargar el cargo de la base de datos
$(document).ready(function() {
    $('#cargo').load('../componentes/select_cargo.php');
});

// Codigo para cargar el cargo de la base de datos en el formulario de actualizar
$(document).ready(function() {
    $('#cargo_u').load('../componentes/select_cargo_u.php');
});