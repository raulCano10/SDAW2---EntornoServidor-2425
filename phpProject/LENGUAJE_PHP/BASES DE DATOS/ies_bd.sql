-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2025 a las 13:02:35
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
-- Base de datos: `ies_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL CHECK (`edad` >= 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `telefono`, `direccion`, `email`, `edad`) VALUES
(1, 'Carlos', 'Pérez López', '654321987', 'Calle Mayor 1, Madrid', 'carlos.perez@email.com', 18),
(2, 'María', 'González Fernández', '612345678', 'Av. España 23, Barcelona', 'maria.gonzalez@email.com', 20),
(3, 'Juan', 'Martínez Díaz', '698765432', 'Paseo de la Castellana 45, Madrid', 'juan.martinez@email.com', 22),
(4, 'Laura', 'Sánchez Rodríguez', '678123456', 'Calle Gran Vía 12, Valencia', 'laura.sanchez@email.com', 19),
(5, 'Pedro', 'López García', '654987321', 'Calle del Sol 5, Sevilla', 'pedro.lopez@email.com', 21),
(6, 'Ana', 'Fernández Martínez', '667890123', 'Plaza Mayor 8, Bilbao', 'ana.fernandez@email.com', 20),
(7, 'David', 'Ramírez Torres', '645678234', 'Calle Luna 16, Zaragoza', 'david.ramirez@email.com', 23),
(8, 'Elena', 'Díaz Ruiz', '633456789', 'Av. Andalucía 31, Granada', 'elena.diaz@email.com', 22),
(9, 'Sergio', 'Molina Castro', '698234567', 'Calle Real 78, Murcia', 'sergio.molina@email.com', 19),
(10, 'Carmen', 'Ortega Jiménez', '612345987', 'Paseo del Prado 99, Madrid', 'carmen.ortega@email.com', 21),
(11, 'Francisco', 'Ruiz Morales', '677654321', 'Calle Nueva 11, Cádiz', 'francisco.ruiz@email.com', 20),
(12, 'Isabel', 'Hernández Cano', '654321654', 'Calle del Mar 22, Alicante', 'isabel.hernandez@email.com', 22),
(13, 'Miguel', 'Navarro Pérez', '698765098', 'Av. Libertad 44, Valencia', 'miguel.navarro@email.com', 19),
(14, 'Patricia', 'Vega López', '678912345', 'Calle Sevilla 9, Málaga', 'patricia.vega@email.com', 23),
(15, 'Javier', 'Castro Gómez', '612398765', 'Calle Central 30, Salamanca', 'javier.castro@email.com', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL CHECK (`edad` >= 0),
  `asignatura` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellidos`, `telefono`, `direccion`, `email`, `edad`, `asignatura`) VALUES
(1, 'Antonio', 'Serrano Torres', '699123456', 'Calle Mayor 4, Madrid', 'antonio.serrano@email.com', 40, 'Matemáticas'),
(2, 'Beatriz', 'López Ruiz', '698765432', 'Av. España 50, Barcelona', 'beatriz.lopez@email.com', 35, 'Física'),
(3, 'Manuel', 'Fernández Castro', '677098765', 'Paseo del Sol 20, Valencia', 'manuel.fernandez@email.com', 45, 'Química'),
(4, 'Susana', 'García Pérez', '644321987', 'Calle Luna 12, Sevilla', 'susana.garcia@email.com', 38, 'Biología'),
(5, 'Jorge', 'Martínez Ortega', '612987654', 'Av. Andalucía 5, Granada', 'jorge.martinez@email.com', 50, 'Historia'),
(6, 'Rosa', 'Sánchez Díaz', '667654321', 'Calle del Mar 9, Alicante', 'rosa.sanchez@email.com', 42, 'Geografía'),
(7, 'Fernando', 'Ramírez Jiménez', '633123789', 'Plaza Mayor 15, Bilbao', 'fernando.ramirez@email.com', 37, 'Lengua y Literatura'),
(8, 'Clara', 'Molina Vega', '698234890', 'Calle Real 25, Murcia', 'clara.molina@email.com', 41, 'Inglés'),
(9, 'Raúl', 'Ortega Cano', '612345678', 'Paseo del Prado 75, Madrid', 'raul.ortega@email.com', 39, 'Educación Física'),
(10, 'Marta', 'Díaz Navarro', '654678912', 'Calle Nueva 100, Cádiz', 'marta.diaz@email.com', 36, 'Economía'),
(11, 'Pedro', 'Ruiz Morales', '677456123', 'Calle Sevilla 33, Málaga', 'pedro.ruiz@email.com', 44, 'Tecnología'),
(12, 'Elisa', 'Hernández Gómez', '698123456', 'Av. Libertad 80, Valencia', 'elisa.hernandez@email.com', 48, 'Filosofía'),
(13, 'Daniel', 'Navarro Pérez', '678912345', 'Calle Central 70, Salamanca', 'daniel.navarro@email.com', 43, 'Música'),
(14, 'Natalia', 'Castro Rodríguez', '612398765', 'Calle del Sol 8, Zaragoza', 'natalia.castro@email.com', 47, 'Dibujo Técnico'),
(15, 'José', 'Vega López', '654321987', 'Calle del Mar 22, Alicante', 'jose.vega@email.com', 49, 'Informática');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
