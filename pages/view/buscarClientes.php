<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../../css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
	 <script src="../../js/jquery-3.6.0.js"></script>
	 <script src="../../js/libreria.js"></script>
	<title>Consultar Clientes</title>
</head>
<body>

    	<header>            
            <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr"> 
            <h1 class="texto"><i class="fa-solid fa-magnifying-glass"></i> Consultar Clientes</h1>
            </div> 
    	</header>
    <div class="container mt-4">
    	<nav>
 
        <a href="../../index.php" class="btn btn-outline-primary">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
    	</nav>

    	<section>
        	<article>
            <div class="row mt-2">
                <div class="col-md-6 col-lg-4 mx-auto mt-sm-2 mt-lg-0">
                    <form name="form-buscar-clie" id="form-buscar-clie" method="post">
                        <div class="mb-3">
                            <label for="txtCodigoClie" class="form-label">Código de Cliente</label>
                            <input type="text" class="form-control shadow-none txtCodigoClie" id="txtCodigoClie" name="txtCodigoClie" maxlength="5" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="txtCliente" class="form-label">Cliente</label>
                            <input type="text" class="form-control shadow-none txtCliente" id="txtCliente" name="txtCliente" readonly>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-dark shadow-none" id="btn-buscar-cli"><i class="far fa-file"></i> Consultar</button>
                            <button type="reset" class="btn btn-outline-dark shadow-none" id="btn-nueva-busqueda"><i class="fa-solid fa-rotate-left"></i> Nueva Busqueda</button>
                        </div>
                    </form>
                </div>
            </div>   
        	</article>
    	</section>
	</div>
    <br/>
        <footer>
            <p>A cerca de nosotros</p>
            <p><a href="Ubicanos.php">Ubícanos</a></p>
            <p><a href="Nosotros.php">Nosotros</a></p>           
            <p>DeMarketSen© 2022. Todos los derechos reservados.</p>
        </footer> 
</body>
</html>			