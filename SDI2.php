<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: indexEm.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link rel="stylesheet" href="estilos/estilo1.css">
    <link rel="icon" href="productos_ima/productos/1/logocompa.jpg">
</head>

<body>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <!-- <li><a href="indexEm.html">ACERCA DE</a> -->

                </li>
                <!-- <li><a href="#">ADMINISTRADOR</a> -->
                <ul class="usu">
                    <!-- <li><a href="empresa.html">Manejo de Empresa</a></li> -->
                </ul>
                </li>

                <!-- <li><a href="#">PRODUCTOS</a> -->
                <ul class="usu">
                </ul>
                </li>
            </ul>
            </li>
            </ul>
        </nav>
    </header>
    <main>
        <nav class="consulta">
            <div class="contenedor_todo">
                <div class="caja_trasera">
                    <div class="caja_trasera_login">

                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar a la página</p>
                        <button id="btn_iniciar-sesion">Iniciar sesión</button>
                    </div>
                    <div class="caja_trasera_register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesión</p>
                        <button id="btn_registrarse">Registrarse</button>
                    </div>
                </div>
                <div class="contenedor_login_register">
                    <form action="php/login_usuario.php" method="POST" class="formulario_login">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                        <button class="btn_inicio">Entrar</button></a>
                        <a href="">¿Has olvidado tu contraseña?</a>
                    </form>
                    <form action="php/registro_usuario.php" method="POST" class="formulario_register" id="form">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="Nombre_Completo">
                        <input type="email" placeholder="Correo Electronico" name="Correo">
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <input type="password" placeholder="Contraseña" name="Contraseña">
                        <button>Registrarse</button>
                        <p class="warnings" id="warnings"></p>
                    </form>
                </div>
            </div>
        </nav>
    </main>

    <script src="script.js"></script>
    <!-- <script src="vali.js"></script> -->

</body>

</html>