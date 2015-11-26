-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 21:43:48
-- Versión del servidor: 5.5.39-MariaDB
-- Versión de PHP: 5.5.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carritocompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` varchar(20) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'comida de gato', 'comida de gato', 'wishkas.jpg', 20),
(2, 'atun de gato', 'atun de gato', 'atun.jpg', 5),
(3, 'atun de perro', 'atun de perro', 'monge.jpg', 7),
(4, 'mimaskot', 'mimaskot', 'mimaskot.jpg', 30),
(5, 'Shampoo Amigo', 'Shampoo Amigo', 'amigo.jpg', 15),
(6, 'Shampoo hery', 'Shampoo hery', 'hery.jpg', 10),
(7, 'Shampoo tidy', 'Shampoo tidy', 'tidy.jpg', 12),
(8, 'Shampoo biazoo', 'Shampoo biazoo', 'biazoo.jpg', 8),
(9, 'cama para gatos', 'cama para gatos', 'camagato.jpg', 40),
(10, 'cama para perros', 'cama para perros', 'cama_perro.jpg', 50),
(11, 'casa para conejos', 'casa para conejos', 'casaconejo.jpg', 50),
(12, 'casa para pericos', 'casa para pericos', 'casapericos.jpg', 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
