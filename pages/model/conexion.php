<?php
    class Conexion{
        private $host = "localhost";
        private $bd = "bd_market";
        private $usuario = "root";
        private $psw = "";
        

        public function Conectar(){
            try{
                $conexion = new PDO("mysql:host=$this->host;dbname=$this->bd;",$this->usuario, $this->psw);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conexion;
            }catch(PDOException $e){
                echo 'Se encontro un error: '. $e->getMessage();
            }
        }
    }
?>