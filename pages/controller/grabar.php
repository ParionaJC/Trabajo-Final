<?php
    include '../include/cargarClase.php';

    $producto = new Producto();

    if(isset($_POST['btn-registrar'])){

        $m_producto = new M_Producto();

        $m_producto->codigo_producto = $_POST['txtCodigo'];
        $m_producto->producto = $_POST['txtProducto'];
        $m_producto->stock_disponible = $_POST['txtStock'];
        $m_producto->costo = $_POST['txtCosto'];
        $m_producto->ganancia = $_POST['txtGanancia'];
        $m_producto->producto_codigo_marca = $_POST['txtCodMarca'];
        $m_producto->producto_codigo_categoria = $_POST['txtCodCat'];
        
        $tipo = $_POST['txtTipo'];

        if($tipo == 'insert')
            $producto->InsertarProducto($m_producto);
        else if ($tipo == 'editar')
            $producto->ActualizarProducto($m_producto);
        header('location: ../view/listarProductos.php');
    }

    $marca = new Marca();

    if(isset($_POST['btn-registrar-marca'])){

        $m_marca = new M_Marca();

        $m_marca->codigo_marca = $_POST['txtCodigoM'];
        $m_marca->marca = $_POST['txtMarca'];
        
        $tipo = $_POST['txtTipo'];

        if($tipo == 'insertar')
            $marca->InsertarMarca($m_marca);
        else if ($tipo == 'editar')
            $marca->ActualizarMarca($m_marca);
        header('location: ../view/listarMarcas.php');
    }

    $categoria = new Categoria();

    if(isset($_POST['btn-registrar-cate'])){

        $m_cate = new M_Categoria();

        $m_cate->codigo_categoria = $_POST['txtCodigoC'];
        $m_cate->categoria = $_POST['txtCate'];
        
        $tipo = $_POST['txtTipo'];

        if($tipo == 'insertar')
            $categoria->InsertarCategoria($m_cate);
        else if ($tipo == 'editar')
            $categoria->ActualizarCategoria($m_cate);
        header('location: ../view/listarCategorias.php');
    }

    $cliente = new Cliente();

    if(isset($_POST['btn-registrar-cli'])){

        $m_cliente = new M_Cliente();

        $m_cliente->codigo_cliente = $_POST['txtCodigoCli'];
        $m_cliente->nombre = $_POST['txtNombre'];
        $m_cliente->apellido_Pa = $_POST['txtApepa'];
        $m_cliente->apellido_Ma = $_POST['txtApema'];
        $m_cliente->tipo_documento = $_POST['txttido'];
        $m_cliente->numero_documento = $_POST['txtnumdo'];
        $m_cliente->email = $_POST['txtemail'];
        $m_cliente->teléfono = $_POST['txttele'];
        $m_cliente->sexo = $_POST['txtsexo'];
        $m_cliente->direccion = $_POST['txtdire'];

        
        $tipo = $_POST['txtTipo'];

        if($tipo == 'insert')
            $cliente->InsertarCliente($m_cliente);
        else if ($tipo == 'editar')
            $cliente->ActualizarCliente($m_cliente);
        header('location: ../view/listarClientes.php');
    }
?>