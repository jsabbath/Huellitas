-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2014 a las 01:39:49
-- Versión del servidor: 5.5.39-MariaDB
-- Versión de PHP: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `huellotasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(3) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dni` varchar(7) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mascota` varchar(30) CHARACTER SET utf8 NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(1) CHARACTER SET utf8 NOT NULL,
  `color` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `dni`, `direccion`, `mascota`, `edad`, `sexo`, `color`, `usuario`, `password`, `correo`) VALUES
(122, 'gina', '4587123', 'mz fgyte34r', 'rupert', 1, '', 'amarillo', 'gina', '123', 'gina_xy-1@hotmail.com'),
(124, 'manuel', '7148015', 'mz fgyte34r', 'rupert', 1, '', 'amarillo', 'manuelcha', '123', 'manuel_elintelectual@hotmail.com'),
(125, '', '', '', '', 0, '', '', '', '', ''),
(126, '', '', '', '', 0, '', '', '', '', ''),
(127, '', '', '', '', 0, '', '', '', '', ''),
(128, 'manuel', '1234567', 'sdhfsfhkj', 'rupert', 12, 'M', 'marron', 'root', 'abc123', 'dfdhdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
