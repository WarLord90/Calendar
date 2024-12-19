<?php
class UsuarioModel {
    private $db;
    private $table_name = "usuarios";

    public function __construct($db) {
        $this->db = $db;
    }

    public function validarUsuario($usuario, $contraseña) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            return $contraseña === $user['contraseña'];  // Validación sin hash
        } else {
            return false;
        }
    }
}
?>
