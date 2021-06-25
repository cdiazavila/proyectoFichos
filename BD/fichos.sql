-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2021 a las 01:11:51
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fichos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cc` varchar(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `carrera` varchar(300) NOT NULL,
  `saldo` int(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cc`, `nombres`, `apellidos`, `carrera`, `saldo`, `usuario`, `pass`) VALUES
('1063164419', 'Gloria Ines ', 'Anaya Doria', 'Ingenieria En sistema ', 7000, '@gloria', '1111'),
('1063726', 'Carlos', 'Diaz', 'Ing en sistemas', 2000, 'carlos@', '1234'),
('1111', 'Natalia ', 'Doria', 'Admin en salud', 5000, 'nati@1234', 'nataliaDoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficho`
--

CREATE TABLE `ficho` (
  `id` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `costo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficho`
--

INSERT INTO `ficho` (`id`, `nombre`, `costo`) VALUES
(1, 'ficho unicor ', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numeroFichos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `nombre`, `numeroFichos`) VALUES
(1, 'Lorica', 100),
(2, 'Monteria', 500),
(3, 'Sahagun', 150),
(4, 'Berastegui', 100),
(5, 'moñitos', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasfichos`
--

CREATE TABLE `ventasfichos` (
  `id` int(20) NOT NULL,
  `idE` varchar(20) NOT NULL,
  `idS` int(20) NOT NULL,
  `idF` int(20) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `numeroSemestre` varchar(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventasfichos`
--

INSERT INTO `ventasfichos` (`id`, `idE`, `idS`, `idF`, `carrera`, `numeroSemestre`, `fecha`) VALUES
(65, '1111', 2, 1, 'admin en salud ', 'III', '2021-05-12'),
(66, '1111', 1, 1, 'admin en salud', 'VI', '2021-06-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cc`),
  ADD UNIQUE KEY `cc` (`cc`);

--
-- Indices de la tabla `ficho`
--
ALTER TABLE `ficho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventasfichos`
--
ALTER TABLE `ventasfichos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idE` (`idE`),
  ADD KEY `idS` (`idS`),
  ADD KEY `idF` (`idF`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficho`
--
ALTER TABLE `ficho`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventasfichos`
--
ALTER TABLE `ventasfichos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventasfichos`
--
ALTER TABLE `ventasfichos`
  ADD CONSTRAINT `ventasfichos_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `estudiante` (`cc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventasfichos_ibfk_2` FOREIGN KEY (`idS`) REFERENCES `sede` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventasfichos_ibfk_3` FOREIGN KEY (`idF`) REFERENCES `ficho` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
