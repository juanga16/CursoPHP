-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2019 a las 18:49:22
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`) VALUES
(1, 'Policial'),
(2, 'Acción'),
(3, 'Romántica'),
(4, 'Terror'),
(5, 'Ficción/Realidad'),
(6, 'Ciencia Ficción'),
(7, 'Investigación'),
(8, 'Biográfica'),
(9, 'Infantil'),
(10, 'Autoayuda'),
(11, 'Erótica'),
(12, 'Hogar'),
(13, 'Enciclopedia/Mundial'),
(14, 'Política'),
(15, 'Economía/Marketing'),
(16, 'Sociedad'),
(17, 'Deportes'),
(18, 'Viajes/Cultura'),
(19, 'Otros Temas/Varios'),
(20, 'Novela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `Paginas` int(2) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `Disponible` tinyint(4) NOT NULL,
  `Fecha_Publicada` datetime NOT NULL,
  `Portada` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `Titulo`, `Autor`, `Paginas`, `id_genero`, `Disponible`, `Fecha_Publicada`, `Portada`) VALUES
(48, 'Harry Potter', 'J.K.Rowling', 3665, 20, 1, '1997-01-01 00:00:00', 'arryPotter.jpg'),
(50, 'El Senor de los Anillos  ', 'J.R.R. Tolkien  ', 1368, 20, 0, '1978-01-01 00:00:00', 'el señor de los añillos.jpg'),
(51, 'El alquimista ', 'Paulo Coelho ', 192, 20, 1, '1988-01-01 00:00:00', 'el alquimista.jpg'),
(52, 'El codigo Da Vinci    ', 'Dan Brown    ', 550, 20, 1, '2003-01-01 00:00:00', 'codigo da vince.jpg'),
(54, 'Piense y hagase rico', 'Napoleon Hill', 318, 5, 1, '1937-01-01 00:00:00', 'piense y hagase rico.jpg'),
(55, 'Diario de Ana Frank', 'Ana Frank', 217, 19, 0, '1947-01-01 00:00:00', 'Diario_anne_frank.jpg'),
(56, 'Crepusculo', 'Stephenie Meyer', 502, 3, 1, '2005-09-05 00:00:00', 'crepusculo.jpg'),
(57, 'fight club', 'Chuck Palahniuk', 208, 20, 1, '1996-01-01 00:00:00', '220px-PL_Podziemny_krag_okladka.jpg'),
(58, 'American Gods', 'Neil Gaiman', 480, 20, 1, '2001-01-11 00:00:00', 'descarga.jpg'),
(59, 'Escoria', 'Irvine Welsh', 393, 2, 0, '1998-01-01 00:00:00', '9788433967411.jpg'),
(60, 'Kentukis', 'Samanta Schweblin', 224, 20, 0, '2019-03-05 00:00:00', '71nLJQ831mL.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
