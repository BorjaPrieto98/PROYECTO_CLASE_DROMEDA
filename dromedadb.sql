-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dromedadb
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
-- Table structure for table `tcartas`
--

DROP TABLE IF EXISTS `tcartas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcartas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `rareza` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcartas`
--

LOCK TABLES `tcartas` WRITE;
/*!40000 ALTER TABLE `tcartas` DISABLE KEYS */;
INSERT INTO `tcartas` VALUES (1,'Nathanziel','Normal',400,'img/n1.PNG','Era la personificación de la muerte sin violencia. Su toque era suave, como el de su gemelo Hipnos el sueño. La muerte violenta era el dominio de sus hermanas amantes de la sangre: Las Keres. Asiduas al campo de batalla. '),(2,'Valkiria','Normal',200,'img/n2.PNG','Las valkirias son Dísir, entidades femeninas menores que servían a Odín bajo el mando de Freyja. Su propósito era elegir a los más heroicos de aquellos caídos en batalla y llevarlos al valhalla donde se convertían en enherjar'),(3,'Beorn','Normal',200,'img/n3.PNG','Es un monstruo mitológico con cuerpo de hombre y cabeza de toro. Hijo de Pasífae y el toro de creta. Fue encerrado en un laberinto diseñado por el artesano dédalo. Hecho expresamente para retenerlo. Ubicado en la ciudad de Cnosos en la isla de Creta'),(4,'Neptuno','Especial',1500,'img/n4.PNG','Dios del agua dulce y del mar. Hermano de Júpiter y Plutón: Los hermanos presidían los reinos del cielo, el mundo terrenal y el inframundo. Su esposa era salacia'),(5,'Vorivar','Normal',200,'img/n5.PNG','Guerreros que realizaban incursiones de saqueos. Provenientes de los pueblos nórdicos, procedentes de Escandinavia, famosos por ser grandes navegantes y llevar a cabo pillajes y ataques en Europa'),(6,'Goak','Normal',800,'img/n6.PNG','Rey del Infierno. Hermano de Gorex. Su padre fue uno de los mayores guerreros que pisaron el reino del inframundo y siguiendo su legado, se convirtió en el Rey'),(7,'Rey Polar','Normal',600,'img/n7.PNG','Rey del Polo. Defiende a los suyos de los peligros procedentes del resto de los reinos y además pertenece a la asamblea de los cinco'),(8,'Orkel','Normal',300,'img/n8.PNG','Ogro solitario de las tierras perdidas. Desterrado de Danlor, tierra de su especie. Viaja sin rumbo por Dromeda. Se alimenta de lo que encuentra y suele ser muy agresivo'),(9,'Esfinge','Normal',400,'img/n9.PNG','Utilizada para proteger los secretos más valiosos de los magos y brujas que habitan Dromeda. Tiene un poder de defensa más poderoso que algún dios'),(10,'Grifo','Normal',400,'img/n10.PNG','El Grifo es una criatura de la antigua Dromeda, cuya parte frontal es la de un águila gigante, con plumas blancas, pico afilado y garras poderosas. La parte posterior es la de un león con pelaje amarillo, patas musculosas y cola larga. Se dice que aún vaga por los cielos de Dromeda'),(11,'Adonis','Normal',700,'img/n11.PNG','Mascota de Zeus y hermano de Aeneas. Protege los cielos luchando al lado de su amo. Fiel y protector, son las virtudes que caracterizan a este gran ser'),(12,'Keke','Normal',300,'img/n12.PNG','Los Keke son soldados del pantano más grande de Dromeda. Suelen ser muy agresivos con los extraños que merodean por allí'),(13,'Rekdok','Normal',600,'img/n13.PNG','Enano desterrado de su montaña, acompañado siempre por su cuervo Stuart. Viajan por las tierras de Dromeda buscando un lugar donde vivir tranquilo. Antes de su destierro, era el mejor defensor de la montaña'),(14,'ZEUS','Dios',10000,'img/dios1.PNG','Zeus, hijo de los titanes Cronos y Rea, es el dios supremo, soberano de hombres y dioses, también Dios del rayo, que vive en el monte Olimpo con su esposa Hera y los otros olímpicos. Nunca nadie derrotó a Zeus en una batalla, es el ser más poderoso del universo'),(15,'HADES','Dios',10000,'img/dios2.PNG','Hades, hermano de Zeus, es el rey supremo de los tres Infiernos. Goak, Gorex y Gobuk son sus tres hijos, siendo Goak su sucesor en el Inframundo. Tiene un poder increíble y sólo Zeus puede llegar a vencerlo'),(16,'THOR','Dios',10000,'img/dios3.PNG','Thor, dios del trueno, hijo de Odín. Gobierna Asgard al lado de su padre. Luchó en la batalla de los mundos y fue ahí dónde se consagró como un dios. Tiene un poder que pocos pueden superar, pero aún le queda para llegar al poder de su padre'),(17,'Gorex','Normal',900,'img/n17.PNG','Hermano de goak. No tiene compasión y es uno de los no reyes más poderosos del Inframundo. Fue aprendiz de su padre Hades. Siempre va acompañado de Razcaban, su perro infernal');
/*!40000 ALTER TABLE `tcartas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuser`
--

DROP TABLE IF EXISTS `tuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL,
  `coins` int(11) DEFAULT NULL,
  `active_session_token` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuser`
--

LOCK TABLES `tuser` WRITE;
/*!40000 ALTER TABLE `tuser` DISABLE KEYS */;
INSERT INTO `tuser` VALUES (1,'borjaprietoroot@gmail.com','borjaprieto','','$2y$10$XVzBz0yNdOwlNTq4/xXpneli7LUGroB0KLuCcRX4x/UUkjB8qOt/a',39100,NULL),(2,'borjaprietogame@gmail.com','borjaprieto','','$2y$10$UmHXT1.D/.A60hrTvXcZ0OHIkuTM1/0rEou78VjVWlIR2bUGDMIt.',20100,NULL),(3,'borjaprieto1@gmail.com','borjaprieto','','$2y$10$JIIJrf./b4FzV2JqQ2hZKOd10uWThQ/inH1y4IP8eDRus0wR44L7y',8900,NULL),(4,'borjaprieto1@gmail.com','borjaprieto','','$2y$10$JMlD3rQehRPM0NWn.dpEZ.W3nmL6tXqV3G/84mfN5Ji8K/QfJ16ne',100,NULL),(5,'borjaprieto7@gmail.com','borjaprieto','','$2y$10$cw2nB1p67RtjGmk3iP65w.JqlhvHWM03l5Q.C0p59lHDr8FTJcPnm',9300,NULL),(6,'borjaprieto9@gmail.com','borjaprieto','','$2y$10$pdhslnluQ57OtZRt7jXDWeqQ0XO0qn400HEfRosEUwL1q0.U92MHa',10100,NULL),(7,'borjaprieto10@gmail.com','borjaprieto','','$2y$10$s8SisAHxR2YJw5i9FO94WOIdOfUzpbMpMxh0KKpBb0JMOuMPN.U7C',9700,NULL),(8,'borjaprieto11@gmail.com','borjaprieto','','$2y$10$q.rrEfFWKQazhmw2EkQ4aeRZogZRfOwmmiK1/4nHajaH.OJQiLREa',9700,NULL),(9,'borjaprieto90@gmail.com','borjaprieto','','$2y$10$xLzOUaHJmEAHhDzP6mBK5e8Zvkat4.wgu9raA2Jwjrn1sTIPiRJmi',10100,NULL),(10,'borjaprieto89@gmail.com','borjaprieto','','$2y$10$1HPAKbEk1fotT3mSB2cxIOlkSs8rjNXuibz8Fd6oe4fFnhCCU/M8m',8500,NULL),(11,'borjaprieto0@gmail.com','borjaprieto','','$2y$10$xdMahxl8fy4EwTOUxisFPuQNvA4nDVuAGIMBHqrJibBolhBogUW/S',1300,NULL);
/*!40000 ALTER TABLE `tuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuser_carta`
--

DROP TABLE IF EXISTS `tuser_carta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuser_carta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_carta` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_carta` (`id_carta`),
  CONSTRAINT `tuser_carta_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`),
  CONSTRAINT `tuser_carta_ibfk_2` FOREIGN KEY (`id_carta`) REFERENCES `tcartas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuser_carta`
--

LOCK TABLES `tuser_carta` WRITE;
/*!40000 ALTER TABLE `tuser_carta` DISABLE KEYS */;
INSERT INTO `tuser_carta` VALUES (6,1,12,1),(7,1,2,1),(8,1,1,1),(9,1,8,1),(10,1,8,1),(11,1,6,1),(12,1,2,1),(13,1,4,1),(14,1,4,1),(15,1,12,1),(16,1,2,1),(17,1,13,1),(18,1,3,1),(19,1,14,1),(20,1,4,1),(21,1,15,1),(22,3,3,1),(23,3,1,1),(24,5,1,1),(31,11,5,1);
/*!40000 ALTER TABLE `tuser_carta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-04 12:47:40
