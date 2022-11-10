function mostrarContrasena() {
    var tipo = document.getElementById("contra");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}

//cambiar icono de password
function cambiar_icono() {
    var btnpass = document.getElementById('pass');
    var icono = document.getElementById('icon');
    var contador = 0;

    function cambio() {
        if (contador == 0) {
            icono.classList.add('bi bi-eye-slash-fill');
            contador = 1;
        } else {
            icono.classList.remove('i bi-eye-slash-fill');
            contador = 0;
        }
    }

    // if (icono.className == "bi bi-eye-fill") {
    //     icono.className = "bi bi-eye-slash-fill";
    // } else {
    //     icono.className = "bi bi-eye-fill"
    // }

    btnpass.addEventListener('click', cambiar_icono, true);

}


function limpiar() {

    document.getElementById('observacion').reset();
}





















/// Clase para activar la validacion

(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()