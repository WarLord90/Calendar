<?php
require_once "models/EventoModel.php";

class EventoController {
    public function registro() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos = $_POST;
            $database = new Database();
            $db = $database->getConnection();
            $eventoModel = new EventoModel($db);

            if ($eventoModel->registrarEvento($datos)) {
                echo "Evento registrado exitosamente.";
            } else {
                echo "Error al registrar el evento.";
            }
        }
        include "views/registro_evento.php";
    }
}
?>
