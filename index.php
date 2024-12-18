<?php
// Inicia la sesión
session_start();

// Incluye el controlador de login
require_once __DIR__ . '/app/controllers/LoginController.php';

// Verifica si ya hay una sesión activa
if (isset($_SESSION['usuario'])) {
    header("Location: RegistroEvento.php"); // Redirige a otra página si ya está logueado
    exit();
}

// Crear instancia del controlador de login
$loginController = new LoginController();

// Llamar al método login del controlador
$loginController->login();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Agregar Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Iniciar Sesión</h2>
        <form action="login.php" method="POST" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>
</body>
</html>
