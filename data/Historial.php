<?php 
require_once __DIR__ . "/../helpers/utils.php";
require_once __DIR__ . "/../database/DataBase.php";

class Historial{
    
    private $db;
    private $id;
    private $idProvincia;
    private $idLocalidad;
    private $timestamp;

    public function __construct($idProvincia, $idLocalidad){
        $this->db = DataBase::connect();
        $this->idProvincia = $idProvincia;
        $this->idLocalidad = $idLocalidad;
    }

    public function save(){
        try {
            $sql = "INSERT INTO opciones_seleccionadas VALUES(null, :idProvincia, :idLocalidad, null)";
            $query = $this->db->prepare($sql);
            return $query->execute([
                ":idProvincia" => $this->idProvincia,
                ":idLocalidad" => $this->idLocalidad
            ]);

        } catch (Exception $ex) {
            Utils::showDataVar($ex);
            return false;
        }
    }

    public function __toString(){
        return "Provincia: {$this->provincia} | Localidad: {$this->localidad}";
    }
}

?>