<?php
require_once '../../config/database.php';

class RegistroEventoModel {
    private $db;

    public function registrarEvento($data) {
        try {
            // Construir la consulta SQL manualmente
            $sql = "INSERT INTO registro_evento (
                marca_venta, nombre_cliente, apellidos_cliente, genero, medio_contacto, 
                telefono_fijo, celular, email, codigo_postal, fecha_vuelo, tipo_vuelo, 
                guia, motivo_vuelo, numero_adultos, numero_ninos, check_in, check_out, 
                hotel, numero_habitaciones, activo, fecha_registro, fecha_actualizacion
            ) VALUES (
                ".$data['marca_venta'].", '".$data['nombre_cliente']."', '".$data['apellidos_cliente']."', ".$data['genero'].", ".$data['medio_contacto'].", 
                '".$data['telefono_fijo']."', '".$data['celular']."', '".$data['email']."', '".$data['codigo_postal']."', '".$data['fecha_vuelo']."', ".$data['tipo_vuelo'].", 
                ".$data['guia'].", ".$data['motivo_vuelo'].", ".$data['numero_adultos'].", ".$data['numero_ninos'].", '".$data['check_in']."', '".$data['check_out']."', 
                ".$data['hotel'].", ".$data['numero_habitaciones'].", 1, NOW(), NULL
            );";
    
            // Conectar a la base de datos
            $this->db = new Database();
            $conn = $this->db->getConnection();
    
            // Ejecutar la consulta
            $insert = mysqli_query($conn, $sql);
    
            if ($insert) {
                return true;
            } else {
                throw new Exception('Error al insertar el registro: ' . mysqli_error($conn));
            }
        } catch (Exception $e) {
            // Manejar excepciones
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function getRegistroEvento() {
        $query = "SELECT * FROM vst_registro_evento WHERE activo = 1"; 
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
