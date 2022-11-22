
<?php
    // se establece la conexio para el archivo de conexion
      require'../includes/conexion.php';
        session_start(); //Inicio de sesion
     if (isset ($_POST['acceder']))
     {
    //    echo "Presiono el boton";
         if(empty($_POST['usuario']) ||  empty($_POST['contra']))
         {
            echo "<script language='JavaScript'>
            alert('El nombre o contraseña estan vacios')
            location.assign('../login.php')
            </script>";
         }
         else
         {
          
            $usuario = $_POST['usuario'];
            $contra = $_POST['contra'];
            $sql = "call SP_Login('$usuario','$contra')";
            $resultado = mysqli_query($conexion,$sql);
            $row = mysqli_fetch_assoc($resultado);
            $salida= $row["MENSAJE"];
            $nombre = $row["NOMBRE"];
            $cargo = $row["CARGO"];
            $cedula = $row["CEDULA"];

          

            $_SESSION['CI']= false;
            $_SESSION['NE']= false;
            // Cerrando la conexion a la base de datos
            mysqli_close($conexion);
            if($salida == "ACCESO EXITOSO")
            {
                $_SESSION['username']=$nombre;
                $_SESSION['c']= $cargo;
                $_SESSION['cedula']= $cedula;
                if($cargo=='DOCENTE')
                {
                    echo "<script language='JavaScript'>
                    location.assign('../view/index_usser.php')
                    </script>"; 

                    // echo "<script language='JavaScript'>
                    // alert('BIENVENIDO $nombre   ROL: $cargo')
                    // location.assign('../view/index_usser.php')
                    // </script>"; 
                }
                else
                {
                   
                    echo "<script language='JavaScript'>
                    location.assign('../view/index.php')
                    </script>"; 
                }


            }
            else if ($salida == "CONTRASEÑA INCORRECTA")
            {
                echo "<script language='JavaScript'>
                alert('CONTRASEÑA INCORRECTA')
                location.assign('../view/login.php')
                </script>"; 


                // echo "<script language='JavaScript'>
                // location.assign('../view/login.php')
                // </script>"; 

                // $_SESSION['CI']= true;
            }
            else
            {
                echo "<script language='JavaScript'>
                alert('EL USUARIO NO EXISTE')
                location.assign('../view/login.php')
                </script>"; 

                // echo "<script language='JavaScript'>
                // location.assign('../view/login.php')
                // </script>"; 
                // $_SESSION['NE']= true;
            }
         }
     }
     else{
        include '../view/login.php';
     }
?>


