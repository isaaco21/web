-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2015 a las 00:46:18
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db-nike-dhtml-final-brayanheyliger`
--
CREATE DATABASE IF NOT EXISTS `db-nike-dhtml-final-brayanheyliger` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db-nike-dhtml-final-brayanheyliger`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprar`
--

CREATE TABLE IF NOT EXISTS `comprar` (
  `id_comprar` int(9) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `confirmPass` varchar(100) NOT NULL,
  `targeta` varchar(100) NOT NULL,
  `seguridad` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(9) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `usuario`, `email`, `pass`, `tipo`, `asunto`, `mensaje`) VALUES
(57, 'gsdgsdg', 'gsdgsdgsdgsd', 'sdgsd', 'dgsdg', 'gsdgsdgs', 'sdgsdgsdgs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Nombre` text NOT NULL,
  `Pedido` text NOT NULL,
  `Direccion` text NOT NULL,
  `Correo` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Nombre`, `Pedido`, `Direccion`, `Correo`, `Precio`, `Ciudad`) VALUES
('gfsdf', 'sdgf', 'jjgfhfg', 'j@hotmail.com', 49, 0),
('asfg', 'asfasf', 'asfafasfaf', 'saf', 0, 0),
('asfasf', 'asfasffasf', 'asfa', 'sfasf', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int(9) NOT NULL,
  `user` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `user`, `nombre`, `email`, `passwords`, `imagen`) VALUES
(43, 'Pepe', 'Pepe Flauta', 'Pepe-ricura@hotmail.com', '926e27eecdbc7a18858b3798ba99bddd', '5311-bill-cosby-disgusted.png'),
(44, 'jefrey', 'jefrey guzman', 'eljeff@gmail.com', 'e961b2ac40aac4cc36a8bf65bca9177e', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `Nombre` int(11) NOT NULL,
  `Ciudad` int(11) NOT NULL,
  `Direccion` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Sugerencia` int(11) NOT NULL,
  `Correo` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Queja` int(11) NOT NULL,
  `Mensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Nombre`, `Ciudad`, `Direccion`, `Numero`, `Sugerencia`, `Correo`, `Precio`, `Queja`, `Mensaje`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 44, 0, 0, 0, 0, 0, 0),
(0, 0, 584, 0, 0, 0, 0, 0, 0),
(0, 0, 584, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprar`
--
ALTER TABLE `comprar`
  ADD PRIMARY KEY (`id_comprar`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprar`
--
ALTER TABLE `comprar`
  MODIFY `id_comprar` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
