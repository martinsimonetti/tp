-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2015 a las 01:47:47
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
