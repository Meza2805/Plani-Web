//////////////////////////---DECLARACION DE FUNCIONES---//////////////////////////

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
            // alert(mensaje);
            //Actualizamos la página
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: mensaje,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para actualizar personal educativo
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
            // alert(mensaje);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: mensaje,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para cargar los datos de la tabla en el formulario
function cargar_form(cedula) {
    busqueda = "cedula=" + cedula;
    $.ajax({
        type: "POST",
        url: "../includes/buscar_personal.php",
        dataType: "json",
        data: busqueda,
        success: function(data) {
            var id_cargo, id_sexo;
            $('#cedulau').val(cedula);
            $('#p_nombreu').val(data.PRIMER_NOMBRE);
            $('#s_nombreu').val(data.SEGUNDO_NOMBRE);
            $('#p_apellidou').val(data.PRIMER_APELLIDO);
            $('#s_apellidou').val(data.SEGUNDO_APELLIDO);
            $('#fecha_nacu').val(data.FECHA_NAC);
            $('#telefonou').val(data.TELEFONO);
            $('#direccionu').val(data.DIRECCION);
            id_cargo = data.ID_CARGO;
            sexo = data.SEXO;
            //se llama el select de cargo y se le pasa el ID de cargo actual
            $('#cargo_u').load('../componentes/select_cargo_u.php', { id_cargo });
            $('#sexo_u').load('../componentes/select_sexo.php', { sexo });
        }
    });
}
// Funcion para eliminar o dar de baja a un personal educativo
function eliminar_personal(cedula_recibe) {
    eliminar = "cedula=" + cedula_recibe;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_personal.php",
        dataType: "json",
        data: eliminar,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }

    });
}
// Funcion para agregar un cargo administrativo
function agregar_cargo(cargo) {
    agregar_cargo = "cargo=" + cargo;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_cargo.php",
        dataType: "json",
        data: agregar_cargo,
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para cargar los datos de la tabla al formulario de cargo administrativo
function cargar_form_cargo(id_cargo, cargo) {
    $('#id_c_u').val(id_cargo);
    $('#cargo_u').val(cargo);
}
// Funcion para actualizar el nombre de un cargo administrativo
function actualizar_cargo(id_cargo, cargo) {
    act_cargo = "id_cargo=" + id_cargo +
        "&cargo=" + cargo;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_cargo.php",
        dataType: "json",
        data: act_cargo,
        success: function(data) {
                // alert(data.MENSAJE);
                // location.reload();
                Swal.fire({
                    // title: 'MENSAJE',
                    text: data.MENSAJE,
                    icon: 'success',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            }
            // success: function(data) {
            //     alert(data.MENSAJE);
            //     location.reload();
            // }
    });
}
// Funcion para eliminar un cargo administrativo
function eliminar_cargo(id_cargo) {
    eli_cargo = "id_cargo=" + id_cargo;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_cargo.php",
        dataType: "json",
        data: eli_cargo,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });

}
// Funcion para agregar una modalidad escolar
function agregar_modalidad(modalidad) {
    agregar_modalidad = "modalidad=" + modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_modalidad.php",
        dataType: "json",
        data: agregar_modalidad,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para cargar los datos una modalidad escolar en el formulario
function cargar_modalidad(id, modalidad) {
    $('#codigou').val(id);
    $('#modalidadu').val(modalidad);
}
// Funcion para actualizar una modalidad escolar
function actualizar_modalidad(id, modalidad) {
    modalidad = "id_modalidad=" + id +
        "&modalidad=" + modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_modalidad.php",
        dataType: "json",
        data: modalidad,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para eliminar o dar de baja una modalidad escolar
function eliminar_modalidad(id_modalidad) {
    eli_modalidad = "id_modalidad=" + id_modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_modalidad.php",
        dataType: "json",
        data: eli_modalidad,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });

}
// Funcion para mostrar los datos de una asignatura en el formulario
function cargar_asignatura(id, asignatura) {
    $('#codigou').val(id);
    $('#asigu').val(asignatura);
}
// Funcion para agregar una nueva asignatura
function agregar_asignatura(asignatura) {
    agregar_asig = "asignatura=" + asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/agregar_asignatura.php",
        dataType: "json",
        data: agregar_asig,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            Swal.fire({
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para actualizar una asignatura
function actualizar_asignatura(id, asignatura) {
    act_asig = "id_asignatura=" + id +
        "&asignatura=" + asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_asignatura.php",
        dataType: "json",
        data: act_asig,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            Swal.fire({
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para eliminar o dar de baja una asignatura
function delete_asig(id_asignatura) {
    eli_asig = "id_asignatura=" + id_asignatura;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_asignatura.php",
        dataType: "json",
        data: eli_asig,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            Swal.fire({
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para asignar una asignatura a una o varias modalidades
function agregar_asmd(id_asignatura, id_modalidad) {
    agregar_asmd = "id_asignatura=" + id_asignatura +
        "&id_modalidad=" + id_modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/asignar_asignatura.php",
        dataType: "json",
        data: agregar_asmd,
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                text: data.MENSAJE,
                icon: 'info',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });

}
// Funcion para eliminar o dar de baja una asignatura a una o varias modalidades
function eliminar_asignatura_modalidad(id) {
    eli_asm = "id=" + id;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_asm.php",
        dataType: "json",
        data: eli_asm,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            Swal.fire({
                text: data.MENSAJE,
                icon: 'info',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// Funcion para agregar una actividad escolar
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
    $.ajax({
        type: "POST",
        url: "../includes/agregar_actividad.php",
        dataType: "json",
        data: agregar_act,
        success: function(data) {
            //alert(data.MENSAJE);
            if (data.MENSAJE == "Actividad registrada correctamente") {
                Swal.fire({
                    text: data.MENSAJE,
                    icon: 'success',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    text: data.MENSAJE,
                    icon: 'info',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //location.reload();
                    }
                });
            }
        }
    });
}
// Funcion para eliminar o dar de baja una actividad curricular
function eliminar_actividad(id) {
    eli_ac = "id=" + id;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_actividad.php",
        dataType: "json",
        data: eli_ac,
        success: function(data) {
            Swal.fire({
                title: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}
// La siguiente funcion fue usada en caso de la Libreria de DataTable no funcione!!
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
// Funcion acceder al sistema a traves de usuario y contraseña
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
// Funcion para llamar al cuadro de consulta para salir del sistema
function salir() {
    Swal.fire({
        title: '¿Esta seguro que desea salir?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1F618D',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = "../includes/salir.php";
        }
    })
}
//Funcion para llenar el modal de actualizacion en Actividades
function buscar_actividad(id) {
    busqueda = "id=" + id;
    $.ajax({
        type: "POST",
        url: "../includes/buscar_actividad.php",
        dataType: "json",
        data: busqueda,

        success: function(data) {
            // alert(data.DESCRIPCION);
            $('#codigo_u').val(id);
            $('#linea_accion_u').val(data.DESCRIPCION);
            $('#des_u').val(data.PROTAGONISTA);
            $('#meta_anual_u').val(data.META_ANUAL);
            $('#meta_trimestral_u').val(data.METRA_TRIMESTRAL);
            $('#p_f_u').val(data.PARTICIPANTES_F);
            $('#p_m_u').val(data.PARTICIPANTES_M);
            $('#cp01_u').val(data.CU01);
            $('#cp02_u').val(data.CU02);
            $('#cp03_u').val(data.CU03);
            $('#cp04_u').val(data.CU04);
            $('#cp05_u').val(data.CU05);
            $('#mp01_u').val(data.MEDIDA01);
            $('#mp02_u').val(data.MEDIDA02);
            $('#mp03_u').val(data.MEDIDA03);
            $('#mp04_u').val(data.MEDIDA04);
            $('#mp05_u').val(data.MEDIDA05);
            $('#difi_u').val(data.DIFICULTADES);
            $('#alerta_u').val(data.ALERTAS);
            $('#propuesta_u').val(data.PROPUESTA);
            $('#observaciones_u').val(data.OBSERVACION);

        }

    });
}
// Funcion para agregar una actividad escolar
function actualizar_actividad(codigo, linea_accion, prota, meta_anual, meta_trimestral, p_femenino, p_masculino, cp01, cp02, cp03, cp04, cp05, mp01, mp02, mp03, mp04, mp05, dificultades, alertas, propuestas, observaciones) {
    agregar_act = "codigo=" + codigo +
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
    $.ajax({
        type: "POST",
        url: "../includes/actualizar_actividad.php",
        dataType: "json",
        data: agregar_act,
        success: function(data) {
            //alert(data.MENSAJE);
            if (data.MENSAJE == "Actividad Actualizada Correctamente") {
                Swal.fire({
                    text: data.MENSAJE,
                    icon: 'success',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    text: data.MENSAJE,
                    icon: 'info',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //location.reload();
                    }
                });
            }
        }
    });

}
// Funcion para asignar una asignatura a una o varias modalidades
function agregar_turno(id_turno, id_modalidad) {
    agregar_turno = "id_turno=" + id_turno +
        "&id_modalidad=" + id_modalidad;
    $.ajax({
        type: "POST",
        url: "../includes/asignar_turno.php",
        dataType: "json",
        data: agregar_turno,
        success: function(data) {
            Swal.fire({
                text: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });
}

function buscar_codigo_grupo(id_modalidad, id_grado, id_turno, id_seccion) {
    cadena = "id_modalidad=" + id_modalidad +
        "&id_grado=" + id_grado +
        "&id_turno=" + id_turno +
        "&id_seccion=" + id_seccion;
    var resultado;
    $.ajax({
        type: "POST",
        url: "../includes/buscar_codigo_grupo.php",
        dataType: "json",
        data: cadena,
        success: function(data) {

            resultado = data.MENSAJE
            if (resultado == 'No Existe un grupo con esas caracteristicas') {
                $('#tabla_guia').hide();
                Swal.fire({
                    text: data.MENSAJE,
                    icon: 'error',
                    confirmButtonText: 'ACEPTAR'

                }).then((result) => {
                    if (result.isConfirmed) {

                    }
                });
            } else {
                $('#tabla_guia').show();
                $('#tabla_guia').load('../componentes/tabla_guia.php', { resultado });
                $('#tabla_bloque').load('../componentes/tabla_bloque.php', { resultado });
                $('#tabla_asignatura_horario').load('../componentes/tabla_asignatura_horario.php', { resultado });
                $('#tabla_asignatura_horario02').load('../componentes/tabla_asignatura_horario02.php', { resultado });
                $('#tabla_asignatura_horario03').load('../componentes/tabla_asignatura_horario03.php', { resultado });
                $('#tabla_asignatura_horario04').load('../componentes/tabla_asignatura_horario04.php', { resultado });
                $('#tabla_asignatura_horario05').load('../componentes/tabla_asignatura_horario05.php', { resultado });

                Swal.fire({
                    text: 'Grupo Encontrado, Horario Cargado',
                    icon: 'success',
                    confirmButtonText: 'ACEPTAR'
                })
            }

        }
    });

}

//Funcion para consultar eliminacion de Actividad Curricular
function consulta_eliminar_actividad(id_actividad) {
    Swal.fire({
        title: '¿Esta seguro que desea eliminar el rergistro de la actividad Cod. ' + id_actividad + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1F618D',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            $(document).ready(function() {
                eliminar_actividad(id_actividad);
            });
        }
    })
}

// Funcion para insertar grupo
function agregar_grupo(cedula, id_modalidad, id_grado, id_turno, id_seccion) {
    cadena = "cedula=" + cedula +
        "&id_modalidad=" + id_modalidad +
        "&id_grado=" + id_grado +
        "&id_turno=" + id_turno +
        "&id_seccion=" + id_seccion;
    // alert(cadena);
    $.ajax({
        type: "POST",
        url: "../includes/agregar_grupo.php",
        data: cadena,
        success: function(mensaje) {
            // alert(mensaje);
            // // Actualizamos la página
            // location.reload();
            if (mensaje === 'Este grupo ya existe y esta asignado a otro Docente') {
                Swal.fire({
                    title: mensaje,
                    icon: 'info',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    title: mensaje,
                    icon: 'success',
                    confirmButtonText: 'ACEPTAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            }

        }
    });
}

function eliminar_grupo(id_grupo) {
    eli_grupo = "id_grupo=" + id_grupo;
    $.ajax({
        type: "POST",
        url: "../includes/eliminar_grupo.php",
        dataType: "json",
        data: eli_grupo,
        // success: function(data) {
        //     alert(data.MENSAJE);
        //     location.reload();
        // }
        success: function(data) {
            // alert(data.MENSAJE);
            // location.reload();
            Swal.fire({
                // title: 'MENSAJE',
                title: data.MENSAJE,
                icon: 'success',
                confirmButtonText: 'ACEPTAR'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        }
    });

}