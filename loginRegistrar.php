<?php
    include("conexion.php");

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    //Validar ingreso al login//
    if (isset($_POST["btnIngresar"])) {
        
        $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave'");
        $nr = mysqli_num_rows($query);

        if ($nr==1) {
            
            echo"<script> alert('Hola $usuario');window.location='index.html'</script>";
        }else {
            
            echo"<script> alert('No tiene permiso para ingresar');window.location='login1.html'</script>";
        }
    }

    //Registro de usuarios//
    if (isset($_POST["btnRegistrar"])) {
        
        $sqlGrabar = "INSERT INTO usuarios(usuario,clave) VALUES ('$usuario','$clave')";

        if (mysqli_query($conn, $sqlGrabar)) {
            
            echo "<script> alert('Usuario $usuario registrado con exito'); window.location='login.html'</script>";
        }else {
            
            echo"Error: no se puede guardar sus datos";
        }
    }
?>