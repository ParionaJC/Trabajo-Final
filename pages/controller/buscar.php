<?php
    // require '../model/conexion.php';
    // require '../model/marca.php';
    include '../include/cargarClase.php';

    $marca = new Marca();

    if (isset($_POST["codmar"])){
        $codmar = $_POST["codmar"];

        $marca->BuscarMarcaPorCodigo($codmar);
    }

    $prod = new Producto();

    if (isset($_POST["codprod"])){
        $codprod = $_POST["codprod"];

        $prod->BuscarProductoPorCodigo($codprod);
    }

    $cate = new Categoria();

    if (isset($_POST["codcat"])) {
        $codcat = $_POST['codcat'];

        $cate->BuscarCategoriaPorCodigo($codcat);
    }

    $clie = new Producto();

    if (isset($_POST["codclie"])){
        $codclie = $_POST["codclie"];

        $clie->BuscarClientePorCodigo($codclie);
    }
?>