<?php
class GeneroModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getGenerosActivos() {
        $query = "SELECT id, genero FROM genero WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
