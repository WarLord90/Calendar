<?php
class MarcaModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getMarcasActivas() {
        $query = "SELECT id, marca FROM marca WHERE activo = 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
