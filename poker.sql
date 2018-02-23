-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-02-2018 a las 22:52:08
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `poker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

DROP TABLE IF EXISTS `jugador`;
CREATE TABLE IF NOT EXISTS `jugador` (
  `id_jugador` int(15) NOT NULL AUTO_INCREMENT,
  `nick` varchar(25) NOT NULL,
  `fichas` int(20) DEFAULT NULL,
  `posicion` varchar(20) DEFAULT NULL,
  `apuesta` int(25) DEFAULT NULL,
  `fold` tinyint(1) DEFAULT NULL,
  `pasar` tinyint(1) DEFAULT NULL,
  `cod_mesa` varchar(25) NOT NULL,
  `ganador` tinyint(1) DEFAULT NULL,
  `cod_correcto` tinyint(1) DEFAULT NULL,
  `administrador` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_jugador`),
  UNIQUE KEY `nombre` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manos`
--

DROP TABLE IF EXISTS `manos`;
CREATE TABLE IF NOT EXISTS `manos` (
  `orden` varchar(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_mano` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_mano`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `manos`
--

INSERT INTO `manos` (`orden`, `nombre`, `id_mano`) VALUES
('1', 'Carta Alta', 1),
('2', 'Pareja', 2),
('3', 'Doble pareja', 3),
('4', 'Trio', 4),
('5', 'Escalera', 5),
('6', 'Color', 6),
('7', 'Full', 7),
('8', 'Poker', 8),
('9', 'Escalera de color', 9),
('10', 'Escalera de color real', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

DROP TABLE IF EXISTS `mesa`;
CREATE TABLE IF NOT EXISTS `mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `fichas_ini` int(20) NOT NULL,
  `ciega_grande` decimal(10,0) NOT NULL,
  `tiempo` int(2) NOT NULL,
  `ciega_peque` decimal(10,0) NOT NULL,
  `recompra` tinyint(1) NOT NULL,
  `codigo_mesa` varchar(10) NOT NULL,
  `nick` varchar(25) NOT NULL,
  `numero_jugadores` int(1) NOT NULL,
  PRIMARY KEY (`id_mesa`),
  UNIQUE KEY `codigo_mesa` (`codigo_mesa`),
  UNIQUE KEY `nombre` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
