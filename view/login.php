<?php
    // session_start();
    // $CI = $_SESSION['CI'];
    // $NE = $_SESSION['NE'];

    // if ($CI == true)
    // {
    //     echo "<script language='JavaScript'>
    //             alert('CONTRASEÑA INCORRECTA')
    //             </script>"; 

    // }
    // else{
      
    // }

    // if ($NE == true)
    // {
    //     echo "<script language='JavaScript'>
    //     alert('EL USUARIO NO EXISTE')
    //     </script>"; 
    // }
    // else{
        
    // }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-5.2.2-dist/css/mis_estilos.css">
    <link rel="stylesheet" href="/css/mi_hjo_estilos.css  ">
    <script src="/Bootstrap/node_modules/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="/js/mi_hoja_java.js"></script>
    <link rel="icon" href="/images/logo02.png">
    <title>Acceso</title>
</head>
<body class="cuerpo_fondo">
    <section>
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100 needs-validation" novalidate>
                <div class="col-7 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong color_fondo mt-5" style="border-radius: 1rem;">
                        <form class="card-body p-3 text-center needs-validation" method="post" action="/includes/acceso_login.php" novalidate>
                            <h2 class="text-white tipografia">Sistema de Control y Planificación académica</h2>
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
                                    <input type="password"  class="form-control" name="contra" id="contra" placeholder="" required>
                                    <div class="invalid-tooltip">
                                        Se requiere contraseña
                                    </div>
                                    <label for="floatingInputGroup1" class="text-primary" value=""><strong>Contraseña</strong> </label>
    
                                </div>
                                  <span class="input-group-btn fondo_span">
                                  <button  id="pass" class="btn btn_fondo_blanco" type="button" onclick= "mostrarContrasena()"><i id="icon" class="bi bi-eye-fill"></i></button>
                                 </span>
                            </div>
                            <button  id="btnlogin" class="btn btn-dark btn-lg"  name="acceder" type="submit" >Acceder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

</body>

</html>

