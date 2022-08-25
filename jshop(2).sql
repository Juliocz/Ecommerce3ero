-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 21:24:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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
-- Estructura de tabla para la tabla `bitacora_tablas`
--

CREATE TABLE `bitacora_tablas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `sql_user` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `tabla` varchar(100) NOT NULL,
  `accion` varchar(20) NOT NULL,
  `dato_bit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora_tablas`
--

INSERT INTO `bitacora_tablas` (`id`, `usuario_id`, `sql_user`, `date`, `tabla`, `accion`, `dato_bit`) VALUES
(1, NULL, 'root@localhost', '2022-06-11 19:13:37', 'user', 'Insertado', '\"id\":\"10\"\"nombre\":\"Marcos\"\"apellido\":\"Cochine\"\"celular\":\"7777777\"\"correo\":\"marcosdsds@gmail.com\"\"usuario\":\"marcos123\"\"password\":\"e10adc3949ba59abbe56e057f20f883e\"'),
(2, NULL, 'root@localhost', '2022-06-11 19:16:02', 'user', 'Insertado', '{\"id\":\"11\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}'),
(3, NULL, 'root@localhost', '2022-06-11 19:37:04', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(4, NULL, 'root@localhost', '2022-06-11 20:17:32', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(5, NULL, 'root@localhost', '2022-06-11 20:21:53', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(6, NULL, 'root@localhost', '2022-06-11 20:22:46', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(7, NULL, 'root@localhost', '2022-06-11 20:22:59', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(8, NULL, 'root@localhost', '2022-06-13 22:23:55', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"10\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"10\",\"nombre\":\"Marcosssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(9, NULL, 'root@localhost', '2022-06-13 22:36:24', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"10\",\"nombre\":\"Marcosssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"10\",\"nombre\":\"Marcossssssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(10, 2, 'root@localhost', '2022-06-13 22:39:09', 'user', 'modificado', '{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12333\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),
(11, 2, 'root@localhost', '2022-06-13 22:40:47', 'user', 'Insertado', '{\"id\":\"13\",\"nombre\":\"Carlos\",\"apellido\":\"Perez\",\"celular\":\"88887777\",\"correo\":\"cperez@gmail.com\",\"usuario\":\"carlospere11\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_banner_img`
--

CREATE TABLE `categoria_banner_img` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `url_imagen` varchar(200) NOT NULL,
  `id_productos_categorias` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `creado` datetime NOT NULL DEFAULT current_timestamp(),
  `modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_banner_img`
--

INSERT INTO `categoria_banner_img` (`id`, `nombre`, `url_imagen`, `id_productos_categorias`, `descripcion`, `creado`, `modificado`) VALUES
(1, 'Banner 1', '/midrive/adminfiles/2/banner1musica.png', 1, 'Ingresa a nuestra sucursal', '2022-08-24 11:43:29', '2022-08-24 11:44:01'),
(2, 'Banner 2', '/midrive/adminfiles/2/banner2musica.png', 1, 'Ingresa a nuestra sucursal', '2022-08-24 11:43:29', '2022-08-24 11:44:01'),
(3, 'Banner 1', '/midrive/adminfiles/2/banner1comp.png', 7, 'Ingresa a nuestra sucursal', '2022-08-24 11:43:29', '2022-08-24 11:44:01'),
(4, 'Banner 2', '/midrive/adminfiles/2/banner2comp.png', 7, 'Ingresa a nuestra sucursal', '2022-08-24 11:43:29', '2022-08-24 11:44:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtittle` varchar(20) DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `ubicacion_lat` float DEFAULT NULL,
  `ubicacion_lon` int(11) DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `estado_pro` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `unidades` int(11) DEFAULT 1,
  `privilegio_id` int(11) DEFAULT NULL,
  `num_visitas` int(11) DEFAULT NULL,
  `url_video` varchar(100) DEFAULT NULL,
  `id_user_creado` int(11) DEFAULT NULL,
  `id_user_modificado` int(11) DEFAULT NULL,
  `creado` datetime NOT NULL DEFAULT current_timestamp(),
  `modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `id_categoria`, `titulo`, `subtittle`, `descripcion`, `celular`, `correo`, `ubicacion_lat`, `ubicacion_lon`, `tags`, `precio`, `estado_pro`, `estado`, `unidades`, `privilegio_id`, `num_visitas`, `url_video`, `id_user_creado`, `id_user_modificado`, `creado`, `modificado`) VALUES
(1, 7, 'PRODESCK 600 G1', 'Marca HP', 'Computadora en excelente estado, podras usarla tanto para estudios y trabajo', '69212155', 'julio@gmail.com', NULL, NULL, 'computadora,hp,monitor', 1000, 'nuevo', 'activo', 1, NULL, NULL, NULL, 2, 2, '2022-08-24 13:08:38', '2022-08-24 13:08:38'),
(2, 7, 'PRODESCK 700 G1', 'Marca HP', 'Computadora en excelente estado, podras usarla tanto para estudios y trabajo2', '69212155', 'julio@gmail.com', NULL, NULL, 'computadora,hp,monitor', 1000, 'nuevo', 'activo', 1, NULL, NULL, NULL, 2, 2, '2022-08-24 13:08:38', '2022-08-24 13:08:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE `productos_categorias` (
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `num_visitas` int(11) NOT NULL DEFAULT 0,
  `icon_url` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `banner_url` varchar(200) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id_tienda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_categorias`
--

INSERT INTO `productos_categorias` (`nombre`, `descripcion`, `num_visitas`, `icon_url`, `id`, `banner_url`, `estado`, `id_tienda`) VALUES
('Instrumentos musicales', 'En esta categoria podras ver instrumentos musicales de todo tipo, asi como tambien algunos tips y consejos de otros musicos.Asegurate de publicar aqui solo productos que tengan que ver con instrumentos musicales.', 0, 'http://localhost:8000/midrive/adminfiles/2/instrumentos.png', 1, 'http://localhost:8000/midrive/adminfiles/2/lago-entre-las-montanas-y-cielo-estrellado_2560x1440_xtrafondos.com.jpg', 'activo', NULL),
('Juguetes', 'En esta seccion podras encontrar diversos juguetes para niños,de todo tipo. Diviertete', 0, 'http://localhost:8000/midrive/adminfiles/2/juguetes.png', 2, 'http://localhost:8000/midrive/adminfiles/2/1 (1).jpg', 'activo', NULL),
('Computadoras', 'Aqui podras encontrar diferentes computadoras, con las mejores caracteristicas asi como buenas referencias', 0, NULL, 7, NULL, 'activo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_img`
--

CREATE TABLE `producto_img` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `url_imagen` varchar(100) DEFAULT NULL,
  `creado` datetime NOT NULL DEFAULT current_timestamp(),
  `modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_img`
--

INSERT INTO `producto_img` (`id`, `id_producto`, `url_imagen`, `creado`, `modificado`) VALUES
(1, 1, '/midrive/adminfiles/2/c1.jpg', '2022-08-24 13:15:41', '2022-08-24 13:15:41'),
(2, 2, '/midrive/adminfiles/2/c2.jpg', '2022-08-24 13:15:54', '2022-08-24 13:15:54'),
(3, 1, '/midrive/adminfiles/2/c3.jpg', '2022-08-24 13:16:04', '2022-08-24 13:16:04');

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
  `id` int(11) NOT NULL,
  `user_id_created` int(11) DEFAULT NULL,
  `user_id_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`nombre`, `apellido`, `celular`, `correo`, `usuario`, `password`, `estado`, `tipo_usuario`, `departamento`, `ubicacion_lat`, `ubicacion_lon`, `fecha_registro`, `fecha_mod`, `id`, `user_id_created`, `user_id_modified`) VALUES
('Julio C.', 'LLG', 69212155, 'jllampa@incos-santacruz.edu.bo', 'AdminJulio123', '32dc4eb266b2f639c7abf59fd957e2ca', 'activo', 'super_admin', 'SCZ', NULL, NULL, '2022-06-04 19:43:18', NULL, 2, NULL, NULL),
('Julio2', 'Llampa2', 7777777, 'julio.cesar.bien@gmail.com', 'julio123456', 'e10adc3949ba59abbe56e057f20f883e', 'activo', 'super_admin', 'LA PAZ', NULL, NULL, '2022-06-08 16:57:27', NULL, 6, NULL, NULL),
('Marcossssssssss', 'Cochine', 7777777, 'marcosdsds@gmail.com', 'marcos123', 'e10adc3949ba59abbe56e057f20f883e', 'pendiente', 'user_simple', 'SCZ', NULL, NULL, '2022-06-11 23:13:37', NULL, 10, NULL, 2),
('Marcos12333', 'Cochine', 7777777, 'marcosdsdsss@gmail.com', 'marcos12345', 'e10adc3949ba59abbe56e057f20f883e', 'activo', 'user_simple', 'SCZ', NULL, NULL, '2022-06-11 23:16:02', NULL, 11, NULL, 2),
('Carlos', 'Perez', 88887777, 'cperez@gmail.com', 'carlospere11', 'e10adc3949ba59abbe56e057f20f883e', 'pendiente', 'user_simple', NULL, NULL, NULL, '2022-06-14 02:40:47', NULL, 13, 2, NULL);

--
-- Disparadores `user`
--
DELIMITER $$
CREATE TRIGGER `bitacora_insert` AFTER INSERT ON `user` FOR EACH ROW insert into bitacora_tablas (

usuario_id,sql_user,tabla,accion,dato_bit

) values (NEW.user_id_created,CURRENT_USER (),'user','Insertado',

         CONCAT(

    '{','"id":', '"',NEW.id,'",',

    '"nombre":', '"',NEW.nombre,'",',

    '"apellido":', '"',NEW.apellido,'",',

     '"celular":', '"',NEW.celular,'",',

    '"correo":', '"',NEW.correo,'",',

     '"usuario":','"',NEW.usuario,'",',

       '"password":','"',NEW.password,'"','}'

  )

         )
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_user_mod` AFTER UPDATE ON `user` FOR EACH ROW insert into bitacora_tablas (

usuario_id,sql_user,tabla,accion,dato_bit

) values (NEW.user_id_modified,CURRENT_USER (),'user','modificado',

      

          CONCAT('{',



          CONCAT(

    '"Antiguo:"{','"id":', '"',old.id,'",',

    '"nombre":', '"',old.nombre,'",',

    '"apellido":', '"',old.apellido,'",',

     '"celular":', '"',old.celular,'",',

    '"correo":', '"',old.correo,'",',

              '"estado":', '"',old.estado,'",',

     '"usuario":','"',old.usuario,'",',

       '"password":','"',old.password,'"','}'

  ),',',

         CONCAT(

    '"Modificado:"{','"id":', '"',NEW.id,'",',

    '"nombre":', '"',NEW.nombre,'",',

    '"apellido":', '"',NEW.apellido,'",',

     '"celular":', '"',NEW.celular,'",',

    '"correo":', '"',NEW.correo,'",',

             '"estado":', '"',NEW.estado,'",',

     '"usuario":','"',NEW.usuario,'",',

       '"password":','"',NEW.password,'"','}'

  ),'}')

         )
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora_tablas`
--
ALTER TABLE `bitacora_tablas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_banner_img`
--
ALTER TABLE `categoria_banner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_img`
--
ALTER TABLE `producto_img`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `bitacora_tablas`
--
ALTER TABLE `bitacora_tablas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `categoria_banner_img`
--
ALTER TABLE `categoria_banner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto_img`
--
ALTER TABLE `producto_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
