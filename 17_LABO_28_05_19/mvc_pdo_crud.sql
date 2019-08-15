# MySQL-Front 5.1  (Build 4.2)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: mvc_pdo_crud
# ------------------------------------------------------
# Server version 5.5.5-10.3.15-MariaDB

DROP DATABASE IF EXISTS `mvc_pdo_crud`;
CREATE DATABASE `mvc_pdo_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mvc_pdo_crud`;

#
# Source for table alumnos
#

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Sexo` tinyint(4) DEFAULT NULL,
  `FechaNacimiento` varchar(20) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Dumping data for table alumnos
#

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Olivia','Mamani',1,'13-01-2019','oli@hotmail.com','2019-06-23 10:00:42');
INSERT INTO `alumnos` VALUES (2,'Grower','Quenallata',1,'12/12/12','grower@hotmail.com','2019-06-23 10:00:23');
INSERT INTO `alumnos` VALUES (3,'Javier','Apaza',1,'01-01-01','javier@hotmail.com','2019-06-23');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table cliente
#

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Dumping data for table cliente
#

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'armando quispe',5213123,22222);
INSERT INTO `cliente` VALUES (2,'jorge apaz',2121212,111111);
INSERT INTO `cliente` VALUES (3,'evaristo',2312312,333333);
INSERT INTO `cliente` VALUES (4,'jonas mendoza',54897879,322232);
INSERT INTO `cliente` VALUES (5,'Ronal misme',1458789,365232);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table libreria
#

DROP TABLE IF EXISTS `libreria`;
CREATE TABLE `libreria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Dumping data for table libreria
#

LOCK TABLES `libreria` WRITE;
/*!40000 ALTER TABLE `libreria` DISABLE KEYS */;
INSERT INTO `libreria` VALUES (1,'Bazar Libreria Tajani','av. tajani',12312312,22222222);
/*!40000 ALTER TABLE `libreria` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table libro
#

DROP TABLE IF EXISTS `libro`;
CREATE TABLE `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `editorial` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Dumping data for table libro
#

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,'Cien a?os de soledad','Geremias','don bosco SRL');
INSERT INTO `libro` VALUES (2,'informatica 1','ronald','don bosco SRL');
INSERT INTO `libro` VALUES (3,'informatica 2','geno','illimani SRL');
INSERT INTO `libro` VALUES (4,'informatica 3','mauricio','reliquia SRL');
INSERT INTO `libro` VALUES (5,'informatica 4','alcalde','romel SRL');
INSERT INTO `libro` VALUES (6,'informatica 5','pablo','sar SRL');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
