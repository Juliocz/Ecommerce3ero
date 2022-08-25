-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: jshop
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bitacora_tablas`
--

DROP TABLE IF EXISTS `bitacora_tablas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora_tablas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `sql_user` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `tabla` varchar(100) NOT NULL,
  `accion` varchar(20) NOT NULL,
  `dato_bit` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_tablas`
--

LOCK TABLES `bitacora_tablas` WRITE;
/*!40000 ALTER TABLE `bitacora_tablas` DISABLE KEYS */;
INSERT INTO `bitacora_tablas` VALUES (1,NULL,'root@localhost','2022-06-11 19:13:37','user','Insertado','\"id\":\"10\"\"nombre\":\"Marcos\"\"apellido\":\"Cochine\"\"celular\":\"7777777\"\"correo\":\"marcosdsds@gmail.com\"\"usuario\":\"marcos123\"\"password\":\"e10adc3949ba59abbe56e057f20f883e\"'),(2,NULL,'root@localhost','2022-06-11 19:16:02','user','Insertado','{\"id\":\"11\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}'),(3,NULL,'root@localhost','2022-06-11 19:37:04','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(4,NULL,'root@localhost','2022-06-11 20:17:32','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(5,NULL,'root@localhost','2022-06-11 20:21:53','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos12\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(6,NULL,'root@localhost','2022-06-11 20:22:46','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos1234\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(7,NULL,'root@localhost','2022-06-11 20:22:59','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"desactivado\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(8,NULL,'root@localhost','2022-06-13 22:23:55','user','modificado','{\"Antiguo:\"{\"id\":\"10\",\"nombre\":\"Marcos\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"10\",\"nombre\":\"Marcosssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(9,NULL,'root@localhost','2022-06-13 22:36:24','user','modificado','{\"Antiguo:\"{\"id\":\"10\",\"nombre\":\"Marcosssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"10\",\"nombre\":\"Marcossssssssss\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsds@gmail.com\",\"estado\":\"pendiente\",\"usuario\":\"marcos123\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(10,2,'root@localhost','2022-06-13 22:39:09','user','modificado','{\"Antiguo:\"{\"id\":\"11\",\"nombre\":\"Marcos123\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"},\"Modificado:\"{\"id\":\"11\",\"nombre\":\"Marcos12333\",\"apellido\":\"Cochine\",\"celular\":\"7777777\",\"correo\":\"marcosdsdsss@gmail.com\",\"estado\":\"activo\",\"usuario\":\"marcos12345\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}}'),(11,2,'root@localhost','2022-06-13 22:40:47','user','Insertado','{\"id\":\"13\",\"nombre\":\"Carlos\",\"apellido\":\"Perez\",\"celular\":\"88887777\",\"correo\":\"cperez@gmail.com\",\"usuario\":\"carlospere11\",\"password\":\"e10adc3949ba59abbe56e057f20f883e\"}');
/*!40000 ALTER TABLE `bitacora_tablas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_categorias`
--

DROP TABLE IF EXISTS `productos_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos_categorias` (
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `num_visitas` int(11) NOT NULL,
  `icon_url` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_url` varchar(200) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id_tienda` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_categorias`
--

LOCK TABLES `productos_categorias` WRITE;
/*!40000 ALTER TABLE `productos_categorias` DISABLE KEYS */;
INSERT INTO `productos_categorias` VALUES ('Instrumentos musicales','En esta categoria podras ver instrumentos musicales de todo tipo, asi como tambien algunos tips y consejos de otros musicos.\r\nAsegurate de publicar aqui solo productos que tengan que ver con instrumentos musicales.',0,'https://localhost/image.png',1,'https://localhost/image.png','activo',NULL);
/*!40000 ALTER TABLE `productos_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_created` int(11) DEFAULT NULL,
  `user_id_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Julio C.','LLG',69212155,'jllampa@incos-santacruz.edu.bo','AdminJulio123','32dc4eb266b2f639c7abf59fd957e2ca','activo','super_admin','SCZ',NULL,NULL,'2022-06-04 19:43:18',NULL,2,NULL,NULL),('Julio2','Llampa2',7777777,'julio.cesar.bien@gmail.com','julio123456','e10adc3949ba59abbe56e057f20f883e','activo','super_admin','LA PAZ',NULL,NULL,'2022-06-08 16:57:27',NULL,6,NULL,NULL),('Marcossssssssss','Cochine',7777777,'marcosdsds@gmail.com','marcos123','e10adc3949ba59abbe56e057f20f883e','pendiente','user_simple','SCZ',NULL,NULL,'2022-06-11 23:13:37',NULL,10,NULL,2),('Marcos12333','Cochine',7777777,'marcosdsdsss@gmail.com','marcos12345','e10adc3949ba59abbe56e057f20f883e','activo','user_simple','SCZ',NULL,NULL,'2022-06-11 23:16:02',NULL,11,NULL,2),('Carlos','Perez',88887777,'cperez@gmail.com','carlospere11','e10adc3949ba59abbe56e057f20f883e','pendiente','user_simple',NULL,NULL,NULL,'2022-06-14 02:40:47',NULL,13,2,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bitacora_insert` AFTER INSERT ON `user` FOR EACH ROW insert into bitacora_tablas (
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
         ) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bitacora_user_mod` AFTER UPDATE ON `user` FOR EACH ROW insert into bitacora_tablas (
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
         ) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-26 15:58:12
