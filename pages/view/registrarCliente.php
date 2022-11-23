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
	<title>Registrar Clientes</title>
</head>
<body>

	<?php
    include '../include/cargarClase.php';
	?>


        <header>
            <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr">  
            <h1 class="texto"><i class="fa-solid fa-bookmark"></i> Registrar Categoria</h1>
            </div>
        </header>
    <div class="container mt-4">
        <nav>
        <a href="listarClientes.php" class="btn btn-outline-success">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        </nav>

            <section>
            <article>
            <div class="row mt-2">
                <div class="col-md-6 col-lg-4 mx-auto mt-sm-2 mt-lg-0">
                    <form name="form-reg-cliente" id="form-reg-cliente" action="../controller/grabar.php" method="post">
                    <input type="hidden" name="txtTipo" id="txtTipo" value="insert">    
                    <div class="mb-3">
                            <label for="txtCodigoCli" class="form-label">Código de Cliente</label>
                            <input type="text" class="form-control shadow-none txtCodigoCli" name="txtCodigoCli" id="txtCodigoCli" maxlength="5" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control shadow-none" name="txtNombre" id="txtNombre">
                        </div>
                        <div class="mb-3">
                            <label for="txtApepa" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control shadow-none" name="txtApepa" id="txtApepa">
                        </div>
                        <div class="mb-3">
                            <label for="txtApema" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control shadow-none" name="txtApema" id="txtApema">
                        </div>
                        <div class="mb-3">
                            <label for="txttido" class="form-label">Tipo de Documento</label>
                            <input type="text" class="form-control shadow-none" name="txttido" id="txttido">
                        </div>
                        <div class="mb-3">
                            <label for="txtnumdo" class="form-label">Numero de Documento</label>
                            <input type="number" class="form-control shadow-none" name="txtnumdo" id="txtnumdo">
                        </div>
                        <div class="mb-3">
                            <label for="txtGanancia" class="form-label">Email</label>
                            <input type="text" class="form-control shadow-none" name="txtemail" id="txtemail">
                        </div>
                        <div class="mb-3">
                            <label for="txttele" class="form-label">Telefono</label>
                            <input type="number" class="form-control shadow-none" name="txttele" id="txttele">
                        </div>
                        <div class="mb-3">
                            <label for="txtsexo" class="form-label">Sexo</label>
                            <input type="text" class="form-control shadow-none" name="txtsexo" id="txtsexo">
                        </div>
                        <div class="mb-3">
                            <label for="txdire" class="form-label">Dirección</label>
                            <input type="text" class="form-control shadow-none" name="txtdire" id="txtdire">
                        </div>                                                
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success shadow-none" name="btn-registrar-cli" id="btn-registrar-cli"><i class="fa-solid fa-check"></i> Registrar</button>
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