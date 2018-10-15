-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2018 a las 03:07:23
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pw` varchar(165) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bichos`
--

CREATE TABLE `bichos` (
  `id` int(11) NOT NULL,
  `imagen` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `nom_pokemon` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bichos`
--

INSERT INTO `bichos` (`id`, `imagen`, `nom_pokemon`, `tipo`) VALUES
(1, 'recursos/img/bulbasaur.png', 'Bulbasaur', 'planta'),
(2, 'recursos/img/ivysaur.png', 'Ivysaur', 'planta'),
(3, 'recursos/img/charmander.png', 'Charmander', 'fuego'),
(4, 'recursos/img/charmeleon.png', 'Charmeleon', 'fuego'),
(5, 'recursos/img/squirtle.png', 'Squirtle', 'agua'),
(6, 'recursos/img/wartortle.png', 'Wartortle', 'agua'),
(7, 'recursos/img/pikachu.png', 'Pikachu', 'eléctrico'),
(8, 'recursos/img/pidgeot.png', 'Pidgeot', 'volador'),
(9, 'recursos/img/greninja.png', 'Greninja', 'agua - siniestro'),
(11, 'recursos/img/charizard.png', 'Charizard', 'fuego'),
(19, 'recursos/img/togepi.png', 'Togepi', 'agua');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bichos`
--
ALTER TABLE `bichos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nom_pokemon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bichos`
--
ALTER TABLE `bichos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
