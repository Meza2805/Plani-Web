<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- referencia a hoja de estilos principal ubicada localmente -->
   <link rel="stylesheet" href="../css/mis_estilos.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <!-- referencia a hoja de estilos de iconos de boostrap ubicacada localmente -->
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Referencia a hoja de las principales funciones Javscript -->
    <script src="../js/funciones.js"></script>
    <script src="../css/jquery-3.6.1.min.js"></script>
    <script src="../js/mi_hoja_java.js"></script>
   
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

        <!--Libreria de Sweet Alert -->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">
    <!-- <title>Acceso</title> -->

</head>
<body class="cuerpo d-flex align-items-center justify-content-center">
                <div class="col-4" >
                    <div class="card shadow-2-strong color_fondo mt-5" style="border-radius: 1rem; background-color: #2980B9;">
                        <form class="card-body p-3 text-center needs-validation" method="post" action="/includes/acceso_login.php" novalidate>
                            <h2 class="text-white tipografia">Sistema de Control y Planificación Académica</h2>
                            <img src="/images/logo02.png" alt="" class="img-fluid mb-3 logo">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-circle text-primary"></i></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="usuario" placeholder="Usuario"  required>
                                    <div class="invalid-tooltip">
                                        Debe ingresar un usuario
                                    </div>
                                    <label for="floatingInputGroup1" class="text-primary">  <strong>Usuario</strong> </label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill text-primary"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="password"  class="form-control" name="contra" id="contra" placeholder="Contraseña" required>
                                    <div class="invalid-tooltip">
                                        Se requiere contraseña
                                    </div>
                                    <label for="contra" class="text-primary" value=""><strong>Contraseña</strong> </label>
                                </div>
                                  <!-- <span class="input-group-btn fondo_span">
                                  <button  id="pass" class="btn" type="button"  style="background-color: white;" onclick= "mostrarContrasena()"><i id="icon" class="bi bi-eye-fill"></i></button>
                                 </span> -->
                            </div>
                            <button  id="btnlogin" class="btn btn-dark btn-lg form-control"  name="acceder" type="submit" >Acceder</button>
                        </form>
                    </div>
                </div>
</body>

<script>
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
    </script>

</html>

