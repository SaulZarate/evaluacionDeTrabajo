<?php
require_once __DIR__ . "/../database/DataBase.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Querys{

    public static function getProvincias(){
        try {
            $db = DataBase::connect();
            $sql = "SET NAMES 'utf8';";   
            $query = $db->prepare($sql);
            $query->execute();
            
            $sql = "SELECT id, nombre FROM datos_provincias ORDER BY nombre;";   
            $query = $db->prepare($sql);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $ex) {
            showDataVar($ex);
        }
    }

    public static function getLocalidades(){
        try {
            $db = DataBase::connect();

            $sql = "SET NAMES 'utf8';";   
            $query = $db->prepare($sql);
            $query->execute();

            $sql = "
                SELECT id, lower(nombre) as nombre, idProvincia 
                FROM datos_localidades 
                WHERE nombre <> '' ORDER BY nombre;
                ";   
            $query = $db->prepare($sql);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $ex) {
            showDataVar($ex);
        }
    }

}


?> 
