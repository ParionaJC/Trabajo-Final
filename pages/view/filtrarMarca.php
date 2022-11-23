<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../css/bootstrap/js/bootstrap.js"></script>
    <script src="../../js/libreria.js"></script>
	<title>Filtrar Marcas</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr"> 
            <h1 class="texto"><i class="fa-solid fa-filter"></i> Filtrar Marcas</h1>
        </div>
    </header>
    <div class="container mt-4">
        <nav>
        <a href="listarMarcas.php" class="btn btn-outline-primary">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        </nav>

        <section>
            <article>
            <div class="row mt-2">
                <div class="col-md-6 col-lg-4 mx-auto mt-sm-2 mt-lg-0">
                    <form name="form-filtrar-marca" id="form-filtrar-marca" method="post">
                        <div>
                            <label for="txtValorM" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="txtValorM" id="txtValorM" maxlength="50" />                             
                        </div>
                        <br/>
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-success shadow-none" name="btn-filtrar-m" id="btn-filtrar-m"><i class="fa-solid fa-check"></i> Filtrar</button>
                            <a href="filtrarMarca.php" class="btn btn-outline-success shadow-none"><i class="fa-solid fa-rotate-left"></i> Nuevo </a>
                        </div>
                    </form>
                </div>
            </div>   
            </article>
        </section>
	</div>
    <br/>
        <section>
            <article>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div id="tabla-marca"></div>
                    </div>
                </div>
            </article>
        </section>
    <br/>
        <footer>
            <p>A cerca de nosotros</p>
            <p><a href="Ubicanos.php">Ubícanos</a></p>
            <p><a href="Nosotros.php">Nosotros</a></p>           
            <p>DeMarketSen© 2022. Todos los derechos reservados.</p>
        </footer>
</body>
</html>					