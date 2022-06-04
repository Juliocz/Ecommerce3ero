-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2022 a las 22:12:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `celular` int(20) DEFAULT NULL,
  `correo` varchar(200) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `tipo_usuario` varchar(100) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `ubicacion_lat` varchar(50) DEFAULT NULL,
  `ubicacion_lon` varchar(50) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`nombre`, `apellido`, `celular`, `correo`, `usuario`, `password`, `estado`, `tipo_usuario`, `departamento`, `ubicacion_lat`, `ubicacion_lon`, `fecha_registro`, `fecha_mod`, `id`) VALUES
('Julio', 'Llampa', NULL, 'julio@fsdf.com', 'julio..ssdf', 'e10adc3949ba59abbe56e057f20f883e', 'pendiente', 'user_simple', NULL, NULL, NULL, '2022-06-04 19:37:59', NULL, 1),
('Julio C.', 'LLG', 69212155, 'jllampa@incos-santacruz.edu.bo', 'AdminJulio123', '32dc4eb266b2f639c7abf59fd957e2ca', 'activo', 'super_admin', 'SCZ', NULL, NULL, '2022-06-04 19:43:18', NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
