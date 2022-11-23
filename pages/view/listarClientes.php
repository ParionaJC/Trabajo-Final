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
    $cliente = new Cliente();
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
        <a href="registrarCliente.php" class="btn btn-outline-success">
            <i class="fa-solid fa-file"></i>
            Registrar Cliente
        </a>
    </nav>

    <section>
        <article>
            <div class="row mt-2">
                <div class="col-md-6" align="center">
                    <table class="table table-striped text-center">
                        <thead class="table table-dark">
                            <th>N°</th>
                            <th>Código</th>
                            <th>Cliente</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tipo de Documento</th>
                            <th>Número de Documento</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Sexo</th>
                            <th>Dirección</th>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;

                                foreach($cliente->ListarClientes() as $dato){
                                    $i++;
                            ?>
                                <tr>
                                    <td class="w-25"><?=$i ?></td>
                                    <td class="w-25"><?=$dato->codigo_cliente ?></td>
                                    <td class="w-25"><?=$dato->nombre ?></td>
                                    <td class="w-25"><?=$dato->apellido_Pa ?></td>
                                    <td class="w-25"><?=$dato->apellido_Ma ?></td>
                                    <td class="w-25"><?=$dato->tipo_documento ?></td>
                                    <td class="w-25"><?=$dato->numero_documento ?></td>
                                    <td class="w-25"><?=$dato->email ?></td>
                                    <td class="w-25"><?=$dato->telefono ?></td>
                                    <td class="w-25"><?=$dato->sexo ?></td>
                                    <td class="w-25"><?=$dato->direccion ?></td>                                                                        
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