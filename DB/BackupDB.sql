-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: abc
-- ------------------------------------------------------
-- Server version	10.0.38-MariaDB-0ubuntu0.16.04.1

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
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `numcuenta` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `appaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `apmaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `pregsecreta` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `resp_pregsecreta` char(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`numcuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('123456649','Arthur','Zavala','Morales','2000-06-17','ejemplo112@hotmail.com','Arturo1234','Una pregunta?','Una respuesta'),('123456789','Luz','Fernanda','Antonio','1998-01-25','luz@hotmail.com','contraseña123456','¿Cuál es el nombre de tu perro','Freddy'),('222222222','Número2','numero2','Numero2','2222-02-22','alumno2@hotmail.com','Contraseña2','Pregunta2','Respuesta2'),('2468101','Daniela','Torres','No sé el otro','2001-06-21','daniela@hotmail.com','Daniela123','¿Daniela es muy enojona?','Sí'),('316246370','Arthur','Zaval','Moral','2000-06-17','sebzala@comunidad.unam.mx','Arthur1234','¿Fecha de nacimiento?','17-06-2000'),('333333333','Número3','numero3','Numero2','3333-03-03','alumno3@hotmail.com','Contraseña3','Pregunta2','Respuesta3'),('7654321','Luis','Villagomez','Pichardo','0000-00-00','Luis@hotmail.com','Pichardo123','¿Cómo te dicen todos','Pichi');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asentada`
--

DROP TABLE IF EXISTS `asentada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asentada` (
  `carrera_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `plantel_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`carrera_clave`,`plantel_clave`),
  KEY `fk_asentada_plantel` (`plantel_clave`),
  CONSTRAINT `fk_asentada_carrera` FOREIGN KEY (`carrera_clave`) REFERENCES `carrera` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_asentada_plantel` FOREIGN KEY (`plantel_clave`) REFERENCES `plantel` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asentada`
--

LOCK TABLES `asentada` WRITE;
/*!40000 ALTER TABLE `asentada` DISABLE KEYS */;
INSERT INTO `asentada` VALUES ('12345','10500');
/*!40000 ALTER TABLE `asentada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignatura` (
  `clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `creditos` int(11) NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `cupo` int(11) NOT NULL,
  `inscritos` int(11) NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
INSERT INTO `asignatura` VALUES ('11111',12,'Informática I: Introducción a la informática',30,18),('22222',8,'Estudio del aire',2,2),('33333',8,'Estudio del fuego',3,3),('54321',12,'Matemáticas VI: Investigación de operaciones',30,10),('98764',10,'Inglés I',50,35),('98765',12,'Investigación de mercados',30,30);
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `cupo` int(11) NOT NULL,
  `inscritos` int(11) NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES ('12345','Informática',5000,1500),('54321','Ingeniería Mecánica Eléctrica',2500,1300),('mal','MAL',666,0);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coordinacion`
--

DROP TABLE IF EXISTS `coordinacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordinacion` (
  `carrera_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `profesor_rfc` char(13) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`carrera_clave`),
  KEY `fk_coordinacion_proporciona` (`profesor_rfc`),
  CONSTRAINT `fk_coordinacion_carrera` FOREIGN KEY (`carrera_clave`) REFERENCES `carrera` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_coordinacion_proporciona` FOREIGN KEY (`profesor_rfc`) REFERENCES `profesor` (`RFC`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordinacion`
--

LOCK TABLES `coordinacion` WRITE;
/*!40000 ALTER TABLE `coordinacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `coordinacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dosificacion`
--

DROP TABLE IF EXISTS `dosificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosificacion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `numatencion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `alumno_nocuenta` char(9) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_dosificacion_alumno` (`alumno_nocuenta`),
  CONSTRAINT `dosificacion_ibfk_1` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dosificacion_ibfk_2` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dosificacion_ibfk_3` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dosificacion_ibfk_4` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dosificacion_ibfk_5` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dosificacion_alumno` FOREIGN KEY (`alumno_nocuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1522 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosificacion`
--

LOCK TABLES `dosificacion` WRITE;
/*!40000 ALTER TABLE `dosificacion` DISABLE KEYS */;
INSERT INTO `dosificacion` VALUES (1,1,'0000-00-00','09:10:00','123456789'),(1521,10,'2021-06-21','10:10:00','123456789');
/*!40000 ALTER TABLE `dosificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudia`
--

DROP TABLE IF EXISTS `estudia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudia` (
  `alumno_numcuenta` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `carrera_Clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `turno` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `a_ingreso` year(4) NOT NULL,
  PRIMARY KEY (`alumno_numcuenta`,`carrera_Clave`),
  KEY `fk_estudia_carrera` (`carrera_Clave`),
  CONSTRAINT `fk_estudia_alumno` FOREIGN KEY (`alumno_numcuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estudia_carrera` FOREIGN KEY (`carrera_Clave`) REFERENCES `carrera` (`clave`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudia`
--

LOCK TABLES `estudia` WRITE;
/*!40000 ALTER TABLE `estudia` DISABLE KEYS */;
INSERT INTO `estudia` VALUES ('316246370','12345','',0000);
/*!40000 ALTER TABLE `estudia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultad` (
  `clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `plantel_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `cupo` int(11) NOT NULL,
  `inscritos` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `fk_facultad_plantel` (`plantel_clave`),
  CONSTRAINT `fk_facultad_plantel` FOREIGN KEY (`plantel_clave`) REFERENCES `plantel` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad`
--

LOCK TABLES `facultad` WRITE;
/*!40000 ALTER TABLE `facultad` DISABLE KEYS */;
INSERT INTO `facultad` VALUES ('11600','10500','Facultad de Contaduría y Administración',10000,30000);
/*!40000 ALTER TABLE `facultad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `carrera_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `asignatura_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `clavegrupo` char(4) COLLATE utf8_spanish_ci NOT NULL,
  `aula` char(25) COLLATE utf8_spanish_ci NOT NULL,
  `dialu` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `diama` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `diami` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `diaju` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `diavi` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `diasa` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `periodo` char(7) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_grupo_asignatura` (`asignatura_clave`),
  KEY `fk_grupo_carrera` (`carrera_clave`),
  CONSTRAINT `fk_grupo_asignatura` FOREIGN KEY (`asignatura_clave`) REFERENCES `asignatura` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_grupo_carrera` FOREIGN KEY (`carrera_clave`) REFERENCES `carrera` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1246 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historialacademico`
--

DROP TABLE IF EXISTS `historialacademico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historialacademico` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `asignatura_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `alumno_numcuenta` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `calif` float NOT NULL,
  `creditos` int(11) NOT NULL,
  `periodo` char(6) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_historialacademico_alumno` (`alumno_numcuenta`),
  KEY `fk_historialacademico_asignatura` (`asignatura_clave`),
  CONSTRAINT `fk_historialacademico_alumno` FOREIGN KEY (`alumno_numcuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_historialacademico_asignatura` FOREIGN KEY (`asignatura_clave`) REFERENCES `asignatura` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historialacademico`
--

LOCK TABLES `historialacademico` WRITE;
/*!40000 ALTER TABLE `historialacademico` DISABLE KEYS */;
INSERT INTO `historialacademico` VALUES (1,'11111','316246370',10,12,'2021-I'),(2,'11111','222222222',6,12,'2021-I');
/*!40000 ALTER TABLE `historialacademico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imparte`
--

DROP TABLE IF EXISTS `imparte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imparte` (
  `profesor_RFC` char(13) COLLATE utf8_spanish_ci NOT NULL,
  `asignatura_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `periodo` char(7) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`profesor_RFC`),
  KEY `fk_imparte_asignatura` (`asignatura_clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imparte`
--

LOCK TABLES `imparte` WRITE;
/*!40000 ALTER TABLE `imparte` DISABLE KEYS */;
INSERT INTO `imparte` VALUES ('CURP123456789','11111','2022-I');
/*!40000 ALTER TABLE `imparte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscribe`
--

DROP TABLE IF EXISTS `inscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscribe` (
  `folio` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `alumno_numcuenta` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `asignatura_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `periodo` char(6) COLLATE utf8_spanish_ci NOT NULL,
  `dos_ID` int(11) NOT NULL,
  PRIMARY KEY (`folio`,`alumno_numcuenta`,`asignatura_clave`),
  KEY `fk_inscribe_dosificacion` (`dos_ID`),
  KEY `fk_inscribe_asentada` (`alumno_numcuenta`),
  KEY `fk_inscribe_asignatura` (`asignatura_clave`),
  CONSTRAINT `fk_inscribe_asentada` FOREIGN KEY (`alumno_numcuenta`) REFERENCES `alumno` (`numcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_inscribe_asignatura` FOREIGN KEY (`asignatura_clave`) REFERENCES `asignatura` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_inscribe_dosificacion` FOREIGN KEY (`dos_ID`) REFERENCES `dosificacion` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscribe`
--

LOCK TABLES `inscribe` WRITE;
/*!40000 ALTER TABLE `inscribe` DISABLE KEYS */;
INSERT INTO `inscribe` VALUES ('00001','316246370','11111','2021-I',1);
/*!40000 ALTER TABLE `inscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_estudios`
--

DROP TABLE IF EXISTS `plan_estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_estudios` (
  `clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `carrera_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `generacion` int(11) NOT NULL,
  `semestres` int(11) NOT NULL,
  `creditosob` int(11) NOT NULL,
  `creditosop` int(11) NOT NULL,
  `vigencia` char(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel` char(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lim_inscrp` int(11) DEFAULT NULL,
  PRIMARY KEY (`clave`),
  KEY `fk_plan_estudios_carrera` (`carrera_clave`),
  CONSTRAINT `fk_plan_estudios_carrera` FOREIGN KEY (`carrera_clave`) REFERENCES `carrera` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_estudios`
--

LOCK TABLES `plan_estudios` WRITE;
/*!40000 ALTER TABLE `plan_estudios` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan_estudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantel`
--

DROP TABLE IF EXISTS `plantel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantel` (
  `clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `cupo` int(11) NOT NULL,
  `inscritos` int(50) NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantel`
--

LOCK TABLES `plantel` WRITE;
/*!40000 ALTER TABLE `plantel` DISABLE KEYS */;
INSERT INTO `plantel` VALUES ('10500','Facultad de Contaduría y Administración',30000,20000),('11111','Plantel de genero',45,10);
/*!40000 ALTER TABLE `plantel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `RFC` char(13) COLLATE utf8_spanish_ci NOT NULL,
  `numtrabajador` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `appaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `apmaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` char(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proporciona`
--

DROP TABLE IF EXISTS `proporciona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proporciona` (
  `se_RFC` char(13) COLLATE utf8_spanish_ci NOT NULL,
  `dos_ID` int(11) NOT NULL,
  PRIMARY KEY (`se_RFC`,`dos_ID`),
  KEY `fk_proporciona_servicios_escolares` (`dos_ID`),
  CONSTRAINT `fk_proporciona_servicios_escolares` FOREIGN KEY (`dos_ID`) REFERENCES `dosificacion` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proporciona`
--

LOCK TABLES `proporciona` WRITE;
/*!40000 ALTER TABLE `proporciona` DISABLE KEYS */;
INSERT INTO `proporciona` VALUES ('RFC_1',1);
/*!40000 ALTER TABLE `proporciona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios_escolares`
--

DROP TABLE IF EXISTS `servicios_escolares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios_escolares` (
  `RFC` char(13) COLLATE utf8_spanish_ci NOT NULL,
  `numtrabajador` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `appaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `apmaterno` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` char(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios_escolares`
--

LOCK TABLES `servicios_escolares` WRITE;
/*!40000 ALTER TABLE `servicios_escolares` DISABLE KEYS */;
INSERT INTO `servicios_escolares` VALUES ('RFC_1','1','Trabajador1','Apellido1','Apellido_Ma1','Trabajador1@hotmail.com'),('RFC_2','2','Trabajador2','Apellido2','Apellido_Ma2','Trabajador2@hotmail.com'),('RFC_3','3','Trabajador3','Apellido3','Apellido_Ma3','Trabajador3@hotmail.com');
/*!40000 ALTER TABLE `servicios_escolares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiene`
--

DROP TABLE IF EXISTS `tiene`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiene` (
  `asignatura_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `planestudios_clave` char(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`asignatura_clave`,`planestudios_clave`),
  KEY `fk_tiene_plan_estudios` (`planestudios_clave`),
  CONSTRAINT `fk_tiene_asignatura` FOREIGN KEY (`asignatura_clave`) REFERENCES `asignatura` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tiene_plan_estudios` FOREIGN KEY (`planestudios_clave`) REFERENCES `plan_estudios` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiene`
--

LOCK TABLES `tiene` WRITE;
/*!40000 ALTER TABLE `tiene` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiene` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-19 17:56:41
