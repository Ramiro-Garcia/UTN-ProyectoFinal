-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2020 a las 16:57:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sandraestetica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosform`
--

CREATE TABLE `datosform` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `tel` int(11) NOT NULL,
  `tratamiento` varchar(50) NOT NULL,
  `mensaje` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosform`
--

INSERT INTO `datosform` (`id`, `nombre`, `email`, `tel`, `tratamiento`, `mensaje`) VALUES
(1, 'marta', 'marta@mail.com', 1134346, 'facial2', 'AAAAAAAAA'),
(2, 'pepardo', 'mail@mail.com', 1137982666, 'facial', 'hola jaj'),
(3, 'Ramiro ', 'ramiroariel_carp@hotmail.com', 1137982669, '1', 'as'),
(4, 'Ramiro ', 'ramiroariel_carp@hotmail.com', 1137982669, '1', 'asd'),
(5, 'Ramiro ', 'ramiroariel_carp@hotmail.com', 1137982669, '1', 'asd'),
(6, 'Ramiro ', 'ramiroariel_carp@hotmail.com', 1137982669, '1', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosform`
--
ALTER TABLE `datosform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosform`
--
ALTER TABLE `datosform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
