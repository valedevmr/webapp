-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2021 a las 05:44:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` varchar(14) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `direccion`, `telefono`, `website`) VALUES
('POIU987654ET5', 'MEXICO CITY', '5512457845', 'WWW.SITE.MOVIL.MX'),
('POIU987654ET2', 'pueblaY', '551242345', 'WWW.SITE.MOVIL.MX'),
('jhdhffdsdfs', NULL, NULL, NULL),
('AVER123456TRF', NULL, NULL, NULL),
('WERT123456YTR', '5576', 'asdasdasdasd', 'WERT123456YTR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webapp`
--

CREATE TABLE `webapp` (
  `rfc` varchar(14) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `webapp`
--

INSERT INTO `webapp` (`rfc`, `nombre`, `correo`, `contrasena`) VALUES
('AVER123456TRF', 'Avelardo nuevomix', 'lfsdklsdf@poksdfjsdf.com', '963258741'),
('MORT9876543TER', 'crstian sanchez', 'cristian@correo.com', '963258741'),
('POIU987654ET2', 'asdasd', 'asdasd@wewe.cdc', '963258741'),
('POIU987654ET5', 'JUSTINO BIEBER', 'CORREo@correo.com', '12345678'),
('QWER123456QW2', 'asdasdAas', 'corre@dfereo.cd', '963258741'),
('QWER123456QWE', 'asdasdAas', 'corre@dfereo.cd', '963258741'),
('VALD1234567DF', 'valod', 'correo@val.com', '963258741'),
('WERT123456R12', 'ronaldo', 'CORRO@correo.com', '963258741'),
('WERT123456RTF', 'ronaldo', 'CORRO@correo.com', '963258741'),
('WERT123456WER', 'valedor', 'corre@nuevo.com', '963258741'),
('WERT123456YTR', 'cristobal marin', 'hdhdhd@he.cpm', '963258741');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `webapp`
--
ALTER TABLE `webapp`
  ADD PRIMARY KEY (`rfc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
