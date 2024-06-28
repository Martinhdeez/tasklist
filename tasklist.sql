-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 12:57:12
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
-- Base de datos: `tasklist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersdb`
--

CREATE TABLE `usersdb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usersdb`
--

INSERT INTO `usersdb` (`id`, `name`, `surname`, `username`, `password`) VALUES
(1, 'martin', 'h', '1', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a'),
(2, 'x', 'x', 'x', 'a4abd4448c49562d828115d13a1fccea927f52b4d5459297f8b43e42da89238bc13626e43dcb38ddb082488927ec904fb42057443983e88585179d50551afe62'),
(3, 'Cocido', 'Sin Grelos', 'Cocido', '33275a8aa48ea918bd53a9181aa975f15ab0d0645398f5918a006d08675c1cb27d5c645dbd084eee56e675e25ba4019f2ecea37ca9e2995b49fcb12c096a032e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usersdb`
--
ALTER TABLE `usersdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usersdb`
--
ALTER TABLE `usersdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
