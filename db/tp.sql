-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2015 a las 01:46:17
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp`
--
CREATE DATABASE IF NOT EXISTS `tp` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `tp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE IF NOT EXISTS `encuestas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `fecha` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `p1` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `p2` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `p3` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `p4` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `p5` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `p6` varchar(350) COLLATE latin1_spanish_ci NOT NULL,
  `p7` varchar(350) COLLATE latin1_spanish_ci NOT NULL,
  `p8` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `p9` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `idUsuario`, `idLocal`, `fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`) VALUES
(19, 10, 2, '07-12-2015', 'true', 'false', 'Sucio', 'false', 'Muy rápido', 'false/true/true/false/', 'true/false/false/true/false/', 'true', 'false'),
(22, 10, 2, '07-12-2015', 'false', 'false', 'Limpio', 'false', 'Muy lento', 'false/true/true/false/', 'true/true/false/false/false/', 'false', 'false'),
(24, 10, 8, '08-12-2015', 'false', 'true', 'Sucio', 'true', 'Muy lento', 'false/true/false/true/Optica', 'true/false/true/true/false/', 'false', 'true'),
(25, 11, 9, '08-12-2015', 'false', 'true', 'Sucio', 'false', 'Regular', 'false/true/true/false/', 'true/false/true/true/false/', 'false', 'true'),
(26, 10, 1, '08-12-2015', 'false', 'false', 'Muy sucio', 'false', 'Muy lento', 'true/true/false/false/', 'false/false/true/false/false/', 'true', 'false'),
(27, 11, 9, '08-12-2015', 'false', 'false', 'Regular', 'false', 'Muy rápido', 'false/true/true/true/Optica', 'false/true/true/true/false/', 'false', 'false'),
(28, 11, 2, '08-12-2015', 'false', 'true', 'Muy limpio', 'false', 'Muy lento', 'true/true/false/false/', 'true/true/false/false/false/', 'false', 'false');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `provincia` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `localidad` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`id`, `descripcion`, `provincia`, `localidad`, `direccion`, `telefono`, `foto`) VALUES
(1, 'Local Uno', 'Buenos Aires', 'Lanús Oeste', 'Senador Pallares 1794', '8888-8888', 'Local Uno - Senador Pallares 1794.jpg'),
(2, 'Local Dos', 'Buenos Aires', 'Avellaneda', 'Ushuaia 382', '5555-5555', 'Local Dos - Ushuaia 382.jpg'),
(8, 'Local Tres', 'Buenos Aires', 'Lanús Oeste', 'Formosa 1727', '3333-3333', 'Local Tres - Formosa 1727.jpg'),
(9, 'Local Cuatro', 'Buenos Aires', 'Lanús Oeste', 'Hipolito Yrigoyen 4883', '4444-4444', 'Local Cuatro - Hipolito Yrigoyen 4883.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `mail`, `clave`, `nombre`, `apellido`, `dni`, `direccion`, `telefono`, `tipo`) VALUES
(9, 'msimonetti@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 'Martín', 'Simonetti', 31469095, 'Senador Pallares 1794', '1111-1111', 'admin'),
(10, 'a@a.com', '6f9b0a55df8ac28564cb9f63a10be8af6ab3f7c2', 'Federico', 'Sauzza', 1000001, 'Casazza 266', '2222-2222', 'user'),
(11, 'm@m.com', '6041f39e61116a98ca129f78dd0b6027929d42aa', 'Marta', 'Biasotti', 10305741, 'Senador Pallares 1794', '7777-7777', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
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
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
