-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2015 a las 17:47:12
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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `retiro` varchar(15) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `fecha`, `retiro`, `total`, `idusuario`) VALUES
(3, '2015-12-18', 'sucursal', 800, 25),
(4, '2015-12-19', 'sucursal', 1000, 25),
(5, '2015-12-19', 'domicilio', 900, 25),
(6, '2015-12-17', 'sucursal', 900, 25),
(7, '2015-12-19', 'sucursal', 600, 25),
(8, '2015-12-25', 'sucursal', 500, 25),
(9, '2015-12-26', 'sucursal', 700, 25),
(11, '2015-12-22', 'sucursal', 1500, 25),
(13, '2015-12-30', 'sucursal', 600, 25),
(14, '2015-12-25', 'domicilio', 300, 25),
(15, '2015-12-24', 'sucursal', 600, 25),
(16, '2015-12-29', 'sucursal', 400, 25),
(17, '2015-12-30', 'sucursal', 2500, 25),
(18, '2015-12-18', 'domicilio', 1700, 25),
(19, '2015-12-31', 'sucursal', 4000, 25),
(20, '2015-12-29', 'sucursal', 2300, 25),
(21, '2015-12-31', 'sucursal', 200, 25),
(22, '2015-12-15', 'domicilio', 11739, 27),
(23, '2015-12-25', 'sucursal', 1500, 28),
(24, '2015-12-23', 'sucursal', 1500, 28);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
