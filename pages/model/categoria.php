<?php
    class Categoria extends Conexion{
        public function ListarCategoria(){
            $categoria = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_ListarCategoria()";

            // sentencia
            $query = $conexion->prepare($script);
            
            $query->execute();

            $categoria = $query->fetchAll(PDO::FETCH_OBJ);

            $conexion = null;

            return $categoria;
        }

        public function BuscarCategoriaPorCodigo($cod){
            $cates = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_BuscarCategoriaPorCodigo(:cod)";
            
            // sentencia
            $query = $conexion->prepare($script);
            
            $query->bindParam(':cod',$cod, PDO::PARAM_STR, 5);

            $query->execute();

            $num_registros = $query->rowCount();

            if($num_registros > 0){
                $cates['datos'][] = $query->fetch(PDO::FETCH_OBJ);
            }else{
                $cates['datos']['estado'] = "No se encontro";
            }

            $conexion = null;

            echo json_encode($cates, JSON_FORCE_OBJECT);
        }

        public function InsertarCategoria(M_Categoria $cate){
            try{
                $conexion = $this->Conectar();

                // script
                $script = "call sp_InsertarCategoria(:codc, :categoria);";
                // sentencia
                $query = $conexion->prepare($script);

                $query->bindParam(":codc", $cate->codigo_categoria);
                $query->bindParam(":categoria", $cate->categoria);

                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function FiltrarCategoria($valorc){
            $arr_cat = null;

            $conexion = $this->Conectar();

            
            $script = "call sp_FiltrarCategoria(:valorc)";

           
            $query = $conexion->prepare($script);


            $query->bindParam(":valorc", $valorc, PDO::PARAM_STR, 50);

            $query->execute();

            $num_registros = $query->rowCount();

            if ($num_registros > 0) {
               
            $arr_cate = $query->fetchAll(PDO::FETCH_OBJ);

            echo"<table class=\"table table-striped text-center\">
                <thead class=\"table table-dark\">
                    <th>N°</th>
                    <th>Código</th>
                    <th>Categoria</th>
                </thead>";
                    $i = 0;

                    foreach($arr_cate as $c){
                        $i++;                    
                echo"<tbody>
                        <tr class =\"fila\">
                            <td>".$i."</td>
                            <td class=\"cod_categoria\">".$c->codigo_categoria."</td>
                            <td class=\"categoria\">".$c->categoria."</td>
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