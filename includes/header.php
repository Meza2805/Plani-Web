<?php
    // Codigo php para establecer la sesion y caputar las variables de usuario, cargo y cedula
    
    session_start();
    $nombre = $_SESSION['nombre'];
    $cargo = $_SESSION['cargo'];
    $cedula = $_SESSION['cedula'];
     if(!isset($nombre))
     {
         header("location: ../index.php");
     }
    
    
    // session_start();
    // if (isset($_GET["var01"]) && isset($_GET["var02"])) //se reciben las variables de la funcion de Javascript
    // {
    //     // asignar w1 y w2 a dos variables
    //     $usuario = $_GET["var01"];
    //     $cargo = $_GET["var02"];
    //     $cedula = $_GET["var03"]; 
    // } else {
    //     header("location: ../index.php");
    // }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <!-- referencia a hoja de estilos principal ubicada localmente -->
    <link rel="stylesheet" href="../css/mis_estilos.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- <link rel="stylesheet" href="../css/footer_estatico.css"> -->

    <!-- referencia a hoja de estilos de iconos de boostrap ubicacada localmente -->
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Referencia a hoja de las principales funciones Javscript -->
    <script src="../js/funciones.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/mi_hoja_java.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

         <!--Libreria de Sweet Alert -->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">

    <title></title>
</head>

<body class="cuerpo"> 
   <!-- MENU -->
    <header>
        <nav class="navbar navbar-expand-lg fondo navbar-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../view/index.php"><img src="/images/logo02.png" class="logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-badge-fill"></i>  <strong>Personal</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../personal_registro.php">  <strong>REGISTRO</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../personal_cargo.php"><strong>CARGO</strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-book"></i>  <strong> Datos Académicos</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-1">
                          
                                <li><a class="dropdown-item text-white" href="../modalidades.php"><strong>MODALIDADES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../asignatura.php">  <strong>ASIGNATURAS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../asignatura_modalidades.php">  <strong>ASIGNATURAS Y MODALIDADES</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-filter-square"></i> <strong> Organización</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../actividades.php">  <strong>ACTIVIDADES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../grupos.php"><strong>GRUPOS DE CLASES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../turno.php"><strong>TURNOS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../grados.php"><strong>GRADOS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../secciones.php"><strong>SECCIONES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../dias_clases.php"><strong>DIAS DE CLASES</strong></a></li>
                            </ul>
                        </li>

                 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-aspect-ratio"></i>  <strong> BLOQUES</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../bloque.php">  <strong>REGISTROS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../bloque_clases.php"><strong>BLOQUES CLASES</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-1 text-uppercase text-white" href="../reportes.php"> <i class="bi bi-file-break-fill"></i><strong> Reportes</strong> </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> 

                                <!-- Codio PHP para hacer referencia al usuario logueado -->
                                <strong>
                                <?php
                                    echo "$nombre ";
                                ?>
                                </strong> 
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../view/usuario_perfil.php"> <i class="bi bi-gear"></i> <strong>ADMIN USUARIOS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="#" onclick="salir()"><strong>SALIR</strong></a></li>
                            </ul>
                        </li>

                    </ul>



 
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN DE MENU -->


<!-- Modal de pregunta para consulta salir -->
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
    location.href="../includes/salir.php";}
})}
</script>



<main class="container p-5 mt-5">
        