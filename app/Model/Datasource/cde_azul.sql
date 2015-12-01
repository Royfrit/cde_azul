-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2015 a las 03:15:52
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cde_azul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ced` int(11) NOT NULL,
  `nombres` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_nac` date NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipotlf` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tlf` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ced`, `nombres`, `apellidos`, `Fecha_nac`, `Direccion`, `tipotlf`, `tlf`, `email`, `password`, `role`, `sede`, `status`) VALUES
(1, 2095867, 'Lee Mark', 'Saturno Ynojosa', '1993-01-04', 'Maracay', 'Movil', '(0412)4006946', 'msaturno18@gmail.com', '$2a$10$zHtFC9SBtnzpKTbPqWg8K.L7n2MHQaIdeaLstD7lFGVri/qHeTi6a', 'Adminstrador', 'San Juan de los morros', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
