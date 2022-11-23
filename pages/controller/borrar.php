<?php
    include '../include/cargarClase.php';

    $p = new Producto();

    if (isset($_GET["cod_producto"])){
        $codprod = $_GET["cod_producto"];

        $p->BorrarProducto($codprod);

        header("location: ../view/listarProductos.php");
    }
?>