<?php
session_start();
require_once '../../config/database.php';  // Conexión a la base de datos
require_once '../models/UsuarioModel.php';  // Modelo de usuario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contraseña = $_POST['password'] ?? '';

    // Conexión a la base de datos usando mysqli
    $database = new Database();
    $db = $database->getConnection();  // Obtiene conexión mysqli
    $usuarioModel = new UsuarioModel($db);

    if ($usuarioModel->validarUsuario($usuario, $contraseña)) {
        $_SESSION['usuario'] = $usuario;  // Inicia sesión
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos.']);
    }
}
?>
