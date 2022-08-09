<?php 

require_once __DIR__ . "/../database/DataBase.php";

class Historial{
    
    private $db;
    private $id;
    private $provincia;
    private $localidad;
    private $timestamp;

    public function __construct($provincia, $localidad){
        $this->db = DataBase::connect();
        $this->provincia = $provincia;
        $this->localidad = $localidad;
    }

    public function save(){
        try {
            $sql = "INSERT INTO opciones_seleccionadas VALUES(null, :provincia, :localidad, null)";
            $query = $this->db->prepare($sql);
            return $query->execute([
                ":provincia" => $this->db->quote($this->provincia),
                ":localidad" => $this->db->quote($this->localidad)
            ]);

        } catch (Exception $ex) {
            showDataVar($ex);
            return false;
        }
    }

    public function __toString(){
        return "Provincia: {$this->provincia} | Localidad: {$this->localidad}";
    }
}

?>