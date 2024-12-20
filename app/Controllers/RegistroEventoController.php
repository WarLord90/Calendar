<?php
require_once '../../app/models/RegistroEventoModel.php'; 
require_once '../../config/database.php'; // Asegúrate de incluir el archivo de configuración de la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Crear conexión a la base de datos
    $database = new Database(); // Asegúrate de que la clase Database esté definida en tu archivo de configuración
    $db = $database->getConnection();

    // Crear instancia del modelo y pasarle la conexión
    $registroEventoModel = new RegistroEventoModel($db);

    // Obtener datos del formulario
    $data = [
        'marca_venta' => $_POST['marca_venta'],
        'nombre_cliente' => $_POST['nombre_cliente'],
        'apellidos_cliente' => $_POST['apellidos_cliente'],
        'genero' => $_POST['genero'],
        'medio_contacto' => $_POST['medio_contacto'],
        'telefono_fijo' => $_POST['telefono_fijo'],
        'celular' => $_POST['celular'],
        'email' => $_POST['email'],
        'codigo_postal' => $_POST['codigo_postal'],
        'fecha_vuelo' => $_POST['fecha_vuelo'],
        'tipo_vuelo' => $_POST['tipo_vuelo'],
        'guia' => $_POST['guia'],
        'motivo_vuelo' => $_POST['motivo_vuelo'],
        'numero_adultos' => $_POST['numero_adultos'],
        'numero_ninos' => $_POST['numero_ninos'],
        'check_in' => $_POST['check_in'],
        'check_out' => $_POST['check_out'],
        'hotel' => $_POST['hotel'],
        'numero_habitaciones' => $_POST['numero_habitaciones'],
    ];


    // Preparar las fechas y valores predeterminados
    $data['fecha_vuelo'] = date('Y-m-d H:i:s', strtotime($data['fecha_vuelo']));
    $data['check_in'] = date('Y-m-d H:i:s', strtotime($data['check_in']));
    $data['check_out'] = date('Y-m-d H:i:s', strtotime($data['check_out']));

    // Validación básica de datos
    foreach ($data as $key => $value) {
        if (empty($value)) {
            echo "Por favor, complete todos los campos.\n";
            return;
        }
    }

    // Enviar los datos al modelo
    if ($registroEventoModel->registrarEvento($data)) {
        header('Location: /Calendar/');
    } else {
        echo "Hubo un error al registrar el evento.\n";
    }

    echo "Saliendo del método registrarEvento()\n";
}
