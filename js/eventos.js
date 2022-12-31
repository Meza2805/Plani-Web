//////////////////////////---EVENTOS DE BOTONES---//////////////////////////

// Evento de boton Guardar Personal
var form = document.getElementById('form_registro');
form.addEventListener('submit', function(event) {
    event.preventDefault();
    let cedula = $('#cedula').val();
    let p_nombre = $('#p_nombre').val();
    let s_nombre = $('#s_nombre').val();
    let p_apellido = $('#p_apellido').val();
    let s_apellido = $('#s_apellido').val();
    let telefono = $('#telefono').val();
    let direccion = $('#direccion').val();
    // /*variable para guardar fecha*/
    let fecha_nac = $('#fecha_nac').val();
    // /*Ubicando el select del cargo*/ 
    let select_cargo = document.getElementById('select_cargo');
    // /*Obteniendo el valor de la opcion de cargo*/
    let value_cargo = select_cargo.value;
    // /*Ubicando el select de sexo*/
    let select_sexo = document.getElementById('sexo');
    // /*Obteniendo el valor de la opcion de sexo*/
    let value_sexo = select_sexo.value;

    agregar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido, fecha_nac, value_sexo, telefono, direccion, value_cargo);
});