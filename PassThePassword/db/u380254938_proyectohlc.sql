-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-03-2022 a las 16:26:01
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u380254938_proyectohlc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `password`
--

INSERT INTO `password` (`id`, `password`) VALUES
(60, ')P*kloxW'),
(61, ')P*kloxW'),
(62, ''),
(63, 'nvjasdopqoe29'),
(64, '1#kU2bNN'),
(65, 'Pw*xRgNz'),
(66, 'Pw*xRgNz'),
(67, 'Pw*xRgNz'),
(68, 'Pw*xRgNz'),
(69, '_(@^%$$_'),
(70, '_(@^%$$_'),
(71, '_(@^%$$_'),
(72, 'asd'),
(73, ''),
(74, 'as'),
(75, 'asd'),
(76, '_(@^%$$_'),
(77, '_(@^%$$_'),
(78, '_(@^%$$_'),
(79, '_(@^%$$_'),
(80, '_(@^%$$_'),
(81, '_(@^%$$_'),
(82, 'ptBHHu8M'),
(83, 'ptBHHu8M'),
(84, 'ptBHHu8M'),
(85, 'ptBHHu8M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
