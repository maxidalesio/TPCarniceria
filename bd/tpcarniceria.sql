-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2015 a las 17:58:38
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `mail`, `clave`, `direccion`, `localidad`, `provincia`, `telefono`, `tipo`) VALUES
(9, 'Maxi', 'Dalesio', 'maxi.dalesio@gmail.com', 'algo123', 'Comodoro Rivadavia 3729', 'Sarandi', 'Buenos Aires', '01143531675', 'admin'),
(11, 'Pepe', 'Lalita', 'pepe@lalala.com', 'pepe', 'Avenida Mitre 810', 'Avellaneda', 'Buenos Aires', '42063252', 'user'),
(12, 'Jorge', 'Jorgelin', 'jorge@jorgelin.com', 'jorgito123', 'Deheza', '372', 'Sarandí', '43531222', 'user'),
(13, 'Alf', 'alfalfa', 'alf@alf.com', 'alfalf', 'Alfalfa', 'Sarandi', 'Buenos Aires', '45551212', 'user'),
(14, 'alfalf222', 'alfalfa2', 'alf@alf2.com', 'reeee', 'alfa', 'adadada', 'Jujuy', '123', 'user'),
(15, 'bbb', 'b', 'b', 'b', 'bbb', 'b', 'b', 'b', 'admin'),
(16, 'ccc', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'user'),
(17, 'ddd', 'dddd', 'd', 'd', 'd', 'd', 'd', 'd', 'user'),
(18, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'user'),
(19, 'aaaa', 'aaa', 'aaaaaa', '111111111', 'aaaa', 'aaaa', 'aaa', 'aaaaa', 'user'),
(20, 't', 't', 't', 't', 't', 't', 't', 't', 'user');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
