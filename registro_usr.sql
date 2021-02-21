-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2021 a las 01:06:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_usr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID_usr` int(11) NOT NULL,
  `Nombre_usr` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Apellido_usr` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Correo_usr` varchar(125) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Status_usr` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Observaciones_usr` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID_usr`, `Nombre_usr`, `Apellido_usr`, `Correo_usr`, `Status_usr`, `Observaciones_usr`) VALUES
(10, 'Marco', 'Martinez', 'marcogaytan348@gmail.com', 'Activo', 'Prueba 1'),
(11, 'Adrian', 'Mtz', 'Adrian11234@gmail.com', 'Activo', 'Prueba 2'),
(12, 'Benjamin', 'Casas', 'benjamincasasmtz32@gmail.com', 'Activo', 'Prueba 3'),
(13, 'Gaby', 'Lopez', 'Gaby12345@gmail.com', 'Activo', 'Prueba4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
