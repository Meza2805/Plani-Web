<?php
    session_start();
    $usuario = $_SESSION['username'];
    $rol = $_SESSION['c'];
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
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/estilos_secundarios.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="../css/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="../css/alertifyjs/css/themes/default.css">
        
 

    <script src="../css/jquery-3.6.1.min.js"></script>
    <script src="../css/alertifyjs/alertify.js"></script>

    <script src="../node_modules/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <script src="../js/mi_hoja_java.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Libreria de Sweet Alert -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




        <!-- link para las tablas  INICIO -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
     <script src="../js/api_tabla.js"></script>
     <script src="../js/funciones.js"></script>
     <!-- <script src="../js/busqueda_personal.js"></script> -->
    <!-- link para las tablas  FIN -->


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
                                <li><a class="dropdown-item text-white" href="../view/personal_registro.php">  <strong>REGISTRO</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/personal_cargo.php"><strong>CARGO</strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-book"></i>  <strong> Datos Académicos</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-1">
                                <li><a class="dropdown-item text-white" href="../view/asignatura.php">  <strong>ASIGNATURAS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/modalidades.php"><strong>MODALIDADES</strong></a></li>
                            
                               
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-filter-square"></i> <strong> Organización</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../view/actividades.php">  <strong>ACTIVIDADES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/grupos.php"><strong>GRUPOS DE CLASES</strong></a></li>
                                <li><a class="dropdown-item text-white" href="../view/turno.php"><strong>TURNOS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/grados.php"><strong>GRADOS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/secciones.php"><strong>SECCIONES</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/dias_clases.php"><strong>DIAS DE CLASES</strong></a></li>
                            </ul>
                        </li>

                 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-1 text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-aspect-ratio"></i>  <strong> BLOQUES</strong>
                            </a>
                            <ul class="dropdown-menu fondo mx-4">
                                <li><a class="dropdown-item text-white" href="../view/bloque.php">  <strong>REGISTROS</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../view/bloque_clases.php"><strong>BLOQUES CLASES</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-1 text-uppercase text-white" href="../view/reportes.php"> <i class="bi bi-file-break-fill"></i><strong> Reportes</strong> </a>
                        </li>
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
                                <li><a class="dropdown-item text-white" href="../view/usuario_perfil.php"><strong>PERFIL</strong></a></li>
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
        