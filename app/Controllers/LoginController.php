<?php
class LoginController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['password'];  // Ajustado al campo correcto

            require_once 'Config/Database.php';  // Incluye correctamente la configuración de la base de datos
            require_once 'app/Models/UsuarioModel.php';  // Incluye UsuarioModel correctamente
            
            $database = new Database();
            $db = $database->getConnection();
            $usuarioModel = new UsuarioModel($db);  // Instancia correcta de UsuarioModel

            if ($usuarioModel->validarUsuario($usuario, $contraseña)) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: RegistroEvento.php");  // Redirige a la página deseada
                exit();
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        }
    }
}
?>

