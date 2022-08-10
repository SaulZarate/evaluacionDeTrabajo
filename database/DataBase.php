<?php 
    require_once __DIR__ . "/credentials.php";

    class DataBase {

        public static function connect(){
            try{
                $credentials = getCredentials();
                $host = $credentials["host"];
                $baseDatos = $credentials["database"];
                $user = $credentials["user"];
                $password = $credentials["password"];
                
                $db = new PDO("mysql:dbname=$baseDatos;chartset=UTF-8;host=$host",$user,$password);
                /* 
                    // SQLSTATE[HY000] [1045] Access denied for user 'cuatrolados_eval'@'localhost' (using password: YES)
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                */
                return $db;
                
            }catch( Exception $e ){
            
                echo "Error en la conexion con la base de datos <br>";
                echo $e->getMessage();
                exit();
            }
        }

    }

?>

