<?php
class Web_model{
    private $db;
    private $convocatorias;

    public function __construct(){
        $this -> db = Conectar::conexion();
        $this -> convocatorias = array();
    }

    public function get_convocatorias(){
        $sql = "SELECT * FROM Convocatorias";
        $result = $this->db->query($sql);
        while($row=$result->fetch_assoc()){
            $this->convocatorias[] = $row;
        }
        return $this -> convocatorias;
    }
}
?>