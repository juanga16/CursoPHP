-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2019 a las 21:35:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `idDeportes` int(11) NOT NULL,
  `deporte` varchar(50) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`idDeportes`, `deporte`) VALUES
(2, 'ninguno'),
(4, 'futbol'),
(5, 'Voley'),
(6, 'Hockey'),
(9, 'Natacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(100) NOT NULL,
  `genero` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `telefono` bigint(50) NOT NULL,
  `vitalicio` tinyint(1) NOT NULL,
  `imagen` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `idDeporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `apellido`, `fecha_nacimiento`, `edad`, `genero`, `email`, `telefono`, `vitalicio`, `imagen`, `idDeporte`) VALUES
(122, 'Alba', 'Quiros', '1992-09-02', 26, 'femenino', 'alba@gmail.com', 2926457898, 1, 'socio_122.jpg', 5),
(129, 'ignacio', 'Ortiz', '1989-05-11', 29, 'masculino ', 'ignacioOrtiz@gmail.com', 2926485962, 0, 'socio_129.jpg', 6),
(130, 'Delfina ', 'Pignatiello', '1996-05-08', 22, 'femenino', 'delfinaPignatiello@gmail.com', 432031, 0, 'socio_130.jpg', 2),
(131, 'Gaston', 'Fernandez', '1987-05-04', 31, 'masculino ', 'gastonFernandez@gmail.com', 2597865, 0, 'socio_131.jpg', 5),
(132, 'Marcelo', 'Barovero', '1984-02-18', 35, 'masculino ', 'marceloBarovero@gmail.com', 2926419875, 1, 'socio_132.jpg', 4),
(137, 'ignacio', 'coria', '1994-02-09', 25, 'masculino ', 'ignaciocoriadebernardi@hotmail.com', 2926419363, 1, 'socio_137.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `clave`) VALUES
(1, 'ignacio', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD KEY `idDeportes` (`idDeportes`) USING BTREE;

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD KEY `idpersona` (`idpersona`) USING BTREE,
  ADD KEY `idDeporte` (`idDeporte`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `idDeportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`idDeporte`) REFERENCES `deportes` (`idDeportes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
