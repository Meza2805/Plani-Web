<?php
    session_start();
    $usuario = $_SESSION['username'];
    $rol = $_SESSION['c'];
     if(!isset($usuario))
     {
         header("location: ../view/login.php");
     }

     if ($rol== "DOCENTE")
     {
       
     }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- referencia a hoja de estilos principal ubicada localmente -->
    <link rel="stylesheet" href="../node_modules/bootstrap-5.2.2-dist/css/estilos_principales.css">
    <!-- <link rel="stylesheet" href="../css/footer_estatico.css"> -->

    <!-- referencia a hoja de estilos de iconos de boostrap ubicacada localmente -->
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

  
   
    <!-- Referencia a hoja de las principales funciones Javscript -->
    <script src="../js/funciones.js"></script>
    <script src="../css/jquery-3.6.1.min.js"></script>
    <script src="../js/mi_hoja_java.js"></script>
    <script src="../node_modules/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>

         <!--Libreria de Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title></title>
</head>

<body class="cuerpo">
    
    <!-- MENU -->
    <header>
        <nav class="navbar navbar-expand-lg fondo navbar-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../view/index_usser.php"><img src="/images/logo02.png" class="logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-filter-square"></i> <strong>ASIGNACIONES</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../view/actividades_docente.php">  <strong>ACTIVIDADES</strong></a></li>
                                    <hr>
                                <li><a class="dropdown-item text-white" href="../view/asignatura_docente.php">  <strong>ASIGNATURAS</strong></a></li>
                                    <hr>
                                <li><a class="dropdown-item text-white" href="../view/grupos_clases_docentes.php"><strong>GRUPOS DE CLASES</strong></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>  <strong>
                                <?php
                                    echo "$usuario ";
                                ?>
                                </strong> 
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../view/usuario_perfil.php"><strong>PERFIL</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white"  href="#" onclick="salir()"><strong>SALIR</strong></a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN DE MENU -->

 <script>
    function salir(){
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

    location.href="../includes/salir.php";
  }
})
    }
</script>

    <main class="container p-5 mt-5">