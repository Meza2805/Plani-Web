// Funcion para insertar personal educativo

function agregar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido,
    fecha_nac, value_sexo, telefono, direccion, value_cargo) {
    cadena = "cedula=" + cedula +
        "&p_nombre=" + p_nombre +
        "&s_nombre=" + s_nombre +
        "&p_apellido=" + p_apellido +
        "&s_apellido=" + s_apellido +
        "&fecha_nac=" + fecha_nac +
        "&value_sexo=" + value_sexo +
        "&telefono=" + telefono +
        "&direccion=" + direccion +
        "&value_cargo=" + value_cargo;

    // alert(cadena);

    $.ajax({
        type: "POST",
        url: "../includes/agregar_personal.php",
        data: cadena,
        success: () => { alert(r) }
    });
}























// function agregar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido, fecha_nac, sexo, telefono, direccion, cargo) {
//     cadena = "cedula=" + cedula +
//         "&p_nombre=" + p_nombre +
//         "&s_nombre=" + s_nombre +
//         "&p_apellido=" + p_apellido +
//         "&s_apellido=" + s_apellido +
//         "&fecha_nac=" + fecha_nac +
//         "&sexo= " + sexo +
//         "&telefono=" + telefono +
//         "&direccion=" + direccion +
//         "&cargo=" + cargo;

//     $.ajax({
//         type: "POST",
//         url: "../includes/agregar_personal.php",
//         data: cadena,
//         success: function(r) {
//             if (r == 1) {
//                 $('#tabla_personal').load('../componentes/tabla_personal.php');
//                 alertify.success("Agregado con exito");
//             } else {
//                 alertify.error("Fallo el servidor");
//             }
//         }
//     });
// }


// function agregar_personal(p_nombre, p_apellido) {
//     cadena = "p_nombre=" + p_nombre +
//         "&p_apellido=" + p_apellido;


//     $.ajax({
//         type: "POST",
//         url: "../includes/agregar_personal.php",
//         data: cadena,
//         success: function(r) {
//             if (r == 1) {
//                 $('#tabla_personal').load('../componentes/tabla_personal.php');
//                 alertify.success("Agregado con exito");
//             } else {
//                 alertify.error("Fallo el servidor");
//             }
//         }
//     });
// }