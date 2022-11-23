<?php
    class Cliente extends Conexion{
        public function ListarClientes(){
            $cliente = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_ListarClientes()";

            // sentencia
            $query = $conexion->prepare($script);
            
            $query->execute();

            $cliente = $query->fetchAll(PDO::FETCH_OBJ);

            $conexion = null;

            return $cliente;
        }

        public function BuscarClientePorCodigo($cod){
            $clien = null;

            $conexion = $this->Conectar();

            // script
            $script = "call sp_BuscarClientePorCodigo(:cod)";
            
            // sentencia
            $query = $conexion->prepare($script);
            
            $query->bindParam(':cod',$cod, PDO::PARAM_STR, 5);

            $query->execute();

            $num_registros = $query->rowCount();

            if($num_registros > 0){
                $clien['datos'][] = $query->fetch(PDO::FETCH_OBJ);
            }else{
                $clien['datos']['estado'] = "No se encontro";
            }

            $conexion = null;

            echo json_encode($clien, JSON_FORCE_OBJECT);
        }

        public function InsertarCliente(M_Cliente $cliente){
            try{
                $conexion = $this->Conectar();

                // script
                $script = "call sp_InsertarCliente(:codcli, :nom, :apePA, :apeMA, :tipoDO, :numDO, :email, :tlf, :sx, :drc);";
                // sentencia
                $query = $conexion->prepare($script);

                $query->bindParam(":codcli", $cliente->codigo_cliente);
                $query->bindParam(":nom", $cliente->nombre);
                $query->bindParam(":apePA", $cliente->apellido_Pa);
                $query->bindParam(":apeMA", $cliente->apellido_Ma);
                $query->bindParam(":tipoDO", $cliente->tipo_documento);
                $query->bindParam(":numDO", $cliente->numero_documento);
                $query->bindParam(":email", $cliente->email);
                $query->bindParam(":tlf", $cliente->telefono);
                $query->bindParam(":sx", $cliente->sexo);
                $query->bindParam(":drc", $cliente->direccion);


                $query->execute();

                $conexion = null;

            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        /*
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

        }*/        
    }
?>