<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="images/login.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    #
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/mis_estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="node_modules/css-hamburgers/hamburgers.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="node_modules/animsition/css/animsition.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="node_modules/select2/select2.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="node_modules/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url(../images/Fondo02.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;">
            <div class="wrap-login100 text-center" style=" background: rgb(2, 0, 36);
            background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(35, 106, 201, 1) 100%, rgba(0, 212, 255, 1) 100%);">
                <form class="login100-form" id="form_login" >
                    <span class="login100-form-title p-b-26">
						BIENVENIDO
					</span>
                    <img src="images/logo02.png" class="escudo_index" alt="">
                    <!-- <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span> -->
                    <div class="wrap-input100 validate-input mt-3">
                        <input class="input100 text-center" type="text" maxlength="15" id="usuario" name="usuario" required>
                        <span class="focus-input100" data-placeholder="USUARIO"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100 text-center" type="password" name="pass" maxlength="15" id="contra" required onkeydown="mensaje()">
                        <span class="focus-input100" data-placeholder="CONTRASEÑA"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="btn  login100-form-btn" type="submit">
								ACCEDER
							</button>
                        </div>
                    </div>
                    <!-- <div class="text-center p-t-115">
                        <span class="txt1">
							Don’t have an account?
						</span>
                        <a class="txt2" href="#">
							Sign Up
						</a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/funciones.js"></script>
    <!--===============================================================================================-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!--===============================================================================================-->
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
    <script src="node_modules/animsition/js/animsition.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
    <script src="node_modules/@popperjs/core/lib/popper.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->
    <script src="node_modules/select2/select2.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
    <script src="node_modules/daterangepicker/moment.js"></script>
    <!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
    <script src="node_modules/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
    <script src="node_modules/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <!-- Codigo de js para el evento de validacion de input -->
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
    <!-- Evento del boton Acceder -->
    <script type="text/javascript">
        var form = document.getElementById('form_login');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let usuario = $('#usuario').val();
            let contra = $('#contra').val();
            login(usuario, contra)
        });
    </script>

</body>
</html>