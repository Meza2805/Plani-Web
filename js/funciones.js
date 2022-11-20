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

    $.ajax({
        type: "POST",
        url: "../includes/agregar_personal.php",
        data: cadena,
        success: function(mensaje) {
            alert(mensaje);
            //Actualizamos la página
            location.reload();

            // $('#tabla_personal').load('../componentes/tabla_personal.php');
        }
    });
}


function actualizar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido,
    fecha_nac, value_sexo, telefono, direccion, value_cargo) {
    cadena_actualizar = "cedula=" + cedula +
        "&p_nombre=" + p_nombre +
        "&s_nombre=" + s_nombre +
        "&p_apellido=" + p_apellido +
        "&s_apellido=" + s_apellido +
        "&fecha_nac=" + fecha_nac +
        "&value_sexo=" + value_sexo +
        "&telefono=" + telefono +
        "&direccion=" + direccion +
        "&value_cargo=" + value_cargo;
    // alert(cadena_actualizar);
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_personal.php",
        data: cadena_actualizar,
        success: function(mensaje) {
            alert(mensaje);
            location.reload();
        }
    });
}


function cargar_form(cedula) {
    busqueda = "cedula=" + cedula;
    $.ajax({
        type: "POST",
        url: "../includes/buscar_personal.php",
        dataType: "json",
        data: busqueda,

        success: function(data) {
            $('#cedulau').val(cedula);
            $('#p_nombreu').val(data.PRIMER_NOMBRE);
            $('#s_nombreu').val(data.SEGUNDO_NOMBRE);
            $('#p_apellidou').val(data.PRIMER_APELLIDO);
            $('#s_apellidou').val(data.SEGUNDO_APELLIDO);
            $('#fecha_nacu').val(data.FECHA_NAC);
            $('#telefonou').val(data.TELEFONO);
            $('#direccionu').val(data.DIRECCION);
        }

    });
}

function eliminar_personal(cedula_recibe) {
    eliminar = "cedula=" + cedula_recibe;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_personal.php",
        dataType: "json",
        data: eliminar,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }

    });
}

function agregar_cargo(cargo) {
    agregar_cargo = "cargo=" + cargo;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_cargo.php",
        dataType: "json",
        data: agregar_cargo,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function cargar_form_cargo(id_cargo, cargo) {
    $('#id_c_u').val(id_cargo);
    $('#cargo_u').val(cargo);
}

function actualizar_cargo(id_cargo, cargo) {

    act_cargo = "id_cargo=" + id_cargo +
        "&cargo=" + cargo;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_cargo.php",
        dataType: "json",
        data: act_cargo,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function eliminar_cargo(id_cargo) {
    eli_cargo = "id_cargo=" + id_cargo;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_cargo.php",
        dataType: "json",
        data: eli_cargo,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });

}

function agregar_modalidad(modalidad) {
    agregar_modalidad = "modalidad=" + modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_modalidad.php",
        dataType: "json",
        data: agregar_modalidad,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function cargar_modalidad(id, modalidad) {
    $('#codigou').val(id);
    $('#modalidadu').val(modalidad);
}

function actualizar_modalidad(id, modalidad) {
    modalidad = "id_modalidad=" + id +
        "&modalidad=" + modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_modalidad.php",
        dataType: "json",
        data: modalidad,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function eliminar_modalidad(id_modalidad) {
    eli_modalidad = "id_modalidad=" + id_modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_modalidad.php",
        dataType: "json",
        data: eli_modalidad,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });

}


function cargar_asignatura(id, asignatura) {
    $('#codigou').val(id);
    $('#asigu').val(asignatura);
}

function agregar_asignatura(asignatura) {
    agregar_asig = "asignatura=" + asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_asignatura.php",
        dataType: "json",
        data: agregar_asig,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function actualizar_asignatura(id, asignatura) {
    act_asig = "id_asignatura=" + id +
        "&asignatura=" + asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_asignatura.php",
        dataType: "json",
        data: act_asig,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}


function eliminar_asignatura(id_asignatura) {
    eli_asig = "id_asignatura=" + id_asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_asignatura.php",
        dataType: "json",
        data: eli_asig,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}


function agregar_asmd(id_asignatura, id_modalidad) {
    agregar_asmd = "id_asignatura=" + id_asignatura +
        "&id_modalidad=" + id_modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/asignar_asignatura.php",
        dataType: "json",
        data: agregar_asmd,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}

function eliminar_asignatura(id) {
    eli_asm = "id=" + id;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_asm.php",
        dataType: "json",
        data: eli_asm,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}