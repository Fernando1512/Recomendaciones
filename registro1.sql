-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 27-01-2021 a las 12:24:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `TipoRecomendacion` varchar(100) NOT NULL,
  `semestre` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `materias_cursadas` varchar(100) NOT NULL,
  `materias_en_curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombres`, `apellidos`, `TipoRecomendacion`, `semestre`, `email`, `pass`, `materias_cursadas`, `materias_en_curso`) VALUES
(5, 'sofia', 'polanco', 'materia', '1', 'alexa6637@gmail.com', '123', 'probabilidad', 'calculo'),
(7, 'Andres', 'poot', 'semetre', '1', 'andres6637@gmail.com', '123', 'probabilidad', 'calculo'),
(8, 'Lilian', 'Hernandez', 'semestre', '2', 'LilianHernandez@gmail.com', '123', 'Maya', 'Web'),
(9, 'Raul', 'Pech', 'materia', '5', 'genesis@gmail.com', '123', 'algebra', 'desarollo web'),
(10, 'Alvin', 'Felipe', 'materia', '5', 'alvin@gmail.com', '123', 'algebra', 'probabilidad'),
(11, 'Drisder', 'Pech', 'semestre', '1', 'genesis1@gmail.com', '123', 'algebra', 'probabilidad'),
(12, 'Yudia', 'Poot', 'semestre', '1', 'yuridia@gmail.com', '123', 'probabilidad', 'calculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos2`
--

CREATE TABLE `datos2` (
  `id` int(11) NOT NULL,
  `semestres` varchar(20) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `referencia` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos2`
--

INSERT INTO `datos2` (`id`, `semestres`, `materia`, `referencia`) VALUES
(1, '1', 'ALGEBRA INTERMEDIA', 'Andreescu, T. & Andrica, D. (2014). Complex Numbers from a to … Z. Boston MA: Birkhäuser.\r\n'),
(2, '1', 'ALGEBRA INTERMEDIA', 'Churchil, R. V. &Brown, J.W. (2008). Complex Variables and applications. (7th. Ed.). McGraw-Hill.\r\n'),
(3, '1', 'ALGEBRA INTERMEDIA', 'De Oteysa, E. (2010). Álgebra. México: Prentice Hall.\r\n'),
(4, '1', 'ALGEBRA INTERMEDIA', 'Fuller, G. (2000). Álgebra Elemental. México: Compañía Editorial Continental. (clásico)\r\n'),
(5, '1', 'ALGEBRA INTERMEDIA', 'Gustafson D. (2008). Álgebra Intermedia. México: Internacional Thomson Editores.'),
(6, '5', 'Probabilidad', 'Gstabo agailar .probabilidad'),
(7, '6', 'Estadistica', 'Fer estadistica'),
(8, '2', 'Maya', 'Victor'),
(9, '5', 'estadistica', 'estadi'),
(10, '2', 'algebra', 'alge');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos3`
--

CREATE TABLE `datos3` (
  `ID` int(20) NOT NULL,
  `pregunta1` varchar(60) NOT NULL,
  `pregunta2` varchar(60) NOT NULL,
  `pregunta3` varchar(60) NOT NULL,
  `pregunta4` varchar(60) NOT NULL,
  `pregunta5` varchar(60) NOT NULL,
  `pregunta6` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos3`
--

INSERT INTO `datos3` (`ID`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'buena'),
(2, 'on', 'on', 'on', 'on', 'on', 'buena'),
(3, 'on', 'on', 'on', 'on', 'on', 'prueba'),
(4, 'si', 'si', 'si', 'si', 'si', 'prueba'),
(5, 'si', 'si', 'no', 'si', 'no', 'otra respuesta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `datos` ADD FULLTEXT KEY `nombres` (`nombres`);

--
-- Indices de la tabla `datos2`
--
ALTER TABLE `datos2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos3`
--
ALTER TABLE `datos3`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `datos2`
--
ALTER TABLE `datos2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `datos3`
--
ALTER TABLE `datos3`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
