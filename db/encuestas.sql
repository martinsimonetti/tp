-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2015 a las 01:47:34
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
