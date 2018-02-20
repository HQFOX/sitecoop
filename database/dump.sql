-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: TESTE
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `TESTE`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `TESTE` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `TESTE`;

--
-- Table structure for table `Inscricoes`
--

DROP TABLE IF EXISTS `Inscricoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inscricoes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nomeI` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `projetoId` int(255) NOT NULL,
  `inscrito` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inscricoes`
--

LOCK TABLES `Inscricoes` WRITE;
/*!40000 ALTER TABLE `Inscricoes` DISABLE KEYS */;
INSERT INTO `Inscricoes` VALUES (1,'henrique','henrique.raposo95@gmail.com','9696969696',2,0),(2,'','','',0,0),(3,'cona','h','4',1,0);
/*!40000 ALTER TABLE `Inscricoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Projeto`
--

DROP TABLE IF EXISTS `Projeto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Projeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `tipologia` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `nquartos` int(11) DEFAULT NULL,
  `fotosplanta` varchar(255) DEFAULT NULL,
  `fotosprojeccaocasa` varchar(255) DEFAULT NULL,
  `ninscritos` int(11) DEFAULT NULL,
  `limiteinscritos` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `oculto` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Projeto`
--

LOCK TABLES `Projeto` WRITE;
/*!40000 ALTER TABLE `Projeto` DISABLE KEYS */;
INSERT INTO `Projeto` VALUES (1,'Cabeço do Arraial39','Bairro da Malagueira',0,30000,5,NULL,NULL,10,20,NULL,NULL),(2,'Cabeço do Arraial36','Bairro da Malagueira',0,30000,4,NULL,NULL,5,7,NULL,NULL),(3,'Cabeço Cheio','cabeço',0,30000,4,NULL,NULL,4,6,NULL,NULL),(4,'Cabeço do Arraial','cabeço',0,4000,5,NULL,NULL,5,10,NULL,NULL);
/*!40000 ALTER TABLE `Projeto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ntelefones` varchar(255) DEFAULT NULL,
  `emails` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (2,NULL,NULL),(7,NULL,NULL),(8,NULL,NULL),(9,'3423',NULL),(10,'453454',NULL),(11,'4444','dfsfsf@cona.com');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES ('henrique.raposo95@gmail.com');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nomeProjectosteste`
--

DROP TABLE IF EXISTS `nomeProjectosteste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nomeProjectosteste` (
  `nome` varchar(150) DEFAULT NULL,
  `fogos` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomeProjectosteste`
--

LOCK TABLES `nomeProjectosteste` WRITE;
/*!40000 ALTER TABLE `nomeProjectosteste` DISABLE KEYS */;
INSERT INTO `nomeProjectosteste` VALUES ('Bairro Almeirim','40');
/*!40000 ALTER TABLE `nomeProjectosteste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numeros_telefone`
--

DROP TABLE IF EXISTS `numeros_telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `numeros_telefone` (
  `numero` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numeros_telefone`
--

LOCK TABLES `numeros_telefone` WRITE;
/*!40000 ALTER TABLE `numeros_telefone` DISABLE KEYS */;
INSERT INTO `numeros_telefone` VALUES ('266733299');
/*!40000 ALTER TABLE `numeros_telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teste1`
--

DROP TABLE IF EXISTS `teste1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste1` (
  `coluna1` varchar(120) DEFAULT NULL,
  `coluna2` varchar(120) DEFAULT NULL,
  `coluna3` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste1`
--

LOCK TABLES `teste1` WRITE;
/*!40000 ALTER TABLE `teste1` DISABLE KEYS */;
INSERT INTO `teste1` VALUES ('TESTE COLUNA 1','TESTE COLUNA 2','TESTE COLUNA3');
/*!40000 ALTER TABLE `teste1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES (1,'hqfox','henrique.raposo95@gmail.com','fox123');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-11 22:39:21
