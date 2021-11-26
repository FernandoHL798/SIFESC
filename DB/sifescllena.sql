-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 02:10:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sifesc2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario_id_fk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario_id_fk`) VALUES
(2),
(5),
(9),
(10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `usuario_id_fk` int(100) NOT NULL,
  `id_generacion_fk` int(10) NOT NULL,
  `pregunta_secreta` int(2) NOT NULL,
  `respuesta_secreta` varchar(40) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(1) NOT NULL,
  `baja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`usuario_id_fk`, `id_generacion_fk`, `pregunta_secreta`, `respuesta_secreta`, `updated_at`, `created_at`, `estatus`, `baja`) VALUES
(1, 7, 1, 'negrita', '2021-11-25 21:54:25', '2021-11-25 21:54:25', 2, 0),
(2, 4, 1, 'Pamela', '2021-11-25 22:05:57', '2021-11-25 22:05:57', 1, 0),
(3, 4, 3, 'Lic. Adolfo López Mateos', '2021-11-25 22:07:41', '2021-11-25 22:07:41', 1, 0),
(4, 7, 1, 'Carolina', '2021-11-25 22:07:41', '2021-11-25 22:07:41', 1, 0),
(5, 6, 1, 'Laura ', '2021-11-25 22:14:27', '2021-11-25 22:14:27', 1, 0),
(6, 4, 3, 'Justo Sierra', '2021-11-25 22:14:27', '2021-11-25 22:14:27', 1, 0),
(8, 7, 2, 'Manchas', '2021-11-25 22:14:48', '2021-11-25 22:14:48', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre`) VALUES
(1, 'Ciencias físico matemáticas y '),
(2, 'Ciencias biológicas, químicas '),
(3, 'Ciencias Sociales'),
(4, 'Humanidades y de las artes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(10) NOT NULL,
  `id_usuarioprofesor_fk` int(100) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `cupo` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `id_usuarioprofesor_fk`, `id_grupo_fk`, `cupo`, `updated_at`, `created_at`) VALUES
(1, 3, 31, 25, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(2, 3, 4, 25, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(3, 5, 1, 25, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(4, 5, 4, 25, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(5, 7, 11, 25, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(6, 7, 14, 25, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(7, 9, 12, 25, '2021-11-25 23:33:34', '2021-11-25 23:33:34'),
(8, 9, 15, 25, '2021-11-25 23:33:34', '2021-11-25 23:33:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(10) NOT NULL,
  `id_plan_fk` int(5) NOT NULL,
  `codigo` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `creditos` int(2) NOT NULL,
  `antecesor` int(10) DEFAULT NULL,
  `sucesor` int(10) DEFAULT NULL,
  `caracter` tinyint(2) NOT NULL,
  `semestre` tinyint(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `id_plan_fk`, `codigo`, `nombre`, `creditos`, `antecesor`, `sucesor`, `caracter`, `semestre`, `updated_at`, `created_at`) VALUES
(1, 1119, 100, 'Administración I. Proceso Administrativo', 6, NULL, NULL, 1, 1, '2021-11-25 22:31:38', '2021-11-25 22:31:38'),
(2, 1119, 101, 'Comunicación oral y escrita', 6, NULL, NULL, 1, 1, '2021-11-25 22:31:56', '2021-11-25 22:31:56'),
(3, 1119, 102, 'Informática I. Introducción a la informática', 12, NULL, NULL, 1, 1, '2021-11-25 22:34:33', '2021-11-25 22:34:33'),
(4, 1119, 104, 'Taller de componentes de Hardware', 3, NULL, NULL, 1, 1, '2021-11-25 22:36:08', '2021-11-25 22:36:08'),
(5, 1119, 105, 'Análisis y diseño de algoritmos', 8, NULL, NULL, 1, 1, '2021-11-25 22:37:31', '2021-11-25 22:37:31'),
(6, 1119, 106, 'Matemáticas I. Matemáticas básicas', 8, NULL, NULL, 1, 1, '2021-11-25 22:38:24', '2021-11-25 22:38:24'),
(7, 1119, 107, 'Programación I. Introducción a la programación y ambientes integrados', 8, NULL, 11, 1, 1, '2021-11-25 22:39:12', '2021-11-25 22:39:12'),
(8, 1119, 200, 'Contabilidad', 8, NULL, NULL, 1, 2, '2021-11-25 22:40:00', '2021-11-25 22:40:00'),
(9, 1119, 201, 'Administración II. Estructura administrativas', 6, NULL, NULL, 1, 2, '2021-11-25 22:41:30', '2021-11-25 22:41:30'),
(10, 1119, 202, 'Informática II. Organización de archivos y estructura de datos', 12, NULL, NULL, 1, 2, '2021-11-25 22:47:05', '2021-11-25 22:47:05'),
(11, 1119, 203, 'Programación II. Programación avanzada', 8, 7, NULL, 1, 2, '2021-11-25 22:49:53', '2021-11-25 22:49:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(5) NOT NULL,
  `clave` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `area_fk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `clave`, `nombre`, `created_at`, `updated_at`, `area_fk`) VALUES
(1, 101, 'Actuaria', '2021-11-25 16:22:44', '2021-11-25 16:22:44', 1),
(2, 102, 'Arquitectura', '2021-11-25 16:22:44', '2021-11-25 16:22:44', 1),
(3, 103, 'Arquitectura del paizaje', '2021-11-25 16:24:47', '2021-11-25 16:24:47', 1),
(4, 133, 'Ciencias de materiales sustentables', '2021-11-25 16:24:47', '2021-11-25 16:24:47', 1),
(5, 138, 'Ciencias de datos', '2021-11-25 16:25:42', '2021-11-25 16:25:42', 1),
(6, 104, 'Ciencias de la computación', '2021-11-25 16:25:42', '2021-11-25 16:25:42', 1),
(7, 127, 'Ciencias de la tierra', '2021-11-25 16:26:36', '2021-11-25 16:26:36', 1),
(8, 105, 'Diseño industrial', '2021-11-25 16:26:36', '2021-11-25 16:26:36', 1),
(9, 301, 'Administración', '2021-11-25 16:28:28', '2021-11-25 16:28:28', 3),
(10, 304, 'Contaduría', '2021-11-25 16:28:28', '2021-11-25 16:28:28', 3),
(11, 308, 'Informática', '2021-11-25 16:28:50', '2021-11-25 16:28:50', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` varchar(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_area_fk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`, `id_area_fk`) VALUES
('101ma', 'Matemáticas', 1),
('102ad', 'Administración', 1),
('103co', 'Contaduría', 1),
('201bi', 'Biología', 2),
('202qu', 'Química', 2),
('301ma', 'Matemáticas', 3),
('302ad', 'Administración', 3),
('304in', 'Informática', 3),
('305ec', 'Economía', 3),
('306', 'Derecho', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificacion`
--

CREATE TABLE `dosificacion` (
  `id_usuarioalumno_fk` int(100) NOT NULL,
  `id_periodo_fk` int(100) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `hora_inscripcion` time NOT NULL,
  `fecha_alta_baja` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `dosificacion`
--

INSERT INTO `dosificacion` (`id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscripcion`, `hora_inscripcion`, `fecha_alta_baja`, `updated_at`, `created_at`) VALUES
(1, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:11:14', '2021-11-26 00:11:14'),
(2, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:12:26', '2021-11-26 00:12:26'),
(3, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:12:34', '2021-11-26 00:12:34'),
(4, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:12:39', '2021-11-26 00:12:39'),
(5, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:12:46', '2021-11-26 00:12:46'),
(6, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:12:52', '2021-11-26 00:12:52'),
(8, 1, '2021-08-27', '10:00:00', '2021-09-10 10:00:00', '2021-11-26 00:13:40', '2021-11-26 00:13:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `id_edificio` int(5) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `pisos` varchar(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`id_edificio`, `id_plantel_fk`, `clave`, `pisos`, `updated_at`, `created_at`) VALUES
(1, 106, 'A10', '2', '2021-11-25 21:17:06', '2021-11-25 21:17:06'),
(2, 106, 'A11', '2', '2021-11-25 21:17:06', '2021-11-25 21:17:06'),
(3, 106, 'A12', '2', '2021-11-25 21:17:31', '2021-11-25 21:17:31'),
(4, 106, 'A09', '2', '2021-11-25 21:18:01', '2021-11-25 21:18:01'),
(5, 106, 'A08', '2', '2021-11-25 21:18:01', '2021-11-25 21:18:01'),
(6, 106, 'A07', '2', '2021-11-25 21:18:32', '2021-11-25 21:18:32'),
(7, 106, 'A06', '2', '2021-11-25 21:18:32', '2021-11-25 21:18:32'),
(8, 106, 'A05', '2', '2021-11-25 21:19:21', '2021-11-25 21:19:21'),
(9, 106, 'A04', '2', '2021-11-25 21:19:21', '2021-11-25 21:19:21'),
(10, 106, 'A03', '2', '2021-11-25 21:19:35', '2021-11-25 21:19:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(5) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `nombre_facultad`, `updated_at`, `created_at`) VALUES
(1, 'Facultad de Estudios Superiores Acatlán', '2021-11-25 16:32:35', '2021-11-25 16:32:35'),
(2, 'Facultad de Estudios Superiores Aragón', '2021-11-25 16:32:35', '2021-11-25 16:32:35'),
(3, 'Facultad de Estudios Superiores Cuautitlán', '2021-11-25 16:33:16', '2021-11-25 16:33:16'),
(4, 'Facultad de Estudios Superiores Iztacala', '2021-11-25 16:33:16', '2021-11-25 16:33:16'),
(5, 'Facultad de Estudios Superiores Zaragoza', '2021-11-25 16:33:32', '2021-11-25 16:33:32'),
(6, 'Facultad de Arquitectura', '2021-11-25 16:34:49', '2021-11-25 16:34:49'),
(7, 'Facultad de Contaduría y Administración', '2021-11-25 16:34:49', '2021-11-25 16:34:49'),
(8, 'Facultad de Artes y Diseño', '2021-11-25 16:35:48', '2021-11-25 16:35:48'),
(9, 'Facultad de Ciencias', '2021-11-25 16:35:48', '2021-11-25 16:35:48'),
(10, 'Facultad de Derecho', '2021-11-25 16:36:06', '2021-11-25 16:36:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generacion`
--

CREATE TABLE `generacion` (
  `id_generacion` int(10) NOT NULL,
  `id_plan_fk` int(5) NOT NULL,
  `anio` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generacion`
--

INSERT INTO `generacion` (`id_generacion`, `id_plan_fk`, `anio`, `updated_at`, `created_at`) VALUES
(1, 9, '2008', '2021-11-25 21:50:37', '2021-11-25 21:50:37'),
(2, 9, '2009', '2021-11-25 21:51:08', '2021-11-25 21:51:08'),
(3, 9, '2010', '2021-11-25 21:51:08', '2021-11-25 21:51:08'),
(4, 1119, '2013', '2021-11-25 21:52:15', '2021-11-25 21:52:15'),
(5, 1119, '2015', '2021-11-25 21:52:15', '2021-11-25 21:52:15'),
(6, 1119, '2017', '2021-11-25 21:52:55', '2021-11-25 21:52:55'),
(7, 1119, '2019', '2021-11-25 21:52:55', '2021-11-25 21:52:55'),
(8, 1119, '2020', '2021-11-25 21:53:19', '2021-11-25 21:53:19'),
(9, 1119, '2021', '2021-11-25 21:53:19', '2021-11-25 21:53:19'),
(10, 853, '2000', '2021-11-25 21:53:47', '2021-11-25 21:53:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(10) NOT NULL,
  `id_asignatura_fk` int(10) NOT NULL,
  `nombre_grupo` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `id_asignatura_fk`, `nombre_grupo`, `updated_at`, `created_at`) VALUES
(1, 1, '1101', '2021-11-25 22:52:31', '2021-11-25 22:52:31'),
(2, 1, '1102', '2021-11-25 22:52:31', '2021-11-25 22:52:31'),
(3, 1, '1103', '2021-11-25 22:52:51', '2021-11-25 22:52:51'),
(4, 1, '1151', '2021-11-25 22:52:51', '2021-11-25 22:52:51'),
(5, 1, '1152', '2021-11-25 22:53:08', '2021-11-25 22:53:08'),
(6, 2, '1101', '2021-11-25 22:53:08', '2021-11-25 22:53:08'),
(7, 2, '1102', '2021-11-25 22:53:38', '2021-11-25 22:53:38'),
(8, 2, '1103', '2021-11-25 22:53:38', '2021-11-25 22:53:38'),
(9, 2, '1151', '2021-11-25 22:53:58', '2021-11-25 22:53:58'),
(10, 2, '1152', '2021-11-25 22:53:58', '2021-11-25 22:53:58'),
(11, 3, '1101', '2021-11-25 22:54:18', '2021-11-25 22:54:18'),
(12, 3, '1102', '2021-11-25 22:54:18', '2021-11-25 22:54:18'),
(13, 3, '1103', '2021-11-25 22:54:33', '2021-11-25 22:54:33'),
(14, 3, '1151', '2021-11-25 22:54:33', '2021-11-25 22:54:33'),
(15, 3, '1152', '2021-11-25 22:54:48', '2021-11-25 22:54:48'),
(16, 4, '1101', '2021-11-25 22:54:48', '2021-11-25 22:54:48'),
(17, 4, '1102', '2021-11-25 22:55:04', '2021-11-25 22:55:04'),
(18, 4, '1103', '2021-11-25 22:55:04', '2021-11-25 22:55:04'),
(19, 4, '1151', '2021-11-25 22:55:17', '2021-11-25 22:55:17'),
(20, 4, '1152', '2021-11-25 22:55:17', '2021-11-25 22:55:17'),
(21, 5, '1101', '2021-11-25 22:55:34', '2021-11-25 22:55:34'),
(22, 5, '1102', '2021-11-25 22:55:34', '2021-11-25 22:55:34'),
(23, 5, '1103', '2021-11-25 22:55:50', '2021-11-25 22:55:50'),
(24, 5, '1151', '2021-11-25 22:55:50', '2021-11-25 22:55:50'),
(25, 5, '1152', '2021-11-25 22:56:09', '2021-11-25 22:56:09'),
(26, 6, '1101', '2021-11-25 22:56:09', '2021-11-25 22:56:09'),
(27, 6, '1102', '2021-11-25 22:56:30', '2021-11-25 22:56:30'),
(28, 6, '1103', '2021-11-25 22:56:30', '2021-11-25 22:56:30'),
(29, 6, '1151', '2021-11-25 22:56:43', '2021-11-25 22:56:43'),
(30, 6, '1152', '2021-11-25 22:56:43', '2021-11-25 22:56:43'),
(31, 7, '1101', '2021-11-25 22:57:01', '2021-11-25 22:57:01'),
(32, 7, '1102', '2021-11-25 22:57:01', '2021-11-25 22:57:01'),
(33, 7, '1103', '2021-11-25 22:57:14', '2021-11-25 22:57:14'),
(34, 7, '1151', '2021-11-25 22:57:14', '2021-11-25 22:57:14'),
(35, 7, '1152', '2021-11-25 22:57:23', '2021-11-25 22:57:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(10) NOT NULL,
  `id_grupo_fk` int(10) NOT NULL,
  `id_salon_fk` int(5) NOT NULL,
  `inicio` time NOT NULL,
  `fin` time NOT NULL,
  `duracion` double NOT NULL,
  `dia` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `id_grupo_fk`, `id_salon_fk`, `inicio`, `fin`, `duracion`, `dia`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '07:00:00', '09:00:00', 120, 1, '2021-11-26 00:00:50', '2021-11-26 00:00:50'),
(2, 1, 1, '09:00:00', '11:00:00', 120, 3, '2021-11-26 00:01:32', '2021-11-26 00:01:32'),
(3, 2, 2, '09:00:00', '11:00:00', 120, 1, '2021-11-26 00:01:57', '2021-11-26 00:01:57'),
(4, 3, 3, '07:00:00', '09:00:00', 120, 5, '2021-11-26 00:04:55', '2021-11-26 00:04:55'),
(5, 4, 3, '15:00:00', '17:00:00', 120, 2, '2021-11-26 00:05:21', '2021-11-26 00:05:21'),
(6, 5, 3, '15:00:00', '17:00:00', 120, 3, '2021-11-26 00:06:07', '2021-11-26 00:06:07'),
(7, 5, 4, '15:00:00', '17:00:00', 120, 5, '2021-11-26 00:07:14', '2021-11-26 00:07:14'),
(8, 6, 1, '09:00:00', '11:00:00', 120, 1, '2021-11-26 00:08:33', '2021-11-26 00:08:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(15) NOT NULL,
  `id_usuarioalumno_fk` int(100) NOT NULL,
  `id_periodo_fk` int(100) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `hora_inscripcion` time NOT NULL,
  `fecha_altas_bajas` date NOT NULL,
  `hora_altas_bajas` time NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscripcion`, `hora_inscripcion`, `fecha_altas_bajas`, `hora_altas_bajas`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2021-08-27', '10:00:00', '2021-09-10', '10:00:00', '2021-11-26 00:14:14', '2021-11-26 00:14:14'),
(2, 2, 1, '2021-08-27', '10:00:00', '2021-09-10', '10:00:00', '2021-11-26 00:15:28', '2021-11-26 00:15:28'),
(3, 3, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', '2021-11-26 00:15:50', '2021-11-26 00:15:50'),
(4, 4, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', '2021-11-26 00:15:57', '2021-11-26 00:15:57'),
(5, 5, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', '2021-11-26 00:16:11', '2021-11-26 00:16:11'),
(6, 6, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', '2021-11-26 00:16:17', '2021-11-26 00:16:17'),
(7, 8, 1, '2021-08-27', '10:15:00', '2021-09-10', '10:15:00', '2021-11-26 00:16:30', '2021-11-26 00:16:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `id_inscripcion_fk` int(10) NOT NULL,
  `id_asignacion_fk` int(10) NOT NULL,
  `estatus` int(2) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `aprobado` int(1) NOT NULL,
  `veces_cursado` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`id_inscripcion_fk`, `id_asignacion_fk`, `estatus`, `calificacion`, `aprobado`, `veces_cursado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 1, 1, '2021-11-26 00:19:51', '2021-11-26 00:19:51'),
(2, 1, 1, 10, 1, 1, '2021-11-26 00:21:29', '2021-11-26 00:21:29'),
(3, 1, 1, 10, 1, 1, '2021-11-26 00:21:39', '2021-11-26 00:21:39'),
(4, 1, 1, 10, 1, 1, '2021-11-26 00:21:48', '2021-11-26 00:21:48'),
(5, 1, 1, 10, 1, 1, '2021-11-26 00:21:54', '2021-11-26 00:21:54'),
(6, 1, 1, 10, 1, 1, '2021-11-26 00:22:05', '2021-11-26 00:22:05'),
(7, 1, 1, 10, 1, 1, '2021-11-26 00:22:10', '2021-11-26 00:22:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(100) NOT NULL,
  `id_asignacion_fk` int(10) NOT NULL,
  `periodo` varchar(6) NOT NULL,
  `fecha_inscripcion` datetime NOT NULL,
  `fecha_altas_bajas` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `id_asignacion_fk`, `periodo`, `fecha_inscripcion`, `fecha_altas_bajas`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:35:43', '2021-11-25 23:35:43'),
(2, 2, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:36:13', '2021-11-25 23:36:13'),
(3, 3, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:36:23', '2021-11-25 23:36:23'),
(4, 4, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:36:31', '2021-11-25 23:36:31'),
(5, 5, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:37:02', '2021-11-25 23:37:02'),
(6, 6, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:37:11', '2021-11-25 23:37:11'),
(7, 7, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:37:20', '2021-11-25 23:37:20'),
(8, 8, '2022-1', '2021-08-27 17:35:24', '2021-09-10 17:35:24', '2021-11-25 23:37:28', '2021-11-25 23:37:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandeestudios`
--

CREATE TABLE `plandeestudios` (
  `id_plan` int(10) NOT NULL,
  `id_carrera_fk` int(5) NOT NULL,
  `anio_plan` varchar(4) NOT NULL,
  `creditos_obligatorios` int(5) NOT NULL,
  `creditos_optativos` int(5) NOT NULL,
  `creditos_totales` int(5) NOT NULL,
  `semestres` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plandeestudios`
--

INSERT INTO `plandeestudios` (`id_plan`, `id_carrera_fk`, `anio_plan`, `creditos_obligatorios`, `creditos_optativos`, `creditos_totales`, `semestres`, `updated_at`, `created_at`) VALUES
(9, 11, '1990', 439, 8, 447, 10, '2021-11-25 21:30:11', '2021-11-25 21:30:11'),
(849, 9, '1979', 430, 0, 430, 9, '2021-11-25 21:31:25', '2021-11-25 21:31:25'),
(851, 9, '1979', 436, 0, 436, 9, '2021-11-25 21:32:51', '2021-11-25 21:32:51'),
(853, 9, '1979', 448, 0, 448, 9, '2021-11-25 21:33:17', '2021-11-25 21:33:17'),
(857, 9, '1979', 448, 0, 448, 9, '2021-11-25 21:33:37', '2021-11-25 21:33:37'),
(871, 10, '1974', 438, 0, 438, 9, '2021-11-25 21:35:09', '2021-11-25 21:35:09'),
(873, 10, '1974', 447, 0, 438, 9, '2021-11-25 21:35:53', '2021-11-25 21:35:53'),
(875, 10, '1974', 438, 0, 438, 9, '2021-11-25 21:35:27', '2021-11-25 21:35:27'),
(1119, 11, '2005', 359, 72, 431, 9, '2021-11-25 21:29:06', '2021-11-25 21:29:06'),
(1323, 10, '2009', 376, 40, 416, 9, '2021-11-25 21:36:51', '2021-11-25 21:36:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `id_plantel` int(5) NOT NULL,
  `id_facultad_fk` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`id_plantel`, `id_facultad_fk`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 6, 'Facultad de Arquitectura ', '2021-11-25 21:01:53', '2021-11-25 21:01:53'),
(2, 8, 'Facultad de Artes y Diseño', '2021-11-25 21:01:53', '2021-11-25 21:01:53'),
(3, 9, 'Facultad de Ciencias', '2021-11-25 21:03:09', '2021-11-25 21:03:09'),
(7, 10, 'Facultad de derecho', '2021-11-25 21:03:09', '2021-11-25 21:03:09'),
(102, 3, 'Artes plásticas', '2021-11-25 21:04:32', '2021-11-25 21:04:32'),
(105, 3, 'Química ', '2021-11-25 21:06:06', '2021-11-25 21:06:06'),
(106, 3, 'Contaduría ', '2021-11-25 21:06:06', '2021-11-25 21:06:06'),
(111, 3, 'Ingeniería', '2021-11-25 21:08:44', '2021-11-25 21:08:44'),
(207, 1, 'Derecho', '2021-11-25 21:11:25', '2021-11-25 21:11:25'),
(208, 1, 'Economía', '2021-11-25 21:11:25', '2021-11-25 21:11:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel_carrera`
--

CREATE TABLE `plantel_carrera` (
  `id_carrera_fk` int(5) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL,
  `aciertos_minimos` int(5) NOT NULL,
  `promedio_minimo` double NOT NULL,
  `cupo` int(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `plantel_carrera`
--

INSERT INTO `plantel_carrera` (`id_carrera_fk`, `id_plantel_fk`, `aciertos_minimos`, `promedio_minimo`, `cupo`, `updated_at`, `created_at`) VALUES
(2, 1, 78, 7, 97, '2021-11-25 23:26:47', '2021-11-25 23:26:47'),
(3, 1, 86, 7, 26, '2021-11-25 23:26:47', '2021-11-25 23:26:47'),
(9, 106, 68, 7, 245, '2021-11-25 23:24:09', '2021-11-25 23:24:09'),
(10, 106, 62, 7, 355, '2021-11-25 23:23:08', '2021-11-25 23:23:08'),
(11, 106, 69, 7, 79, '2021-11-25 23:23:08', '2021-11-25 23:23:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `usuario_id_fk` int(100) NOT NULL,
  `estatus` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_departamento_fk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`usuario_id_fk`, `estatus`, `updated_at`, `created_at`, `id_departamento_fk`) VALUES
(3, 1, '2021-11-25 22:58:30', '2021-11-25 22:58:30', '301ma'),
(5, 1, '2021-11-25 22:58:30', '2021-11-25 22:58:30', '302ad'),
(7, 1, '2021-11-25 22:59:03', '2021-11-25 22:59:03', '304in'),
(9, 1, '2021-11-25 22:59:03', '2021-11-25 22:59:03', '304in');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int(5) NOT NULL,
  `id_edificio_fk` int(5) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `id_edificio_fk`, `clave`, `updated_at`, `created_at`) VALUES
(1, 1, '1006', '2021-11-25 21:20:50', '2021-11-25 21:20:50'),
(2, 2, '1105', '2021-11-25 21:20:50', '2021-11-25 21:20:50'),
(3, 1, '1001', '2021-11-25 21:21:52', '2021-11-25 21:21:52'),
(4, 2, '1101', '2021-11-25 21:21:52', '2021-11-25 21:21:52'),
(5, 3, '1201', '2021-11-25 21:22:30', '2021-11-25 21:22:30'),
(6, 4, '0901', '2021-11-25 21:22:30', '2021-11-25 21:22:30'),
(7, 1, '1002', '2021-11-25 21:22:57', '2021-11-25 21:22:57'),
(8, 1, '1003', '2021-11-25 21:22:57', '2021-11-25 21:22:57'),
(9, 1, '1004', '2021-11-25 21:23:28', '2021-11-25 21:23:28'),
(10, 1, '1005', '2021-11-25 21:23:28', '2021-11-25 21:23:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `cuenta_alumno` varchar(10) NOT NULL,
  `cuenta_profesor` varchar(13) NOT NULL,
  `cuenta_administrador` varchar(13) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `primer_apellido` varchar(40) DEFAULT NULL,
  `segundo_apellido` varchar(40) DEFAULT NULL,
  `correo` varchar(70) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cuenta_alumno`, `cuenta_profesor`, `cuenta_administrador`, `nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasenia`, `telefono`, `fecha_nacimiento`) VALUES
(1, '316039109', ' ', ' ', 'Nayelli', 'Soto', 'Zuñiga', 'nayellisotoz@gmail.com', '06102000', '5536980291', '2000-10-06'),
(2, '419070375', '', 'VIPL891212TA5', 'Luis Antonio', 'Villagomez', 'Pichardo', 'vip1891212@hotmail.com', '12121989', '5528121287', '1989-12-12'),
(3, '316341042', 'TOHD0003244S1', '', 'Daniela Maria', 'Torres', 'Hernandez', 'danielatorresh@comunidad.unam.mx', '24032000', '5528083989', '2000-03-24'),
(4, '312100195', '', '', 'Erick', 'Arcos', 'Peralta', 'arcosperaltaerick@hotmail.com', '15101998', '5548731534', '1998-10-15'),
(5, '419071602', 'EIAL980125FQ3', 'EIAL980125FQ3', 'Luz Fernanda', 'Espinoza', 'Antonio', 'luzespinoza250198@gmail.com', '250198', '5560895392', '1998-01-25'),
(6, '314243919', '', '', 'Emmanuel', 'Martínez', 'Hernández', 'emmanuel_th_2698@hotmail.com', '261198', '5620907010', '1998-11-26'),
(7, '', 'ROBO000809VC4', '', 'Omar', 'Romo', 'Bautista', 'omar.skaa@gmail.com', '09082000', '5534069985', '2000-08-09'),
(8, '316345978', '', '', 'Luis Fernando', 'Hernández', 'Ledezma', 'fernandohlqwe@gmail.com', '16041998', '5537091960', '1998-04-16'),
(9, '', 'AAAN0005208B6', 'AAAN0005208B6', 'Natalia', 'Andrade', 'Ayala', 'nataliaaa@gmail.com', '20052000', '5589562563', '2000-05-20'),
(10, '', '', 'NUJM970814QJ5', 'Marisol', 'Núñez', 'Juárez', 'marisolnj@gmail.com', '14081997', '5545896505', '1997-08-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario_id_fk`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`usuario_id_fk`),
  ADD KEY `fk_alumno_generacion` (`id_generacion_fk`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `fk_asignacion_usuario` (`id_usuarioprofesor_fk`),
  ADD KEY `fk_asignacion_grupos` (`id_grupo_fk`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `fk_asignaturas_plandeestudios` (`id_plan_fk`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `fk_departamentos_area` (`id_area_fk`);

--
-- Indices de la tabla `dosificacion`
--
ALTER TABLE `dosificacion`
  ADD PRIMARY KEY (`id_usuarioalumno_fk`,`id_periodo_fk`),
  ADD KEY `fk_dosificacion_periodo` (`id_periodo_fk`);

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`id_edificio`),
  ADD KEY `fk_edificio_plantel` (`id_plantel_fk`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `generacion`
--
ALTER TABLE `generacion`
  ADD PRIMARY KEY (`id_generacion`),
  ADD KEY `fk_generacion_plandeestudios` (`id_plan_fk`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `fk_grupos_asignaturas` (`id_asignatura_fk`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `fk_horario_grupos` (`id_grupo_fk`),
  ADD KEY `fk_horario_salon` (`id_salon_fk`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `fk_inscripcion_usuario` (`id_usuarioalumno_fk`),
  ADD KEY `fk_inscripcion_periodo` (`id_periodo_fk`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`id_inscripcion_fk`,`id_asignacion_fk`),
  ADD KEY `fk_movimiento_asignacion` (`id_asignacion_fk`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`),
  ADD KEY `fk_periodo_asignacion` (`id_asignacion_fk`);

--
-- Indices de la tabla `plandeestudios`
--
ALTER TABLE `plandeestudios`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `fk_plandeestudios_carrera` (`id_carrera_fk`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`id_plantel`),
  ADD KEY `fk_plantel_facultad` (`id_facultad_fk`);

--
-- Indices de la tabla `plantel_carrera`
--
ALTER TABLE `plantel_carrera`
  ADD PRIMARY KEY (`id_carrera_fk`,`id_plantel_fk`),
  ADD KEY `fk_plantel_carrera_plantel` (`id_plantel_fk`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`usuario_id_fk`),
  ADD KEY `fk_profesor_departamentos` (`id_departamento_fk`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`),
  ADD KEY `fk_salon_edificio` (`id_edificio_fk`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `edificio`
--
ALTER TABLE `edificio`
  MODIFY `id_edificio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `generacion`
--
ALTER TABLE `generacion`
  MODIFY `id_generacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_generacion` FOREIGN KEY (`id_generacion_fk`) REFERENCES `generacion` (`id_generacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `fk_asignacion_grupos` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asignacion_usuario` FOREIGN KEY (`id_usuarioprofesor_fk`) REFERENCES `profesor` (`usuario_id_fk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD CONSTRAINT `fk_asignaturas_plandeestudios` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `fk_departamentos_area` FOREIGN KEY (`id_area_fk`) REFERENCES `area` (`id_area`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `dosificacion`
--
ALTER TABLE `dosificacion`
  ADD CONSTRAINT `dosificacion_ibfk_1` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dosificacion_usuario` FOREIGN KEY (`id_usuarioalumno_fk`) REFERENCES `alumno` (`usuario_id_fk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD CONSTRAINT `fk_edificio_plantel` FOREIGN KEY (`id_plantel_fk`) REFERENCES `plantel` (`id_plantel`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `generacion`
--
ALTER TABLE `generacion`
  ADD CONSTRAINT `fk_generacion_plandeestudios` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `fk_grupos_asignaturas` FOREIGN KEY (`id_asignatura_fk`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_grupos` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_horario_salon` FOREIGN KEY (`id_salon_fk`) REFERENCES `salon` (`id_salon`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_inscripcion_usuario` FOREIGN KEY (`id_usuarioalumno_fk`) REFERENCES `alumno` (`usuario_id_fk`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `fk_movimiento_asignacion` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion` (`id_asignacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movimiento_inscripcion` FOREIGN KEY (`id_inscripcion_fk`) REFERENCES `inscripcion` (`id_inscripcion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD CONSTRAINT `fk_periodo_asignacion` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion` (`id_asignacion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `plandeestudios`
--
ALTER TABLE `plandeestudios`
  ADD CONSTRAINT `fk_plandeestudios_carrera` FOREIGN KEY (`id_carrera_fk`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD CONSTRAINT `fk_plantel_facultad` FOREIGN KEY (`id_facultad_fk`) REFERENCES `facultad` (`id_facultad`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `plantel_carrera`
--
ALTER TABLE `plantel_carrera`
  ADD CONSTRAINT `fk_plantel_carrera_plantel` FOREIGN KEY (`id_plantel_fk`) REFERENCES `plantel` (`id_plantel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `plantel_carrera_ibfk_1` FOREIGN KEY (`id_carrera_fk`) REFERENCES `carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_departamentos` FOREIGN KEY (`id_departamento_fk`) REFERENCES `departamentos` (`id_departamento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_profesor_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `fk_salon_edificio` FOREIGN KEY (`id_edificio_fk`) REFERENCES `edificio` (`id_edificio`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
