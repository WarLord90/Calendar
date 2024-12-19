<?php
class GuiaModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getGuiasActivas() {
        $query = "SELECT id, guia FROM guia WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
