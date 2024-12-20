-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-12-2024 a las 21:21:12
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `genero`, `activo`) VALUES
(1, 'Femenino', b'1'),
(2, 'Masculino', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia`
--

DROP TABLE IF EXISTS `guia`;
CREATE TABLE IF NOT EXISTS `guia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guia` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `guia`
--

INSERT INTO `guia` (`id`, `guia`, `activo`) VALUES
(1, 'Guía Ejemplo', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

DROP TABLE IF EXISTS `hoteles`;
CREATE TABLE IF NOT EXISTS `hoteles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel` varchar(100) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id`, `hotel`, `activo`) VALUES
(1, 'Hotel Ejemplo', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `marca`, `activo`) VALUES
(1, 'EjemploMarca', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_contacto`
--

DROP TABLE IF EXISTS `medios_contacto`;
CREATE TABLE IF NOT EXISTS `medios_contacto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medio` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `medios_contacto`
--

INSERT INTO `medios_contacto` (`id`, `medio`, `activo`) VALUES
(1, 'Correo Electrónico', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_vuelo`
--

DROP TABLE IF EXISTS `motivo_vuelo`;
CREATE TABLE IF NOT EXISTS `motivo_vuelo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `motivo` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `motivo_vuelo`
--

INSERT INTO `motivo_vuelo` (`id`, `motivo`, `activo`) VALUES
(1, 'Motivo Ejemplo', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_evento`
--

DROP TABLE IF EXISTS `registro_evento`;
CREATE TABLE IF NOT EXISTS `registro_evento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca_venta` int NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `apellidos_cliente` varchar(255) NOT NULL,
  `genero` int NOT NULL,
  `medio_contacto` int NOT NULL,
  `telefono_fijo` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `fecha_vuelo` datetime NOT NULL,
  `tipo_vuelo` int NOT NULL,
  `guia` int NOT NULL,
  `motivo_vuelo` int DEFAULT NULL,
  `numero_adultos` int NOT NULL,
  `numero_ninos` int DEFAULT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `hotel` int DEFAULT NULL,
  `numero_habitaciones` int DEFAULT NULL,
  `activo` bit(1) DEFAULT b'1',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro_evento`
--

INSERT INTO `registro_evento` (`id`, `marca_venta`, `nombre_cliente`, `apellidos_cliente`, `genero`, `medio_contacto`, `telefono_fijo`, `celular`, `email`, `codigo_postal`, `fecha_vuelo`, `tipo_vuelo`, `guia`, `motivo_vuelo`, `numero_adultos`, `numero_ninos`, `check_in`, `check_out`, `hotel`, `numero_habitaciones`, `activo`, `fecha_registro`, `fecha_actualizacion`) VALUES
(1, 1, 'Javier', 'Jaimes Ruiz', 2, 1, '5585842389', '6675764534', 'javjr90@gmail.com', '55707', '2024-12-20 11:24:00', 1, 1, 1, 1, 1, '2024-12-20 11:24:00', '2024-12-20 11:24:00', 1, 1, b'1', '2024-12-20 11:30:39', '0000-00-00 00:00:00'),
(2, 1, 'Javier', 'Jaimes Ruiz', 2, 1, '5585842389', '5567654334', 'javjr90@gmail.com', '55707', '2024-12-20 12:26:00', 1, 1, 1, 11, 1, '2024-12-20 12:26:00', '2024-12-20 12:26:00', 1, 1, b'1', '2024-12-20 12:28:39', NULL),
(3, 1, 'Javier', 'Jaimes Ruiz', 2, 1, '5585842389', '5567654334', 'javjr90@gmail.com', '55707', '2024-12-20 12:47:00', 1, 1, 1, 1, 1, '2024-12-20 12:47:00', '2024-12-20 12:47:00', 1, 1, b'1', '2024-12-20 12:48:00', NULL),
(4, 1, 'Javier', 'Jaimes Ruiz', 2, 1, '5585842389', '5567654334', 'javjr90@gmail.com', '55707', '2024-12-20 12:52:00', 1, 1, 1, 1, 1, '2024-12-20 12:52:00', '2024-12-20 12:52:00', 1, 1, b'1', '2024-12-20 12:52:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_vuelo`
--

DROP TABLE IF EXISTS `tipos_vuelo`;
CREATE TABLE IF NOT EXISTS `tipos_vuelo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipovuelo` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipos_vuelo`
--

INSERT INTO `tipos_vuelo` (`id`, `tipovuelo`, `activo`) VALUES
(1, 'Comercial', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`) VALUES
(1, 'jjaimes', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
