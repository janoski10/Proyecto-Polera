-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-06-2022 a las 19:06:36
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `poleras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenadores`
--

DROP TABLE IF EXISTS `disenadores`;
CREATE TABLE IF NOT EXISTS `disenadores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `region` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `region` (`region`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `disenadores`
--

INSERT INTO `disenadores` (`id`, `nombre`, `correo`, `contrasena`, `descripcion`, `region`) VALUES
(1, 'Tienda uno', '', '', 'lorem10', 1),
(2, 'Tienda dos', '', '', 'lorem20', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

DROP TABLE IF EXISTS `regiones`;
CREATE TABLE IF NOT EXISTS `regiones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id`, `nombre`) VALUES
(1, 'Arica y Parinacota'),
(2, 'Tarapaca'),
(3, 'Antofagasta'),
(4, 'Atacama'),
(5, 'Coquimbo'),
(6, 'Valparaiso'),
(7, 'Santiago'),
(8, 'O\'Higgins'),
(9, 'Maule'),
(10, 'BioBio'),
(11, 'Araucania'),
(12, 'Los Rios'),
(13, 'Los Lagos'),
(14, 'Aysen'),
(15, 'Magallanes');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disenadores`
--
ALTER TABLE `disenadores`
  ADD CONSTRAINT `disenadores_ibfk_1` FOREIGN KEY (`region`) REFERENCES `regiones` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
