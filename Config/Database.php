<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'calendar';
    private $username = 'root';
    private $password = 'Mando.0$%';
    private $conn;

    public function getConnection() {
        if (!$this->conn) {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

            if ($this->conn->connect_error) {
                die('Conexión fallida: ' . $this->conn->connect_error);
            }
        }

        return $this->conn;
    }
}
?>
