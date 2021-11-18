-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sifesc
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
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `usuario_id_fk` int(100) NOT NULL,
  PRIMARY KEY (`usuario_id_fk`),
  CONSTRAINT `fk_administrador_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `usuario_id_fk` int(100) NOT NULL,
  `id_generacion_fk` int(5) NOT NULL,
  `pregunta_secreta` int(2) NOT NULL,
  `respuesta_secreta` varchar(40) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` int(1) NOT NULL,
  `baja` int(2) NOT NULL,
  PRIMARY KEY (`usuario_id_fk`),
  KEY `fk_alumno_generacion` (`id_generacion_fk`),
  CONSTRAINT `fk_alumno_generacion` FOREIGN KEY (`id_generacion_fk`) REFERENCES `generacion` (`id_generacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id_area` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `asignacion`
--

DROP TABLE IF EXISTS `asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignacion` (
  `id_asignacion` int(10) NOT NULL,
  `id_usuarioprofesor_fk` int(100) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `cupo` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_asignacion`),
  KEY `fk_asignacion_usuario` (`id_usuarioprofesor_fk`),
  KEY `fk_asignacion_grupos` (`id_grupo_fk`),
  CONSTRAINT `fk_asignacion_grupos` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_asignacion_usuario` FOREIGN KEY (`id_usuarioprofesor_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignaturas` (
  `id_asignatura` int(10) NOT NULL,
  `id_plan_fk` int(5) NOT NULL,
  `codigo` int(4) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `creditos` int(2) NOT NULL,
  `antecesor` int(10) NOT NULL,
  `sucesor` int(10) NOT NULL,
  `caracter` tinyint(2) NOT NULL,
  `semestre` tinyint(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_asignatura`),
  KEY `fk_asignaturas_plandeestudios` (`id_plan_fk`),
  CONSTRAINT `fk_asignaturas_plandeestudios` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `id_carrera` int(5) NOT NULL,
  `clave` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `area_fk` int(2) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id_departamento` varchar(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_area_fk` int(2) NOT NULL,
  PRIMARY KEY (`id_departamento`),
  KEY `fk_departamentos_area` (`id_area_fk`),
  CONSTRAINT `fk_departamentos_area` FOREIGN KEY (`id_area_fk`) REFERENCES `area` (`id_area`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dosificacion`
--

DROP TABLE IF EXISTS `dosificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosificacion` (
  `id_usuarioalumno_fk` int(100) NOT NULL,
  `id_periodo_fk` varchar(6) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `hora_inscripcion` time NOT NULL,
  `fecha_alta_baja` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuarioalumno_fk`,`id_periodo_fk`),
  KEY `fk_dosificacion_periodo` (`id_periodo_fk`),
  CONSTRAINT `fk_dosificacion_periodo` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_dosificacion_usuario` FOREIGN KEY (`id_usuarioalumno_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `edificio`
--

DROP TABLE IF EXISTS `edificio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edificio` (
  `id_edificio` int(5) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `pisos` varchar(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_edificio`),
  KEY `fk_edificio_plantel` (`id_plantel_fk`),
  CONSTRAINT `fk_edificio_plantel` FOREIGN KEY (`id_plantel_fk`) REFERENCES `plantel` (`id_plantel`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultad` (
  `id_facultad` int(5) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_facultad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `generacion`
--

DROP TABLE IF EXISTS `generacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generacion` (
  `id_generacion` int(10) NOT NULL,
  `id_plan_fk` int(5) NOT NULL,
  `anio` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_generacion`),
  KEY `fk_generacion_plandeestudios` (`id_plan_fk`),
  CONSTRAINT `fk_generacion_plandeestudios` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `id_grupo` int(10) NOT NULL,
  `id_asignatura_fk` int(10) NOT NULL,
  `nombre_grupo` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_grupo`),
  KEY `fk_grupos_asignaturas` (`id_asignatura_fk`),
  CONSTRAINT `fk_grupos_asignaturas` FOREIGN KEY (`id_asignatura_fk`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `id_horario` int(10) NOT NULL,
  `id_grupo_fk` int(10) NOT NULL,
  `id_salon_fk` int(5) NOT NULL,
  `inicio` time NOT NULL,
  `fin` time NOT NULL,
  `duracion` int(4) NOT NULL,
  `dia` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_horario`),
  KEY `fk_horario_grupos` (`id_grupo_fk`),
  KEY `fk_horario_salon` (`id_salon_fk`),
  CONSTRAINT `fk_horario_grupos` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_horario_salon` FOREIGN KEY (`id_salon_fk`) REFERENCES `salon` (`id_salon`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `inscripcion`
--

DROP TABLE IF EXISTS `inscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscripcion` (
  `id_inscripcion` int(15) NOT NULL,
  `id_usuarioalumno_fk` int(11) NOT NULL,
  `id_periodo_fk` varchar(6) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `hora_inscripcion` time NOT NULL,
  `fecha_altas_bajas` date NOT NULL,
  `hora_altas_bajas` time NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_inscripcion`),
  KEY `fk_inscripcion_usuario` (`id_usuarioalumno_fk`),
  KEY `fk_inscripcion_periodo` (`id_periodo_fk`),
  CONSTRAINT `fk_inscripcion_periodo` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_inscripcion_usuario` FOREIGN KEY (`id_usuarioalumno_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `id_inscripcion_fk` int(10) NOT NULL,
  `id_asignacion_fk` int(5) NOT NULL,
  `estatus` int(2) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `aprobado` int(1) NOT NULL,
  `veces_cursado` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_inscripcion_fk`,`id_asignacion_fk`),
  KEY `fk_movimiento_asignacion` (`id_asignacion_fk`),
  CONSTRAINT `fk_movimiento_asignacion` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion` (`id_asignacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_movimiento_inscripcion` FOREIGN KEY (`id_inscripcion_fk`) REFERENCES `inscripcion` (`id_inscripcion`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `id_periodo` varchar(6) NOT NULL,
  `id_asignacion_fk` int(5) NOT NULL,
  `fecha_inscripcion` datetime NOT NULL,
  `fecha_altas_bajas` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_periodo`),
  KEY `fk_periodo_asignacion` (`id_asignacion_fk`),
  CONSTRAINT `fk_periodo_asignacion` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion` (`id_asignacion`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `plandeestudios`
--

DROP TABLE IF EXISTS `plandeestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plandeestudios` (
  `id_plan` int(10) NOT NULL,
  `id_carrera_fk` int(5) NOT NULL,
  `anio_plan` varchar(4) NOT NULL,
  `creditos_obligatorios` int(5) NOT NULL,
  `creditos_optativos` int(5) NOT NULL,
  `creditos_totales` int(5) NOT NULL,
  `semestres` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_plan`),
  KEY `fk_plandeestudios_carrera` (`id_carrera_fk`),
  CONSTRAINT `fk_plandeestudios_carrera` FOREIGN KEY (`id_carrera_fk`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `plantel`
--

DROP TABLE IF EXISTS `plantel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantel` (
  `id_plantel` int(5) NOT NULL,
  `id_facultad_fk` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_plantel`),
  KEY `fk_plantel_facultad` (`id_facultad_fk`),
  CONSTRAINT `fk_plantel_facultad` FOREIGN KEY (`id_facultad_fk`) REFERENCES `facultad` (`id_facultad`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `plantel_carrera`
--

DROP TABLE IF EXISTS `plantel_carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantel_carrera` (
  `id_carrera_fk` int(5) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL,
  `aciertos_minimos` int(5) NOT NULL,
  `promedio_minimo` int(5) NOT NULL,
  `cupo` int(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_carrera_fk`,`id_plantel_fk`),
  KEY `fk_plantel_carrera_plantel` (`id_plantel_fk`),
  CONSTRAINT `fk_plantel_carrera_carrera` FOREIGN KEY (`id_plantel_fk`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_plantel_carrera_plantel` FOREIGN KEY (`id_plantel_fk`) REFERENCES `plantel` (`id_plantel`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `usuario_id_fk` int(100) NOT NULL,
  `estatus` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_departamento_fk` varchar(8) NOT NULL,
  PRIMARY KEY (`usuario_id_fk`),
  KEY `fk_profesor_departamentos` (`id_departamento_fk`),
  CONSTRAINT `fk_profesor_departamentos` FOREIGN KEY (`id_departamento_fk`) REFERENCES `departamentos` (`id_departamento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_profesor_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salon` (
  `id_salon` int(5) NOT NULL,
  `id_edificio_fk` int(5) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_salon`),
  KEY `fk_salon_edificio` (`id_edificio_fk`),
  CONSTRAINT `fk_salon_edificio` FOREIGN KEY (`id_edificio_fk`) REFERENCES `edificio` (`id_edificio`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `cuenta_alumno` varchar(10) NOT NULL,
  `cuenta_profesor` varchar(13) NOT NULL,
  `cuenta_administrador` varchar(13) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `primer_apellido` varchar(25) NOT NULL,
  `segundo_apellido` varchar(25) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-18  3:59:10
