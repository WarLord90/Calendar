<?php
class MotivoVueloModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getMotivosVueloActivos() {
        $query = "SELECT id, motivo FROM motivo_vuelo WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
