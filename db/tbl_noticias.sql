-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 15:56:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminryr_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

CREATE TABLE `tbl_noticias` (
  `not_id` int(11) NOT NULL,
  `not_titulo` varchar(1000) COLLATE utf32_spanish_ci NOT NULL,
  `not_contendo` text COLLATE utf32_spanish_ci NOT NULL,
  `not_vista_previa` text COLLATE utf32_spanish_ci NOT NULL,
  `not_link` varchar(1000) COLLATE utf32_spanish_ci DEFAULT '0',
  `not_estado` char(1) COLLATE utf32_spanish_ci NOT NULL,
  `not_usa_crea` varchar(500) COLLATE utf32_spanish_ci NOT NULL,
  `not_fecha_crea` datetime NOT NULL,
  `not_usa_mod` varchar(500) COLLATE utf32_spanish_ci DEFAULT NULL,
  `not_fecha_mod` datetime DEFAULT NULL,
  `not_relevante` char(1) COLLATE utf32_spanish_ci NOT NULL,
  `not_descarga` varchar(1000) COLLATE utf32_spanish_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD PRIMARY KEY (`not_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
