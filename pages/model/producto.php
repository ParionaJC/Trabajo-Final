<?php
    class Producto extends Conexion{
        public function ListarProductos(){
            $producto = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_ListarProducto();";

            // sentencia
            $query = $conexion->prepare($script);

            $query->execute();

            $producto = $query->fetchAll(PDO::FETCH_OBJ);

            $conexion = null;

            return $producto;
        }

        public function BuscarProducto($cod){
            $prod = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_BuscarProducto(:cod);";
            
            // sentencia
            $query = $conexion->prepare($script);
            
            $query->bindParam(':cod',$cod, PDO::PARAM_STR, 5);

            $query->execute();

            $num_registros = $query->rowCount();

            if($num_registros > 0)
                $prod = $query->fetch(PDO::FETCH_OBJ);

            $conexion = null;

            return $prod;
        }

        public function BuscarProductoPorCodigo($cod){
            $prod = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_BuscarProductoPorCodigo(:cod);";
            
            // sentencia
            $query = $conexion->prepare($script);
            
            $query->bindParam(':cod',$cod, PDO::PARAM_STR, 5);

            $query->execute();

            $num_registros = $query->rowCount();

            if($num_registros > 0){
                $marcas['datos'][] = $query->fetch(PDO::FETCH_OBJ);
            }else{
                $marcas['datos']['estado'] = "No se encontro";
            }

            $conexion = null;

            echo json_encode($marcas, JSON_FORCE_OBJECT);
        }

        public function InsertarProducto(M_Producto $producto){
            try{
                $conexion = $this->Conectar();

                // script
                $script = "call sp_InsertarProducto(:cod, :prod, :stock, :costo, :ganancia, :codMarca, :codCate);";
                // sentencia
                $query = $conexion->prepare($script);

                $query->bindParam(":cod", $producto->codigo_producto);
                $query->bindParam(":prod", $producto->producto);
                $query->bindParam(":stock", $producto->stock_disponible);
                $query->bindParam(":costo", $producto->costo);
                $query->bindParam(":ganancia", $producto->ganancia);
                $query->bindParam(":codMarca", $producto->producto_codigo_marca);
                $query->bindParam(":codCate", $producto->producto_codigo_categoria);

                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function ActualizarProducto(M_Producto $producto){
            try{
                $conexion = $this->Conectar();

                // script
                $script = "call sp_ActualizarProducto(:cod, :prod, :stock, :costo, :ganancia, :codMarca, :codCate);";
                // sentencia
                $query = $conexion->prepare($script);

                $query->bindParam(":cod", $producto->codigo_producto);
                $query->bindParam(":prod", $producto->producto);
                $query->bindParam(":stock", $producto->stock_disponible);
                $query->bindParam(":costo", $producto->costo);
                $query->bindParam(":ganancia", $producto->ganancia);
                $query->bindParam(":codMarca", $producto->producto_codigo_marca);
                $query->bindParam(":codCate", $producto->producto_codigo_categoria);

                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function BorrarProducto($codprod){
            try{
                $conexion = $this->Conectar();

                
                $script = "call sp_BorrarProducto(:codprod);";
                
                $query = $conexion->prepare($script);

                $query->bindParam(":codprod", $codprod);

                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function FiltrarProducto($valor){
            $arr_prod = null;

            $conexion = $this->Conectar();

            
            $script = "call sp_FiltrarProducto(:valor)";

           
            $query = $conexion->prepare($script);


            $query->bindParam(":valor", $valor, PDO::PARAM_STR, 50);

            $query->execute();

            $num_registros = $query->rowCount();

            if ($num_registros > 0) {
               
            $arr_prod = $query->fetchAll(PDO::FETCH_OBJ);

            echo"<table class=\"table table-striped text-center\">
                <thead class=\"table table-dark\">
                    <th>N°</th>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Stock</th>
                    <th>Costo</th>
                </thead>";
                    $i = 0;

                    foreach($arr_prod as $p){
                        $i++;                    
                echo"<tbody>
                        <tr class =\"fila\">
                            <td>".$i."</td>
                            <td class=\"cod_producto\">".$p->codigo_producto."</td>
                            <td class=\"prod\">".$p->producto."</td>
                            <td>".$p->stock_disponible."</td>
                            <td>".number_format($p->costo,2)."</td>  
                        </tr>
                    </tbody>";
                    }
                echo"</table>";
            } else{
                echo"<div class=\"alert alert-dark text-center\" role=\"alert\">
                    No se encontraron resultados...
                </div>"; 
            }

            $conexion = null;

        }
    }
?>