<?php 
    class DataBase {

        public static function connect(){
            try{

                $baseDatos = "evaluacioncuatrolados";
                $host = "localhost";
                $port = 3306;
                $user = "root";
                $password = "";
            
                $db = new PDO("mysql:dbname=$baseDatos;chartset=UTF-8;host=$host;port=$port",$user,$password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
                
            }catch( Exception $e ){
            
                echo "Error en la conexion con la base de datos <br>";
                echo $e->getMessage();
                exit();
            }
        }

    }

?>

