<?php

session_start();
include 'conexion_be.php';

$Nombre_Completo = $_POST['Nombre_Completo'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];

//Encriptar la contraseña
$Contraseña = hash('sha512', $Contraseña);

//$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' and contraseña='$contraseña'");
$query = "INSERT INTO usu(Nombre_Completo, Usuario, Contraseña, Correo) 
        VALUES('$Nombre_Completo', '$Usuario', '$Contraseña', '$Correo')";


//Validación de datos para ingresar
/*if (mysqli_num_rows($validar_datos) > 0) {
    $_SESSION['usuario'] = $Correo;
    header("location: ../indexEm.php");
    exit;
} else {
    echo '
        <script>
            alert("¡UPS! hay un error, por favor verifique los datos introducidos");
            window.location = "../SDI2.php";
        </script>
    
    ';
    exit;
}*/

//verificacion de repeticion de datos en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usu WHERE correo= '$Correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo ' 
        <script>
            alert("Este correo está en uso, intenta con uno distinto");
            window.location = "../SDI2.php";
        </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usu WHERE usuario = '$Usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo ' 
        <script>
            alert("Este usuario está en uso, intenta con uno distinto");
            window.location = "../SDI2.php";
        </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
    echo '
        <script>  
            alert("Usuario registrado exitosamente");
            window.location = "../SDI2.php";
        </script>
    ';
} else {
    echo '
    <script>  
        alert("Intentalo nuevamente, usuario no almacenado");
        window.location = "../SDI2.php";
    </script>
';
}

mysqli_close($conexion);