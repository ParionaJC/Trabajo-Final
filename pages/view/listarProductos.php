<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <script src="../../js/jquery-3.6.0.js"></script>
     <script src="../../css/bootstrap/js/bootstrap.js"></script>
     <script src="../../js/libreria.js"></script>
	<title>Document</title>
</head>
<body>
	<?php
    include '../include/cargarClase.php';
    $producto = new Producto();
	?>


    <header>
        <div class="logo">
            <a href="../../index.php"><img src="../../img/Logo.jpg"></a>
            <hr size="7" class="hr">  
            <h1 class="texto"><i class="fa-solid fa-list"></i> Lista de Productos</h1>            
        </div>
    </header>
    <div class="container mt-4">
    <nav>
        <a href="../../index.php" class="btn btn-outline-primary">
            <i class="fa-solid fa-arrow-left-long"></i> 
            Regresar
        </a>
        <a href="registrarProducto.php" class="btn btn-outline-success">
            <i class="fa-solid fa-file"></i>
            Registrar Producto
        </a>
    </nav>
	</div>
	<div class="container-fluid px-1 px-sm-1 ">
    <section>
        <article>
            <div class="row mt-2">
                <div class="col-12 col-sm-11 col-md-12 col-xl-9 mx-auto">
                    <table class="table table-striped text-center">
                        <thead class="table table-dark">
                            <th>N°</th>
                            <th>Código</th>
                            <th>Producto</th>
                            <th>Stock</th>
                            <th>Costo</th>
                            <th>Ganancia</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;

                                foreach($producto->ListarProductos() as $p){
                                    $i++;
                            ?>
                                <tr class ="fila">
                                    <td><?=$i ?></td>
                                    <td class="cod_producto"><?=$p->codigo_producto ?></td>
                                    <td class="prod"><?=$p->producto ?></td>
                                    <td><?=$p->stock_disponible ?></td>
                                    <td><?=number_format($p->costo,2) ?></td>
                                    <td><?=number_format($p->ganancia,2) ?></td>
                                    <td><?=$p->producto_codigo_marca ?></td>
                                    <td><?=$p->producto_codigo_categoria ?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm btn_editar_producto"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm btn_borrar_producto"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
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

        <!-- Modal -->
    <div class="modal fade" id="aviso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Borrar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Desea borrar el registro?<br/>
                    <span class="prod"></span> (<span class="cod_producto"></span>)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-arrow-rotate-left"></i> No</button>
                    <a href="../controller/borrar.php" class="btn btn-danger"><i class="fa-solid fa-x"></i> Sí</a>
                </div>
            </div>
        </div>
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