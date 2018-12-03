-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2018 a las 17:51:29
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abogados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `COD_USUARIO` mediumint(9) NOT NULL,
  `USUARIO` varchar(60) NOT NULL,
  `PASS` varchar(60) NOT NULL,
  `NOMBRES` varchar(60) NOT NULL,
  `APELLIDOS` varchar(60) NOT NULL,
  `CORREO` varchar(60) NOT NULL,
  `TIPO_USUARIO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`COD_USUARIO`, `USUARIO`, `PASS`, `NOMBRES`, `APELLIDOS`, `CORREO`, `TIPO_USUARIO`) VALUES
(1, '', '$2y$10$3r6yPMcV.PmbgoBSMbgiRe/jIhd60nWTBAspZZbQL5C8G7tJmZM3q', 'usuario1', '', 'usuario1@gmail.com', '1'),
(2, '', '$2y$10$03Bc6QENUlV0j7SOSLsQ7eYziTmNW3Zn61O7e2K3ylThWk3w5VmX6', 'usuario2', '', 'usuario2@gmail.com', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`COD_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `COD_USUARIO` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
