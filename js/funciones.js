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

function delete_asig(id_asignatura) {
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

function eliminar_asignatura_modalidad(id) {
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

function agregar_actividad(cedula, linea_accion, prota, meta_anual, meta_trimestral, p_femenino, p_masculino, cp01, cp02, cp03, cp04, cp05, mp01, mp02, mp03, mp04, mp05, dificultades, alertas, propuestas, observaciones) {
    agregar_act = "cedula=" + cedula +
        "&linea=" + linea_accion +
        "&prota=" + prota +
        "&meta_anual=" + meta_anual +
        "&meta_trimestral=" + meta_trimestral +
        "&p_femenino=" + p_femenino +
        "&p_masculino=" + p_masculino +
        "&cp01=" + cp01 +
        "&cp02=" + cp02 +
        "&cp03=" + cp03 +
        "&cp04=" + cp04 +
        "&cp05=" + cp05 +
        "&mp01=" + mp01 +
        "&mp02=" + mp02 +
        "&mp03=" + mp03 +
        "&mp04=" + mp04 +
        "&mp05=" + mp05 +
        "&dificultades=" + dificultades +
        "&alertas=" + alertas +
        "&propuestas=" + propuestas +
        "&observaciones=" + observaciones;

    // alert(agregar_actividad);
    $.ajax({
        type: "POST",
        url: "../includes/agregar_actividad.php",
        dataType: "json",
        data: agregar_act,
        success: function(data) {
            alert(data.MENSAJE);
            location.reload();
        }
    });
}


function Buscar() {
    const tableReg = document.getElementById('datos');
    const searchText = document.getElementById('searchTerm').value.toLowerCase();
    let total = 0;

    // Recorremos todas las filas con contenido de la tabla
    for (let i = 1; i < tableReg.rows.length; i++) {

        // Si el td tiene la clase "noSearch" no se busca en su cntenido
        if (tableReg.rows[i].classList.contains("noSearch")) {
            continue;
        }
        let found = false;
        const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

        // Recorremos todas las celdas
        for (let j = 0; j < cellsOfRow.length && !found; j++) {
            const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

            // Buscamos el texto en el contenido de la celda
            if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                found = true;
                total++;
            }
        }
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {

            // si no ha encontrado ninguna coincidencia, esconde la
            // fila de la tabla
            tableReg.rows[i].style.display = 'none';
        }
    }

    // mostramos las coincidencias
    const lastTR = tableReg.rows[tableReg.rows.length - 1];
    const td = lastTR.querySelector("td");
    lastTR.classList.remove("hide", "red");
    if (searchText == "") {
        lastTR.classList.add("hide");
    } else if (total) {
        td.innerHTML = "Se ha encontrado " + total + " coincidencia" + ((total > 1) ? "s" : "");
    } else {
        lastTR.classList.add("red");
        td.innerHTML = "No se han encontrado coincidencias";
    }
}


function login(usuario, contra) {
    var login = "usuario=" + usuario +
        "&contra=" + contra;

    $.ajax({
        type: "POST",
        url: "../includes/login.php",
        dataType: "json",
        data: login,
        success: function(data) {
            // alert(data.MENSAJE);
            if (data.MENSAJE == "ACCESO EXITOSO") {
                // var nombre = data.NOMBRE;
                // var cargo = data.CARGO;
                // var cedula = data.CEDULA;

                //  window.location.href = window.location.href + "?var01=" + nombre + "&var02=" + cargo + "&var03=" + cedula;
                location.assign('principal.php');
                // window.location = "principal.php?var01=" + nombre + "&var02=" + cargo + "&var03=" + cedula;

            } else {
                Swal.fire({
                    // title: 'MENSAJE',
                    text: data.MENSAJE,
                    icon: 'error',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });

            }


        }
    });


    // Swal.fire({
    //     title: 'MENSAJE',
    //     text: login,
    //     icon: 'info'
    // });

}



//Tecla mayuscula activada
// $('#contra').keypress(function(e) {
//     var s = String.fromCharCode(e.which);
//     if (s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey) {
//         alert('Bloq Mayus está activado.');
//     }
// });



// function comprobarNombre(valor, campo) {

//     var mensaje = "";

//     // comprobar los posibles errores
//     if (this.value == "") {
//         mensaje = "El email no puede estar vacío";
//     } else if (this.value.indexOf("@") < 0) {
//         mensaje = "El email debe contener una @";
//     } else if (this.value.indexOf(".com", this.value.indexOf("@")) < 0) {
//         mensaje = "El email debe contener .com detras de la @";
//     }

//     // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
//     this.setCustomValidity(mensaje);
// }

// var email = document.querySelector("#contra");

// // cuando se cambie el valor del campo o sea incorrecto, mostrar/resetear mensaje
// email.addEventListener("invalid", comprobarNombre);
// email.addEventListener("input", comprobarNombre);

function mensaje() {
    //  var contra = document.querySelector("#contra");
    $('#contra').get(0).setCustom('SIRVE');


    // contra.setCustomValidity("funcion");
    // alert("You pressed a key inside the input field");

}