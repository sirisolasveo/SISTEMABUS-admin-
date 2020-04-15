	-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2020 a las 22:05:47
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemabus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buschancas`
--

CREATE TABLE `buschancas` (
  `numero` varchar(20) NOT NULL,
  `estado1` varchar(20) NOT NULL,
  `estado2` varchar(20) NOT NULL,
  `estado3` varchar(20) NOT NULL,
  `estado4` varchar(20) NOT NULL,
  `reservado1` varchar(50) NOT NULL,
  `reservado2` varchar(20) NOT NULL,
  `reservado3` varchar(20) NOT NULL,
  `reservado4` varchar(20) NOT NULL,
  `comprado1` varchar(20) NOT NULL,
  `comprado2` varchar(20) NOT NULL,
  `comprado3` varchar(20) NOT NULL,
  `comprado4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buschancas`
--

INSERT INTO `buschancas` (`numero`, `estado1`, `estado2`, `estado3`, `estado4`, `reservado1`, `reservado2`, `reservado3`, `reservado4`, `comprado1`, `comprado2`, `comprado3`, `comprado4`) VALUES
('1', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('2', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('3', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('4', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('5', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('6', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('7', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('8', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('9', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('10', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('11', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('12', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('13', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('14', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('15', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('16', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('17', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('18', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('19', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('20', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('21', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('22', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('23', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('24', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('25', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('26', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('27', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('28', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('29', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('30', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('31', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('32', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('33', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('34', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('35', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('36', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('37', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('38', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('39', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('40', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('41', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('42', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('43', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('44', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('45', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('46', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('47', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('48', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('49', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('50', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busciva`
--

CREATE TABLE `busciva` (
  `numero` varchar(20) NOT NULL,
  `estado1` varchar(20) NOT NULL,
  `estado2` varchar(20) NOT NULL,
  `estado3` varchar(20) NOT NULL,
  `estado4` varchar(20) NOT NULL,
  `reservado1` varchar(50) NOT NULL,
  `reservado2` varchar(20) NOT NULL,
  `reservado3` varchar(20) NOT NULL,
  `reservado4` varchar(20) NOT NULL,
  `comprado1` varchar(20) NOT NULL,
  `comprado2` varchar(20) NOT NULL,
  `comprado3` varchar(20) NOT NULL,
  `comprado4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `busciva`
--

INSERT INTO `busciva` (`numero`, `estado1`, `estado2`, `estado3`, `estado4`, `reservado1`, `reservado2`, `reservado3`, `reservado4`, `comprado1`, `comprado2`, `comprado3`, `comprado4`) VALUES
('1', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('2', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('3', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('4', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('5', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('6', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('7', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('8', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('9', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('10', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('11', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('12', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('13', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('14', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('15', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('16', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('17', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('18', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('19', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('20', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('21', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('22', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('23', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('24', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('25', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('26', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('27', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('28', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('29', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('30', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('31', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('32', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('33', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('34', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('35', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('36', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('37', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('38', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('39', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('40', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('41', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('42', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('43', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('44', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('45', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('46', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('47', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('48', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('49', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('50', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buspalomino`
--

CREATE TABLE `buspalomino` (
  `numero` varchar(20) NOT NULL,
  `estado1` varchar(20) NOT NULL,
  `estado2` varchar(20) NOT NULL,
  `estado3` varchar(20) NOT NULL,
  `estado4` varchar(20) NOT NULL,
  `reservado1` varchar(50) NOT NULL,
  `reservado2` varchar(20) NOT NULL,
  `reservado3` varchar(20) NOT NULL,
  `reservado4` varchar(20) NOT NULL,
  `comprado1` varchar(20) NOT NULL,
  `comprado2` varchar(20) NOT NULL,
  `comprado3` varchar(20) NOT NULL,
  `comprado4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buspalomino`
--

INSERT INTO `buspalomino` (`numero`, `estado1`, `estado2`, `estado3`, `estado4`, `reservado1`, `reservado2`, `reservado3`, `reservado4`, `comprado1`, `comprado2`, `comprado3`, `comprado4`) VALUES
('1', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('2', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('3', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('4', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('5', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('6', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('7', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('8', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('9', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('10', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('11', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('12', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('13', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('14', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('15', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('16', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('17', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('18', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('19', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('20', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('21', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('22', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('23', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('24', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('25', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('26', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('27', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('28', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('29', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('30', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('31', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('32', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('33', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('34', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('35', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('36', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('37', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('38', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('39', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('40', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('41', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('42', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('43', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('44', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('45', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('46', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('47', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('48', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('49', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', ''),
('50', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`) VALUES
(1, 'CIVA'),
(2, 'CHANCAS'),
(3, 'PALOMINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_reservas`
--

CREATE TABLE `lista_reservas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `destino` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `costo` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `reservador` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_reservas`
--

INSERT INTO `lista_reservas` (`id`, `empresa`, `destino`, `hora`, `costo`, `fecha`, `reservador`) VALUES
(21, 'busciva', 'LIMA', '3:00 PM', 50, '03/04/20', 'dario@gmail.com'),
(22, 'busciva', 'CUSCO', '9:30 PM', 90, '15/04/20', 'dario@gmail.com'),
(23, 'busciva', 'CUSCO', '9:30 PM', 90, '15/04/20', 'dario@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `lugar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `lugar`) VALUES
(1, 'CUSCO'),
(2, 'LIMA'),
(3, 'HUANUCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `destino` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`id`, `empresa`, `destino`, `hora`, `costo`) VALUES
(1, 'CIVA', 1, '9:30 PM', 90),
(1, 'CIVA', 2, '3:00 PM', 50),
(1, 'CIVA', 3, '9:30 PM', 90),
(1, 'CHANCAS', 2, '10:39 AM', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `celular` int(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `nombre`, `apellidos`, `direccion`, `celular`, `correo`, `password`) VALUES
(16, 777232, 'mario', 'vega colores', 'av  los limones', 949842326, 'dario@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 79233421, 'dolores', 'vega colores', 'av  los limones', 949842326, 'sirisolasveo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_administrador`
--

CREATE TABLE `usuarios_administrador` (
  `id` int(11) NOT NULL,
  `nombreEmpresa` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `dni` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_administrador`
--

INSERT INTO `usuarios_administrador` (`id`, `nombreEmpresa`, `nombre`, `apellido`, `dni`, `numero`, `email`, `usuario`, `password`) VALUES
(11, 1, 'mario', 'vega colores', 1212121212, 949842326, 'rvcromario@gmail.com', 'romario', '202cb962ac59075b964b07152d234b70'),
(13, 2, 'nolberto', 'vega colores', 1235739, 949842326, 'nolberto@gmail.com', 'nolberto', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_reservas`
--
ALTER TABLE `lista_reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD KEY `destino` (`destino`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_administrador`
--
ALTER TABLE `usuarios_administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombreEmpresa` (`nombreEmpresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lista_reservas`
--
ALTER TABLE `lista_reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios_administrador`
--
ALTER TABLE `usuarios_administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`destino`) REFERENCES `lugares` (`id`);

--
-- Filtros para la tabla `usuarios_administrador`
--
ALTER TABLE `usuarios_administrador`
  ADD CONSTRAINT `usuarios_administrador_ibfk_1` FOREIGN KEY (`nombreEmpresa`) REFERENCES `empresas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
