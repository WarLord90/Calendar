<?php
class UsuarioModel {
    private $conn;
    private $table_name = "usuarios";

    public function __construct($db) {
        $this->conn = $db;
    }

    /**
     * Valida un usuario usando texto plano para la contraseña
     * 
     * @param string $usuario
     * @param string $contraseña
     * @return bool
     */
    public function validarUsuario($usuario, $contraseña) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE usuario = :usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró un usuario y si la contraseña coincide
        if ($user && $user['contraseña'] === $contraseña) {
            return true;
        }

        return false;
    }
}
?>
