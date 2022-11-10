<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" href="/images/logo02.png">
    <link rel="stylesheet" href="/node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mi_hjo_estilos.css">
    <script src="/node_modules/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <script src="/js/mi_hoja_java.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title></title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <!-- -------------------INICIO DE CONTENEDOR DE MENU--------------- -->
                    <div class="col-auto col-md-3 col-xl-2 px-sm-1 px-0 bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                            <div class="dropdown pb-4 mb-4 mt-3">
                                <a href="" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/perfil.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-2 negrita">Usuario</span>

                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

                                    <li><a class="dropdown-item" href="usuario_perfil.html">Perfil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/Vistas/login.php">Salir</a></li>
                                </ul>
                            </div>
                            <a href="principal.html " class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none mt-5">
                                <span class="fs-5 d-none d-sm-inline negrita"> Menú</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="#organizacion" data-bs-toggle="collapse" class="nav-link align-middle px-0">
                                        <i class="bi bi-window "></i> <span class="ms-1 d-none d-sm-inline">Organización</span>
                                    </a>
                                    <ul class="collapse  nav flex-column ms-1" id="organizacion" data-bs-parent="#organizacion">
                                        <li class="w-100">
                                            <a href="#Personal" data-bs-toggle="collapse" class="nav-link px-0">
                                                <i class="bi bi-person-badge-fill"></i><span class="ms-1 d-none d-sm-inline">Personal</span> </a>
                                            <ul class="collapse  nav flex-column ms-1" id="Personal" data-bs-parent="#personal">
                                                <li class="w-100">
                                                    <a href="/Vistas/personal_registro.php" class="nav-link px-0">
                                                        <i class="bi bi-file-break"></i> <span class="ms-1 d-none d-sm-inline">Registro</span> </a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="/Vistas/personal_cargo.php" class="nav-link px-0"> <i class="bi bi-person-video2"></i>
                                                        <span class="ms-1 d-none d-sm-inline">Cargo</span> </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/Vistas/actividades.php" class="nav-link px-0"> <i class="bi bi-journal-medical"></i>
                                                <span class="ms-1 d-none d-sm-inline">Actividades</span> </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/grupos.php" class="nav-link px-0">
                                                <i class="bi bi-people-fill"></i>
                                                <span class="ms-1 d-none d-sm-inline">Grupos</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="bi bi-book"></i> <span class="ms-1 d-none d-sm-inline">Datos Académicos</span>
                                    </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#clases" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <i class="bi bi-bookmarks-fill"></i>
                                                <span class="ms-1 d-none d-sm-inline">Clases</span>
                                            </a>
                                            <ul class="collapse  nav flex-column ms-1" id="clases" data-bs-parent="#submenu1">
                                                <li class="w-100">
                                                    <a href="/Vistas/bloque.php" class="nav-link px-0">
                                                        <i class="bi bi-calendar-range"></i> <span class="ms-1 d-none d-sm-inline">Registro de Bloques</span> </a>
                                                </li>

                                                <li class="w-100">
                                                    <a href="/Vistas/bloque_clases.php" class="nav-link px-0"> <i class="bi bi-aspect-ratio"></i>
                                                        <span class="ms-1 d-none d-sm-inline">Bloques de Clases</span> </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/Vistas/asignatura.php" class="nav-link px-0">
                                                <i class="bi bi-pencil-square"></i> <span class="ms-1 d-none d-sm-inline">Asignaturas </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/turno.php" class="nav-link px-0">
                                                <i class="bi bi-clock"></i> <span class="ms-1 d-none d-sm-inline">Turnos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/modalidades.php" class="nav-link px-0">
                                                <i class="bi bi-border-width"></i> <span class="ms-1 d-none d-sm-inline">Modalidades</span> </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/grados.php" class="nav-link px-0">
                                                <i class="bi bi-mortarboard"></i>
                                                <span class="ms-1 d-none d-sm-inline">Grados</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/secciones.php" class="nav-link px-0">
                                                <i class="bi bi-tag"></i><span class="ms-1 d-none d-sm-inline">Secciones</span> </a>
                                        </li>
                                        <li>
                                            <a href="/Vistas/dias_clase.php" class="nav-link px-0">
                                                <i class="bi bi-calendar3"></i>
                                                <span class="ms-1 d-none d-sm-inline">Dias de Clases</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/Vistas/reportes.php" class="nav-link px-0 align-middle">
                                        <i class="bi bi-file-earmark-bar-graph"></i> <span class="ms-1 d-none d-sm-inline">Reportes</span></a>
                                </li>


                            </ul>
                            <hr>
                         
                        </div>

                    </div>
                    <!-- -----------------------FIN DE CONTENEDOR DE MENU----------------------- -->