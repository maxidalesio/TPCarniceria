-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2015 a las 17:47:06
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE IF NOT EXISTS `detallepedido` (
  `idpedido` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idpedido`, `id`, `cantidad`) VALUES
(3, 1, 2),
(3, 3, 1),
(4, 1, 2),
(4, 3, 2),
(5, 1, 3),
(6, 1, 3),
(7, 1, 2),
(8, 1, 1),
(8, 3, 1),
(9, 1, 1),
(9, 3, 2),
(11, 1, 5),
(13, 3, 3),
(14, 1, 1),
(15, 1, 2),
(16, 3, 2),
(17, 1, 5),
(17, 3, 5),
(18, 1, 3),
(18, 3, 4),
(19, 1, 8),
(19, 3, 8),
(20, 1, 3),
(20, 3, 7),
(21, 3, 1),
(22, 1, 1),
(22, 3, 3),
(22, 6, 2),
(22, 7, 1),
(23, 1, 3),
(23, 3, 3),
(24, 1, 3),
(24, 3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idpedido`,`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
