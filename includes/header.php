
    <?php
    // Codigo php para establecer la sesion y caputar las variables de usuario, cargo y cedula
    $sesion =  session_start();
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
    <link rel="shortcut icon" href="images/educacion.png">
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

    <!-- Libreria de Animate.css -->
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">

</head>

<body class="cuerpo"> 
   <!-- MENU -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top fondo_degradado_azul">
            <div class="container">
                <a class="navbar-brand" href="../principal.php"><img src="/images/logo02.png" class="logo" alt=""></a>
               
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto"  style="font-size: large">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-2 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-badge-fill"></i>  
                              <strong>Personal</strong>
                            </a>
                            <ul class="dropdown-menu mx-2">
                                <li><a class="dropdown-item text-white" href="../personal_registro.php">  <strong>Registro</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../personal_cargo.php"><strong>Cargo</strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-2 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-book"></i>  <strong> Datos Académicos</strong>
                            </a>
                            <ul class="dropdown-menu  mx-1">
                          
                                <li><a class="dropdown-item text-white" href="../modalidades.php"><strong>Modalidades</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../asignatura.php">  <strong>Asignaturas</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../asignatura_modalidades.php">  <strong>Asignaturas y Modalidades</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-2 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-filter-square"></i> <strong> Organización</strong>
                            </a>
                            <ul class="dropdown-menu mx-2">
                                <li><a class="dropdown-item text-white" href="../actividades.php">  <strong>Actividades</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../grupos.php"><strong>Grupo de Clases</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../turno.php"><strong>Turnos</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../grados.php"><strong>Grados</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../secciones.php"><strong>Secciones</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../dias_clases.php"><strong>Dias de clases</strong></a></li>
                            </ul>
                        </li>

                 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-2 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-aspect-ratio"></i>  <strong> Bloques</strong>
                            </a>
                            <ul class="dropdown-menu  mx-2">
                                <li><a class="dropdown-item text-white" href="../bloque.php">  <strong>Registro</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="../bloque_clases.php"><strong>Bloque de Clases</strong></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-1 text-white" href="../reportes.php"> <i class="bi bi-file-break-fill"></i><strong> Reportes</strong> </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-2 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> 

                                <!-- Codio PHP para hacer referencia al usuario logueado -->
                                <strong>
                                <?php
                                    echo "$nombre";
                                ?>
                                </strong> 
                            </a>
                            <ul class="dropdown-menu mx-4">
                                <li><a class="dropdown-item text-white" href="../view/usuario_perfil.php"> <i class="bi bi-gear"></i> <strong>Admin Usuarios</strong></a></li>
                                <hr>
                                <li><a class="dropdown-item text-white" href="#" onclick="salir()"><strong>Salir</strong></a></li>
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

<style>


</style>
        