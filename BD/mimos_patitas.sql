-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mimos_patitas
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
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `id_admin` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,'Julian','Julian@gmail.com','12345');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_propietario` varchar(255) NOT NULL,
  `nombre_mascota` varchar(255) NOT NULL,
  `raza` varchar(100) DEFAULT NULL,
  `id_mascota` int(10) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `piel` varchar(50) DEFAULT NULL,
  `ojos` varchar(50) DEFAULT NULL,
  `oidos` varchar(50) DEFAULT NULL,
  `examen_general` text DEFAULT NULL,
  `zonas_dolorosas` text DEFAULT NULL,
  `otros` text DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `animal_geriatrico` varchar(3) DEFAULT NULL,
  `animal_braquicefalo` varchar(3) DEFAULT NULL,
  `problemas_cardiovasculares` varchar(3) DEFAULT NULL,
  `plan_vacunal_al_dia` varchar(3) DEFAULT NULL,
  `nivel_ansiedad` varchar(50) DEFAULT NULL,
  `manejo_bolsa` varchar(3) DEFAULT NULL,
  `fecha_cita` datetime DEFAULT NULL,
  `preexistencias` text DEFAULT NULL,
  `especificaciones_bano_corte` text DEFAULT NULL,
  `recomendaciones_especiales` text DEFAULT NULL,
  `nombreP_consentimiento` varchar(25) NOT NULL,
  `cedula` int(10) unsigned NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `nombreM_consentimiento` varchar(25) NOT NULL,
  `edad_consentimiento` int(2) unsigned NOT NULL,
  `raza_consentimiento` varchar(25) NOT NULL,
  `genero_consentimiento` varchar(25) NOT NULL,
  `peso` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 18:00:47
