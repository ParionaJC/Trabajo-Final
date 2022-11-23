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
	<title>Registrar Marcas</title>
</head>
<body>

	<?php
    include '../include/cargarClase.php';
	?>


        <header>
            <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr">  
            <h1 class="texto"><i class="fa-solid fa-bookmark"></i> Registrar Marcas</h1>
            </div>
        </header>
    <div class="container mt-4">
        <nav>
        <a href="listarMarcas.php" class="btn btn-outline-success">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        </nav>

        <section>
            <article>
            <div class="row mt-2">
                <div class="col-md-6 col-lg-4 mx-auto mt-sm-2 mt-lg-0">
                    <form name="form-reg-marca" id="form-reg-marca" action="../controller/grabar.php" method="post">
                    <input type="hidden" name="txtTipo" id="txtTipo" value="insertar">    
                    <div class="mb-3">
                            <label for="txtCodigoM" class="form-label">Código de Marca</label>
                            <input type="text" class="form-control shadow-none txtCodigo" name="txtCodigoM" id="txtCodigoM" maxlength="5" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="txtMarca" class="form-label">Marca</label>
                            <input type="text" class="form-control shadow-none" name="txtMarca" id="txtMarca">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success shadow-none" name="btn-registrar-marca" id="btn-registrar-marca"><i class="fa-solid fa-check"></i> Registrar</button>
                            <button type="reset" class="btn btn-outline-danger shadow-none"><i class="fa-solid fa-rotate-left"></i> Nuevo Registro</button>
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