<?php
class EventoModel {
    private $conn;
    private $table_name = "eventos";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registrarEvento($datos) {
        $query = "INSERT INTO " . $this->table_name . " 
            (marca_venta, nombre_cliente, apellidos_cliente, genero, medio_contacto, telefono_fijo, celular, email, codigo_postal, 
            fecha_vuelo, tipo_vuelo, guia, motivo_vuelo, numero_adultos, numero_niños, 
            check_in, check_out, hotel, numero_habitaciones, tipo_habitacion, transporte, numero_personas_transporte, 
            fotos_sd, champagne, ramo_rosas, zona_arqueologica, lona_personalizada, lona_panoramica, tours_guiados, 
            mariachis, desayuno, descripcion_otros, cantidad_otros) 
            VALUES (:marca_venta, :nombre_cliente, :apellidos_cliente, :genero, :medio_contacto, :telefono_fijo, :celular, :email, 
            :codigo_postal, :fecha_vuelo, :tipo_vuelo, :guia, :motivo_vuelo, :numero_adultos, :numero_niños, 
            :check_in, :check_out, :hotel, :numero_habitaciones, :tipo_habitacion, :transporte, :numero_personas_transporte, 
            :fotos_sd, :champagne, :ramo_rosas, :zona_arqueologica, :lona_personalizada, :lona_panoramica, :tours_guiados, 
            :mariachis, :desayuno, :descripcion_otros, :cantidad_otros)";

        $stmt = $this->conn->prepare($query);

        foreach ($datos as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
