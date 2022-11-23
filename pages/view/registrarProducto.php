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
	<title>Registrar Productos</title>
</head>
<body>

	<?php
    include '../include/cargarClase.php';
    $marca = new Marca();
    $categoria = new Categoria();
	?>


        <header>
            <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr"> 
            <h1 class="texto"><i class="fa-solid fa-bookmark"></i> Registrar Productos</h1>
            </div>
        </header>
    <div class="container mt-4">
        <nav>
        <a href="listarProductos.php" class="btn btn-outline-success">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        </nav>

        <section>
            <article>
            <div class="row mt-2">
                <div class="col-md-6 col-lg-4 mx-auto mt-sm-2 mt-lg-0">
                    <form name="form-reg-producto" id="form-reg-producto" action="../controller/grabar.php" method="post">
                    <input type="hidden" name="txtTipo" id="txtTipo" value="insert">    
                    <div class="mb-3">
                            <label for="txtCodigo" class="form-label">Código de Producto</label>
                            <input type="text" class="form-control shadow-none txtCodigo" name="txtCodigo" id="txtCodigo" maxlength="5" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="txtProducto" class="form-label">Producto</label>
                            <input type="text" class="form-control shadow-none" name="txtProducto" id="txtProducto">
                        </div>
                        <div class="mb-3">
                            <label for="txtStock" class="form-label">Stock Disponible</label>
                            <input type="number" class="form-control shadow-none" name="txtStock" id="txtStock" min="1" max="1000">
                        </div>
                        <div class="mb-3">
                            <label for="txtCosto" class="form-label">Costo</label>
                            <input type="text" class="form-control shadow-none" name="txtCosto" id="txtCosto">
                        </div>
                        <div class="mb-3">
                            <label for="txtGanancia" class="form-label">Ganancia</label>
                            <input type="text" class="form-control shadow-none" name="txtGanancia" id="txtGanancia">
                        </div>
                        <div class="mb-3">
                            <label for="txtCodMarca" class="form-label">Marca</label>
                            <select class="form-select shadow-none" name="txtCodMarca" id="txtCodMarca">
                                <option value="" selected disabled>- Seleccionar Marca -</option>
                                <?php
                                    foreach($marca->ListarMarcas() as $marca){ ?>
                                        <option value="<?=$marca->codigo_marca;?>"><?=$marca->marca;?></option>
                                <?php 
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="txtCodCat" class="form-label">Categoria</label>
                            <select class="form-select shadow-none" name="txtCodCat" id="txtCodCat">
                                <option value="" selected disabled>- Seleccionar Categoria -</option>
                                <?php
                                    foreach($categoria->ListarCategoria() as $categoria){ ?>
                                        <option value="<?=$categoria->codigo_categoria;?>"><?=$categoria->categoria;?></option>
                                <?php 
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success shadow-none" name="btn-registrar" id="btn-registrar"><i class="fa-solid fa-check"></i> Registrar</button>
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