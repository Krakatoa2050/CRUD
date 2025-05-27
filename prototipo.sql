-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2025 a las 19:47:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prototipo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `usuario`, `correo`, `contra`) VALUES
(1, 'angie', 'angie@gmail.com', '$2y$10$tO324zLgUqLq3ax19G.qVeetL6yBHvmkpVsOGGIBwJ2vQLK8arfWK'),
(2, 'roberto', 'roberto@gmail.com', '$2y$10$bmvbUaGmtjrahjIjlJgdjeDMjdRWTOy6S0rlhWIV30Bqi7pMes01q'),
(3, 'fabricio', 'fabricio@gmail.com', '$2y$10$tQHVvOrs2jRIh3rEnXhsJeu0eOf7SH5ImUU8dKvt2c6fVu.RlOZcG'),
(4, 'juan', 'juan@gmail.com', '$2y$10$bx9H/njUMZ8zd9fwDyotReegHBJNtVs8Fv6GSMXKTPRh9bLC/XbW6'),
(5, 'santi', 'santi@gmail.com', '$2y$10$HJm6JbXDYQ.XsxaxfSWpBupfi9y6LrsShP7A4xNF4t5U/AoP0.Zw2'),
(6, '<script>echo\"hola\"</script>', '21213321@gmail.com', '$2y$10$hfRcJL3j2fm0dkVuefYPMuD/nPvUJp6.h3zMs7h0c74smWhjwMD8S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
