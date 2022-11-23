<?php


 $host ='localhost';
 $bd='ventas';
 $usuario ='root';
 $contraseña='';

   try {

     $conectar=new PDO("mysql:host=$host;dbname=$bd", $usuario, $contraseña);
     echo "";}
    
     catch (Exception $e) {
     echo "error en la conexion";
}
?>
