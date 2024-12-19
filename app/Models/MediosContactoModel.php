<?php
class MediosContactoModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getMediosContactoActivos() {
        $query = "SELECT id, medio FROM medios_contacto WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
