<?php

    include '../include/cargarClase.php';

    $p = new Producto();

    if (isset($_POST["valor"])){
        $valor = $_POST["valor"];

        $p->FiltrarProducto($valor);
    }

    $m = new Marca();

    if (isset($_POST["valorm"])){
        $valor = $_POST["valorm"];

        $m->FiltrarMarca($valor);
    }

    $c = new Categoria();

    if (isset($_POST["valorc"])){
        $valor = $_POST["valorc"];

        $c->FiltrarCategoria($valor);
    }
?>