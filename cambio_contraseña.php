<?php
    session_start();
    $usuario = $_SESSION['username'];
    $rol = $_SESSION['c'];
    $cedula =$_SESSION['cedula'];
     if(!isset($usuario))
     {
         header("location: ../view/login.php");
     }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Contraseña</title>
    <link rel="stylesheet" href="../css/estilos_secundarios.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <script src="../js/funciones.js"></script>
    <script src="../css/jquery-3.6.1.min.js"></script>
    <script src="../js/mi_hoja_java.js"></script>
    <script src="../node_modules/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Libreria de Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Libreria de Sweet Alert -->
</head>

<body class="cuerpo">
    <header>
        <nav class="navbar navbar-expand-lg fondo navbar-light shadow-sm fixed-top">
            <div class="container">
                <img src="/images/logo02.png" class="logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>

                                <!-- Codio PHP para hacer referencia al usuario logueado -->
                                <strong>
                                <?php
                                    echo "$usuario ";
                                ?>
                            </strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">

                                <li><a class="dropdown-item text-white" href="../view/login.php" onclick="salir()"><strong>SALIR</strong></a></li>
                            </ul>
                        </li>

                    </ul>




                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <br>

    <script>
    Swal.fire({
    icon: 'info',
    title: 'ATENCIÓN',
    text: 'ESTIMADO <?php echo "$usuario" ?> FAVOR CAMBIE SU CONTRASEÑA PARA ACCEDER AL SISTEMA',
    })
    // alert("funciona");
</script>




    <div class="container">
        <form id="form_contra">
            <div class="">
                <div class="text-center">
                    <h2>Actualización de Contraseña</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-2" id="centrador_imagen">
                    <img id="imagen_centrada" src="../images/candado.png" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="form-floating mb-3 col-5">
                    <input type="password" name="c01" id="contra01" class="form-control letra_fondo" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                    <label for="contra02" class="letra_fondo">Ingrese Nueva Contraseña</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-floating mb-3 col-5">
                    <input type="password" name="p_nombre" id="contra02" class="form-control letra_fondo" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                    <label for="contra02" class="letra_fondo">Confirme Contraseña</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="mb-3 col-5">
                    <button type="submit"  id="" class="btn btn-dark btn-lg form-control" >Acceder</button>
                </div>
            </div>


        </form>
    </div>
</body>


<!-- Evento agregar actividad -->
<script>
 var form = document.getElementById('form_contra');
 form.addEventListener('submit',function(event){
    event.preventDefault();
    let cedula = "<?php echo $cedula ?>";
    let c01=$('#contra01').val();
    let c02=$('#contra02').val();

    if(c01 == c02){
        // cambio(cedula,c01);
        alert(cedula + ""+c01);
    }else {
        alert("las contraseñas no son iguales");
        document.getElementById('c01').value="";
        document.getElementById('c02').value=""; 
    }
    
 });
</script>
<br><br><br>



</html>