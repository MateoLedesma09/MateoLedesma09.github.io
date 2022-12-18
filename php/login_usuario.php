<?php

session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$validar_login = mysqli_query($conexion, "SELECT * FROM usu WHERE correo='$correo' and contraseña='$contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usu'] = $correo;
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
}