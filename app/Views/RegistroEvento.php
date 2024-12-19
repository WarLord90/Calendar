<?php
// Conexión a la base de datos
require_once '../../config/database.php';

// Importar el modelo MarcaModel
require_once '../../app/models/MarcaModel.php';
require_once '../../app/models/GeneroModel.php';
require_once '../../app/models/MediosContactoModel.php';
require_once '../../app/models/TiposVueloModel.php';
require_once '../../app/models/GuiaModel.php';
require_once '../../app/models/MotivoVueloModel.php';
require_once '../../app/models/HotelesModel.php';


// Crear instancia de Modelos
$marcaModel = new MarcaModel();
$generoModel = new GeneroModel();
$medioscontactoModel = new MediosContactoModel();
$tiposvueloModel = new TiposVueloModel();
$guiaModel = new GuiaModel();
$motivovueloModel = new MotivoVueloModel();
$hotelesModel = new HotelesModel();


// Obtener catalogos activss desde el modelo
$marcas = $marcaModel->getMarcasActivas();
$generos = $generoModel->getGenerosActivos();
$medioscontacto = $medioscontactoModel->getMediosContactoActivos();
$tiposvuelo = $tiposvueloModel->getTiposVueloActivos();
$guia = $guiaModel->getGuiasActivas();
$motivovuelo = $motivovueloModel->getMotivosVueloActivos();
$hoteles = $hotelesModel->getHotelesActivos();

?>

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
                        <?php foreach ($marcas as $marca): ?>
                            <option value="<?php echo $marca['id']; ?>"><?php echo $marca['marca']; ?></option>
                        <?php endforeach; ?>
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
                        <?php foreach ($generos as $genero): ?>
                            <option value="<?php echo $genero['id']; ?>"><?php echo $genero['genero']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="medio_contacto" class="form-label">Medio de Contacto</label>
                    <select id="medio_contacto" name="medio_contacto" class="form-select" required>
                        <option value="">Seleccione</option>
                        <?php foreach ($medioscontacto as $medio): ?>
                            <option value="<?php echo $medio['id']; ?>"><?php echo $medio['medio']; ?></option>
                        <?php endforeach; ?>
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
                        <?php foreach ($tiposvuelo as $tipo): ?>
                            <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['tipovuelo']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="guia" class="form-label">Guía</label>
                    <select id="guia" name="guia" class="form-select" required>
                        <option value="">Seleccione</option>
                        <?php foreach ($guia as $guias): ?>
                            <option value="<?php echo $guias['id']; ?>"><?php echo $guias['guia']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="motivo_vuelo" class="form-label">Motivo de Vuelo</label>
                    <select id="motivo_vuelo" name="motivo_vuelo" class="form-select">
                        <option value="">Seleccione</option>
                        <?php foreach ($motivovuelo as $motivo): ?>
                            <option value="<?php echo $motivo['id']; ?>"><?php echo $motivo['motivo']; ?></option>
                        <?php endforeach; ?>
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
                        <?php foreach ($hoteles as $hotel): ?>
                            <option value="<?php echo $hotel['id']; ?>"><?php echo $hotel['hotel']; ?></option>
                        <?php endforeach; ?>
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

