<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div id="mainContainer" class="container mt-5">
        
        <?php if (isset($_SESSION['usuario'])): ?>
            <!-- Barra de menú -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Mi Proyecto</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="linkRegistroEvento">Registro de Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="logoutButton">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenedor de navegación -->
            <div id="navegacionContainer">
                <!-- Aquí se cargan las vistas dinámicamente -->
            </div>

        <?php else: ?>
            <!-- Formulario de inicio de sesión -->
            <h2 class="text-center">Iniciar Sesión</h2>
            <form id="loginForm" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                <div id="loginError" class="mt-3 text-danger"></div>
            </form>
        <?php endif; ?>

    </div>

    <script>
        $(document).ready(function () {
            // Submit del formulario de inicio de sesión
            $("#loginForm").on("submit", function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'app/controllers/LoginController.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        const res = JSON.parse(response);
                        if (res.success) {
                            location.reload(); // Recargar la página
                        } else {
                            $("#loginError").text(res.message);
                        }
                    },
                    error: function () {
                        $("#loginError").text("Ocurrió un error, intenta nuevamente.");
                    }
                });
            });

            // Cargar dinámicamente la sección "Registro de Eventos"
            $("#linkRegistroEvento").click(function() {
                $("#navegacionContainer").load("app/views/RegistroEvento.php");
            });

            // Manejar el cierre de sesión
            $("#logoutButton").click(function() {
                $.post('app/views/Logout.php', function() {
                    location.reload(); // Recargar la página después de cerrar sesión
                });
            });

        });
    </script>

</body>
</html>
