<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Evento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Registro de Evento de Vuelo en Globo</h1>
    <form action="" method="POST" class="mt-4">
        <!-- Apartado 1: Datos generales del pasajero -->
        <fieldset class="border p-3 mb-3">
            <legend class="w-auto px-2">Datos Generales del Pasajero</legend>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="marca_venta" class="form-label">Marca de Venta</label>
                    <select id="marca_venta" name="marca_venta" class="form-select" required>
                        <option value="">Seleccione</option>
                        <option value="Marca 1">Marca 1</option>
                        <option value="Marca 2">Marca 2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                    <input type="text" id="nombre_cliente" name="nombre_cliente" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="apellidos_cliente" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos_cliente" name="apellidos_cliente" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="genero" class="form-label">Género</label>
                    <select id="genero" name="genero" class="form-select" required>
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="medio_contacto" class="form-label">Medio de Contacto</label>
                    <select id="medio_contacto" name="medio_contacto" class="form-select" required>
                        <option value="">Seleccione</option>
                        <option value="Teléfono">Teléfono</option>
                        <option value="Correo Electrónico">Correo Electrónico</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="telefono_fijo" class="form-label">Teléfono Fijo</label>
                    <input type="text" id="telefono_fijo" name="telefono_fijo" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" id="celular" name="celular" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="codigo_postal" class="form-label">Código Postal</label>
                    <input type="text" id="codigo_postal" name="codigo_postal" class="form-control">
                </div>
            </div>
        </fieldset>

        <!-- Apartado 2: Planes de vuelo -->
        <fieldset class="border p-3 mb-3">
            <legend class="w-auto px-2">Planes de Vuelo</legend>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fecha_vuelo" class="form-label">Fecha de Vuelo</label>
                    <input type="datetime-local" id="fecha_vuelo" name="fecha_vuelo" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="tipo_vuelo" class="form-label">Tipo de Vuelo</label>
                    <select id="tipo_vuelo" name="tipo_vuelo" class="form-select" required>
                        <option value="">Seleccione</option>
                        <option value="Normal">Normal</option>
                        <option value="Panorámico">Panorámico</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="guia" class="form-label">Guía</label>
                    <select id="guia" name="guia" class="form-select" required>
                        <option value="">Seleccione</option>
                        <option value="Guía 1">Guía 1</option>
                        <option value="Guía 2">Guía 2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="motivo_vuelo" class="form-label">Motivo de Vuelo</label>
                    <select id="motivo_vuelo" name="motivo_vuelo" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="Vacaciones">Vacaciones</option>
                        <option value="Celebración">Celebración</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="numero_adultos" class="form-label">Número de Adultos</label>
                    <input type="number" id="numero_adultos" name="numero_adultos" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="numero_niños" class="form-label">Número de Niños</label>
                    <input type="number" id="numero_niños" name="numero_niños" class="form-control">
                </div>
            </div>
        </fieldset>

        <!-- Apartado 3: Hospedaje -->
        <fieldset class="border p-3 mb-3">
            <legend class="w-auto px-2">Hospedaje</legend>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="check_in" class="form-label">Check In</label>
                    <input type="datetime-local" id="check_in" name="check_in" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="check_out" class="form-label">Check Out</label>
                    <input type="datetime-local" id="check_out" name="check_out" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="hotel" class="form-label">Hotel</label>
                    <select id="hotel" name="hotel" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="Hotel A">Hotel A</option>
                        <option value="Hotel B">Hotel B</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="numero_habitaciones" class="form-label">Número de Habitaciones</label>
                    <input type="number" id="numero_habitaciones" name="numero_habitaciones" class="form-control">
                </div>
            </div>
        </fieldset>

        <!-- Apartados 4-6 omitidos por límite de espacio -->

        <button type="submit" class="btn btn-primary">Registrar Evento</button>
    </form>
</div>
</body>
</html>
