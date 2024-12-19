<?php
class HotelesModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getHotelesActivos() {
        $query = "SELECT id, hotel FROM hoteles WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
