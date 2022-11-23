<?php
    class Marca extends Conexion{
        public function ListarMarcas(){
            $marcas = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_ListarMarcas()";

            // sentencia
            $query = $conexion->prepare($script);
            
            $query->execute();

            $marcas = $query->fetchAll(PDO::FETCH_OBJ);

            $conexion = null;

            return $marcas;
        }

        public function BuscarMarcaPorCodigo($cod){
            $marcas = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_BuscarMarcaPorCodigo(:cod)";
            
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

        public function InsertarMarca(M_Marca $marca){
            try{
                $conexion = $this->Conectar();

                // script
                $script = "call sp_InsertarMarca(:codm, :marca);";
                // sentencia
                $query = $conexion->prepare($script);

                $query->bindParam(":codm", $marca->codigo_marca);
                $query->bindParam(":marca", $marca->marca);

                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function FiltrarMarca($valorm){
            $arr_mar = null;

            $conexion = $this->Conectar();

            
            $script = "call sp_FiltrarMarca(:valorm)";

           
            $query = $conexion->prepare($script);


            $query->bindParam(":valorm", $valorm, PDO::PARAM_STR, 50);

            $query->execute();

            $num_registros = $query->rowCount();

            if ($num_registros > 0) {
               
            $arr_mar = $query->fetchAll(PDO::FETCH_OBJ);

            echo"<table class=\"table table-striped text-center\">
                <thead class=\"table table-dark\">
                    <th>N°</th>
                    <th>Código</th>
                    <th>Marca</th>
                </thead>";
                    $i = 0;

                    foreach($arr_mar as $m){
                        $i++;                    
                echo"<tbody>
                        <tr class =\"fila\">
                            <td>".$i."</td>
                            <td class=\"cod_marca\">".$m->codigo_marca."</td>
                            <td class=\"marca\">".$m->marca."</td>
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