 // codigo JS para la aplicación appventas

$(function(){
    // $(selector).evento(function(e) {})

    // MARCA
    $('#form-buscar-marca #txtCodigo').focusout(function(e) {
        e.preventDefault();

        var codmar = $(this).val();

        if(codmar != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codmar:codmar},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-marca #txtCodigo').val("");
                        $('#form-buscar-marca #txtMarca').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-marca #txtMarca').val(rpta.datos[0].marca);
                    }
                }
            });
        }
    })

    $('#btn-buscar').on('click',()=>{
        var codmar = $(this).val();

        if(codmar != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codmar:codmar},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-marca #txtCodigo').val("");
                        $('#form-buscar-marca #txtMarca').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-marca #txtMarca').val(rpta.datos[0].marca);
                    }
                }
            });
        }
    })

        // PRODUCTO
    $('#form-buscar-producto #txtCodigoP').focusout(function(e) {
        e.preventDefault();

        var codprod = $(this).val();

        if(codprod != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codprod:codprod},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-producto #txtCodigoP').val("");
                        $('#form-buscar-producto #txtProducto').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-producto #txtProducto').val(rpta.datos[0].producto);
                    }
                }
            });
        }
    })
        $('#btn-buscar-p').on('click',()=>{
        var codprod = $(this).val();

        if(codprod != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codprod:codprod},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-producto #txtCodigoP').val("");
                        $('#form-buscar-producto #txtProducto').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-producto #txtProducto').val(rpta.datos[0].producto);
                    }
                }
            });
        }
    })

     // CLIENTES
    $('#form-buscar-clie #txtCodigoClie').focusout(function(e) {
        e.preventDefault();

        var codcli = $(this).val();

        if(codcli != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codclie:codclie},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-clie #txtCodigoClie').val("");
                        $('#form-buscar-clie #txtCliente').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-clie #txtCliente').val(rpta.datos[0].nombre);
                    }
                }
            });
        }
    })
        $('#btn-buscar-cli').on('click',()=>{
        var codclie = $(this).val();

        if(codclie != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codclie:codclie},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-clie #txtCodigoClie').val("");
                        $('#form-buscar-clie #txtCliente').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-clie #txtCliente').val(rpta.datos[0].nombre);
                    }
                }
            });
        }
    })
        // CATEGORIA
    $('#form-buscar-cate #txtCodigoC').focusout(function(e) {
        e.preventDefault();

        var codcat = $(this).val();

        if(codcat != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codcat:codcat},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-cate #txtCodigoC').val("");
                        $('#form-buscar-cate #txtCate').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-cate #txtCate').val(rpta.datos[0].categoria);
                    }
                }
            });
        }
    })
        $('#btn-buscar-c').on('click',()=>{
        var codcat = $(this).val();

        if(codcat != ""){
            // Implementar consulta usando ajax
            $.ajax({
                url: '../controller/buscar.php',
                type: 'post',
                data: {codcat:codcat},
                success: (respuesta)=>{
                    var rpta = JSON.parse(respuesta);

                    if(rpta.datos['estado']){
                        $('#form-buscar-cate #txtCodigoC').val("");
                        $('#form-buscar-cate #txtCate').val("No se encontraron datos");
                    }else{
                        $('#form-buscar-cate #txtCate').val(rpta.datos[0].categoria);
                    }
                }
            });
        }
    })        

    $('#btn-nueva-busqueda').on('click', ()=>{
        $('#form-buscar-marca #txtCodigo').focus();
    })

    // // PRODUCTO
    $('.btn_editar_producto').click(function(e){
        var codigo_producto = $(this).closest('.fila').children('.cod_producto').text();

        location.href = 'editarProducto.php?codigo_producto=' + codigo_producto;
    })
    $('.btn_borrar_producto').click(function(e){
        var codigo_producto = $(this).closest('.fila').children('.cod_producto').text();
        var producto = $(this).closest('.fila').children('.prod').text();

        $("#aviso").modal("show");

        $("#aviso .prod").text(producto);
        $("#aviso .cod_producto").text(codigo_producto);

        $("#aviso .btn-danger").attr("href", "../controller/borrar.php?cod_producto=" + codigo_producto);
    });

    $("#form-filtrar-producto #btn-filtrar-p").click(function(e){
        var valor = $("#form-filtrar-producto #txtValor").val();
        if (valor != "") {
            $.post("../controller/filtrar.php", 
                {valor: valor},
                function(contenido){
                    $("#tabla-producto").html(contenido);
            });
        }
    });

    $("#form-filtrar-marca #btn-filtrar-m").click(function(e){
        var valorm = $("#form-filtrar-marca #txtValorM").val();
        if (valorm != "") {
            $.post("../controller/filtrar.php", 
                {valorm: valorm},
                function(contenido){
                    $("#tabla-marca").html(contenido);
            });
        }
    });

    $("#form-filtrar-cate #btn-filtrar-c").click(function(e){
        var valorc = $("#form-filtrar-cate #txtValorC").val();
        if (valorc != "") {
            $.post("../controller/filtrar.php", 
                {valorc: valorc},
                function(contenido){
                    $("#tabla-cate").html(contenido);
            });
        }
    });

});


