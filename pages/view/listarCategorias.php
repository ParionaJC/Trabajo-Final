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
	<title>Lista de Categorias</title>
</head>
<body>
	<?php
    include '../include/cargarClase.php';
    $categoria = new Categoria();
	?>


    <header>
            <div class="logo">
                <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
                <hr size="7" class="hr">  
                <h1 class="texto"><i class="fa-solid fa-list"></i> Lista de Marcas</h1>
            </div>
    </header>
    <div class="container mt-4">
    <nav>
        <a href="../../index.php" class="btn btn-outline-primary">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        <a href="registrarCategoria.php" class="btn btn-outline-success">
            <i class="fa-solid fa-file"></i>
            Registrar Categoria
        </a>
    </nav>

    <section>
        <article>
            <div class="row mt-2">
                <div class="col-md-6 mx-auto">
                    <table class="table table-striped text-center">
                        <thead class="table table-dark">
                            <th>N°</th>
                            <th>Código</th>
                            <th>Categorias</th>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;

                                foreach($categoria->ListarCategoria() as $dato){
                                    $i++;
                            ?>
                                <tr>
                                    <td class="w-25"><?=$i ?></td>
                                    <td class="w-25"><?=$dato->codigo_categoria ?></td>
                                    <td class="w-25"><?=$dato->categoria ?></td>
                                </tr>
                            <?php 
                                } 
                            ?>
                        </tbody>
                    </table>
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