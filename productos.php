<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="estilos/estilo.css" rel="stylesheet">
    <link rel="icon" href="productos_ima/productos/1/logocompa.jpg">
    <script src="tecno.js"></script>

    <style>
    .btn-group a {
        margin-inline: 15px;
        border-radius: 20px;
    }

    .search input {
        width: 400px;
        padding: 10px;
        margin-top: 10px;
        margin-right: 50px;
    }
    </style>

<body>

    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <strong>Tienda</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="indexEm.php" class="nav-link active">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                    <div class="search">
                        <input type="search" placeholder="¿Qué deseas buscar?">
                        <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button>
                    </div>
                    <div class="btn-group">

                    </div>
                </div>
            </div>
        </div>
    </header>



    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/audifonos.webp" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Audifonos inalambricos.</h5>
                            <p class="card-text">$82.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Audifonos inalambricos ', 82.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/telefono samsung.webp" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Teléfono Samsung A30.</h5>
                            <p class="card-text">$790.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Teléfono Samsung A30', 790.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/navidad1.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Noel para mesas.</h5>
                            <p class="card-text">$100.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Noel para mesas', 100.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/camara.webp" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Camara semi-profesional.</h5>
                            <p class="card-text">$830.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Camara semi-profesional', 830.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/muñeco1.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Muñeco para puerta.</h5>
                            <p class="card-text">$60.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Muñeco para puerta', 60.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/peluchemesa.jpeg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Peluche para mesa.</h5>
                            <p class="card-text">$80.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Peluche para mesa', 80.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="productos_ima/productos/1/balon de furbol.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Balon de futbol.</h5>
                            <p class="card-text">$90.000</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>


                                </div>
                                <button class="btn btn-success"
                                    onclick="add('Balon de futbol', 90.000)">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>