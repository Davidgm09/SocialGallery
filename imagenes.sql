-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 16:50:44
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imagenes`
--
CREATE DATABASE IF NOT EXISTS `imagenes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `imagenes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `titulo_imagen` varchar(50) NOT NULL,
  `link_imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`titulo_imagen`, `link_imagen`) VALUES
('Agujero negro', './web/galeria/agujeronegro.jpg'),
('Planeta Tierra', './web/galeria/tierra.jpg'),
('Galaxia Bode', './web/galeria/galaxiaBode.jpg'),
('Planeta Marte', './web/galeria/marte.jpg'),
('Sol', './web/galeria/sol.jpg'),
('Luna', './web/galeria/lunaazul.jpg'),
('Estrella Fugaz', './web/galeria/estrellafugaz.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
