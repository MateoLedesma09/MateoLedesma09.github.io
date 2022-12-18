<?php

session_start();

if (!isset($_SESSION['usu'])) {
    echo '
            <script>
                alert("Debes iniciar sesión para ingresar");
                window.location = "SDI2.php";
            </script>     
        ';

    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Compañia</title>
    <script src="https://kit.fontawesome.com/7f21670506.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/style.css" />
    <link rel="icon" href="productos_ima/productos/1/logocompa.jpg">

</head>

<body>
    <header>
        <div class="header_superior">
            <div class="logo">

                <img src="productos_ima/productos/1/logocompa.jpg">

            </div>
        </div>

        <div class="container_menu">
            <div class="menu">
                <input type="checkbox" id="check_menu">
                <label id="#label_check" for="check_menu">
                    <i class="fa-solid fa-bars icon_menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a href="#">Contactos</a>
                        <li><a href="#">Categorías</a>
                            <ul>
                                <li><a href="productos.php">Variedad</a></li>
                                <li><a href="tecno.html">Hogar</a></li>
                                <!-- <li><a href="#">Deportes</a></li> -->
                                <!-- <li><a href="#">Hogar</a></li> -->
                            </ul>

                        </li>
                        <li><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

    <main>
        <article>
            <h2>Planteamiento del problema</h2>
            <p>En la ciudad de Cartagena existen muchas PYMES (pequeña y mediana empresa) que no cuentan con un sistema
                de base de datos que les permita llevar un sistema de contabilidad o de inventario óptimo de productos y
                de dinero activo que entra y sale del negocio, por lo tanto, causa que haya deficiencia en el manejo de
                caja y de inventario causando perdidas para toda la micro empresa haciendo que la empresa no trabaje de
                manera adecuada y eficiente.</p>
            <p>En Cartagena hay PYMES donde no tienen este sistema lo cual ocasiona un desorden laboral, llevando tener
                demasiadas perdidas que terminan con el cierre del negocio, ya que como ya antes mencionado, El Sistema
                de Base de Datos evita que muchas empresas a nivel nacional tengan problemas de manejo de información
                importante sobre lo que entra y sale de su empresa, ya sea dinero o productos.</p>
        </article>

        <article>
            <h2>Justificación</h2>
            <p>Un sistema de gestión empresarial que ayude a mejorar u organizar los datos de diferentes miembros de la
                empresa. Esta base de datos se necesita porque en Cartagena las pymes más del 50% no tienen
                implementadas bases de datos, también evita la redundancia y mejora la organización de nuestros eventos.
                Visualice datos de clientes o clientes potenciales: interacciones, ventas, detalles de contacto. Vincule
                los datos de actividad, pago e interacción con cada cliente o prospecto.</p>
            <p>Las organizaciones obtienen diferentes beneficios si la base de datos se gestiona correctamente.
                Aumentará su eficiencia, al simplificar el trabajo, será más rápido y eficiente, podremos aumentar la
                seguridad de los datos que almacenamos, y teniendo en cuenta todos los factores esto, maximizaremos el
                tiempo, por lo que la eficiencia incrementará.</p>
            <p>Estas oportunidades generarán valor agregado para las pymes, ya que con una base de datos debidamente
                construida haremos de la información y el conocimiento el mayor activo de la empresa, podremos
                aprovechar al máximo las habilidades de nuestros colaboradores y encontrar datos sobre nuestro
                potencial.
                Finalmente, porque la información es poder, cuantos más datos tengamos, más competitiva será la empresa.
            </p>
        </article>
    </main>
    <footer>
        <div class="box_footer">
            <h2>Redes Sociales</h2>
            <a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a>
            <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
        </div>
        </div>
        <div class="box_copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>MateoLedesma</b></p>
        </div>
    </footer>

</body>

</html>