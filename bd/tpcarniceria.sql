-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2015 a las 20:59:48
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tpcarniceria`
--
CREATE DATABASE IF NOT EXISTS `tpcarniceria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tpcarniceria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `info` varchar(50) DEFAULT NULL,
  `precio` float NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `mail`, `clave`, `direccion`, `localidad`, `provincia`, `telefono`, `tipo`) VALUES
(9, 'Maxi', 'Dalesio', 'maxi.dalesio@gmail.com', 'e3ae69b7485a1ba5dfec809789d8a55b', 'Comodoro Rivadavia 3729', 'Sarandi', 'Buenos Aires', '01143531675', 'admin'),
(25, 'Pepe', 'Pepino', 'pepe@lalala.com', '28f2b95533afb47cbec1d823b0f1a941', 'Avenida Mitre 810', 'Avellaneda', 'Buenos Aires', '43531222', 'user'),
(26, 'Alf', 'Alfito', 'alf@alf.com', '893f53c159eab9178ab181bad8da4262', 'Cassazza 332', 'Villa Dominico', 'Buenos Aires', '43321122', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
