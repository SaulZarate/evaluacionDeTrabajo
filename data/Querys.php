<?php
require_once __DIR__ . "/../database/DataBase.php";

class Querys{

    public static function getProvincias(){
        try {
            $db = DataBase::connect();
            $sql = "SELECT * FROM provincias ORDER BY nombre";   
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
            $sql = "SELECT * FROM localidades ORDER BY nombre";   
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
