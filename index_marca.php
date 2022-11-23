<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/libreria.js"></script>

    <title>DeMarketSen</title>
</head>
<body>
    <header>
        <div class="logo" align="center">
            <a href="index.php"><img src="img/Logo.jpg"></a>
        </div>
    </header>
    <div class="container mt-4">
        <section>
            <article align="center">
                <a href="pages/view/listarMarcas.php" class="btn btn-outline-success mt-1"><i class="fa-solid fa-list"></i>Listar Marca</a>
                <a href="pages/view/buscarMarcas.php" class="btn btn-outline-success mt-1"><i class="fa-solid fa-magnifying-glass"></i> Consultar Marca</a>
                <a href="pages/view/filtrarMarca.php" class="btn btn-outline-success mt-1"><i class="fa-solid fa-filter"></i> Filtrar Marca</a>
                <hr size="10">
            </article>
        </section>
        <br/>
            <div class="row align-items-center">
                <div class="row mx-5">
                    <!-- Columna 1 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/licuadora.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Licuadora Oster</h5>
                                <p class="card-text">Características destacadas:
                                    <ul>Capacidad (lt): 1.25</ul>
                                    <ul>Número de velocidades: 3</ul>
                                    <ul>Material del recipiente: Vidrio</ul>
                                    <ul>Material de las cuchillas: Acero Inoxidable</ul>
                                </p>  
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <!--Columna 2 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/Arrocera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Arrocera THOMAS</h5>
                                <p class="card-text">Características destacadas:
                                    <ul>Marca: THOMAS</ul>
                                    <ul>Modelo: TH-37 PF</ul>
                                    <ul>Tipo: Arroceras</ul>
                                    <ul>Alto: 30.7</ul>
                                    <ul>Capacidad en litros: 2.8</ul></p>
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Columna 3 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/Waflera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Waflera MINARI</h5>
                                <p class="card-text">Características destacadas:
                                    <ul>Alto: 25</ul>
                                    <ul>Ancho/Diámetro: 12</ul>
                                    <ul>Garantía: 30 Días</ul>
                                    <ul>Largo: 25</ul>
                                    <ul>Peso: 2</ul>
                                </p>
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="7">
            <div class="row">
                <div class="col s12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/promo_desc.jpg" class="d-block w-100 carousel-imagen" alt="banner1">
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/electrodos.jpg" class="d-block w-100 carousel-imagen" alt="banner2">
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/black_friday.jpg" class="d-block w-100 carousel-imagen" alt="banner3">
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>          
            <hr size="7">
            <div class="row align-items-center">
                <div class="row mx-5">          
                    <!-- Columna 4 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/batidora.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Batidora KITCHENAID</h5>
                                <p class="card-text">Características destacadas:
                                    <ul>Con 10 velocidades para casi cualquier tarea</ul>
                                    <ul>El sistema Soft Start ayuda a evitar las salpicaduras</ul>
                                    <ul>Diseño de cabeza inclinable</ul>
                                    <ul>Con un tazón de acero inoxidable</ul></p>
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <!--Columna 5 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/cafetera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cafetera OSTER</h5>
                                <p class="card-text">Caracteristicas destacadas:
                                    <ul>La función de pausa para servir le permite servir café durante el proceso de colado.</ul>
                                    <ul>Reloj digital.</ul>
                                    <ul>La canasta removible facilita su llenado y limpieza.</ul>
                                    <ul>De uso fácil</ul>
                                </p>
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Columna 6 --->
                    <div class="col nl-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/extractor.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Extractor BOSCH</h5>
                                <p class="card-text">Características destacadas:
                                    <ul>Marca: Bosch</ul>
                                    <ul>Modelo: MES3500</ul>
                                    <ul>Tipo: Extractor de jugos</ul>
                                    <ul>Capacidad (lt): 1.25</ul>
                                    <ul>Número de velocidades: 2</ul>
                                    <ul>No incluye jarra</ul>
                                </p>
                                <a href="#" class="btn btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <footer>
            <p>A cerca de nosotros</p>
            <p><a href="Ubicanos.php">Ubícanos</a></p>
            <p><a href="Nosotros.php">Nosotros</a></p>           
            <p>DeMarketSen© 2022. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>
