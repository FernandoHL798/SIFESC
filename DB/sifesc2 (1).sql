-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 19:58:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`usuario_id_fk`, `updated_at`, `created_at`) VALUES
(1, '2021-11-25 21:54:25', '2021-11-25 21:54:25'),
(2, '2021-11-25 22:05:57', '2021-11-25 22:05:57'),
(3, '2021-11-25 22:07:41', '2021-11-25 22:07:41'),
(4, '2021-11-25 22:07:41', '2021-11-25 22:07:41'),
(5, '2021-11-25 22:14:27', '2021-11-25 22:14:27'),
(6, '2021-11-25 22:14:27', '2021-11-25 22:14:27'),
(8, '2021-11-25 22:14:48', '2021-11-25 22:14:48'),
(11, '2021-12-06 17:46:04', '2021-12-06 17:46:04');

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
  `id_periodo_fk` int(100) NOT NULL,
  `cupo` int(3) NOT NULL,
  `inscritos` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `id_usuarioprofesor_fk`, `id_grupo_fk`, `id_periodo_fk`, `cupo`, `inscritos`, `updated_at`, `created_at`) VALUES
(1, 3, 31, 1, 25, 0, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(2, 3, 1, 1, 25, 0, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(3, 5, 2, 1, 25, 0, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(4, 5, 4, 1, 25, 0, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(5, 7, 11, 1, 25, 0, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(6, 7, 14, 1, 25, 0, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(7, 9, 12, 1, 25, 0, '2021-11-25 23:33:34', '2021-11-25 23:33:34'),
(8, 9, 15, 1, 25, 0, '2021-11-25 23:33:34', '2021-11-25 23:33:34'),
(9, 7, 21, 1, 25, 0, '2021-12-11 17:27:14', '2021-12-11 17:27:14');

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
(1, 9, 100, 'Administración I. Proceso Administrativo', 6, NULL, NULL, 1, 1, '2021-11-25 22:31:38', '2021-11-25 22:31:38'),
(2, 9, 101, 'Comunicación oral y escrita', 6, NULL, NULL, 1, 1, '2021-11-25 22:31:56', '2021-11-25 22:31:56'),
(3, 9, 102, 'Informática I. Introducción a la informática', 8, NULL, NULL, 1, 1, '2021-11-25 22:34:33', '2021-11-25 22:34:33'),
(4, 9, 104, 'Taller de componentes de Hardware', 3, NULL, NULL, 1, 1, '2021-11-25 22:36:08', '2021-11-25 22:36:08'),
(5, 9, 105, 'Análisis y diseño de algoritmos', 8, NULL, NULL, 1, 1, '2021-11-25 22:37:31', '2021-11-25 22:37:31'),
(6, 9, 106, 'Matemáticas I. Matemáticas básicas', 8, NULL, NULL, 1, 1, '2021-11-25 22:38:24', '2021-11-25 22:38:24'),
(7, 9, 107, 'Programación I. Introducción a la programación y ambientes integrados', 8, NULL, 11, 1, 1, '2021-11-25 22:39:12', '2021-11-25 22:39:12'),
(8, 9, 200, 'Contabilidad', 8, NULL, NULL, 1, 2, '2021-11-25 22:40:00', '2021-11-25 22:40:00'),
(9, 1119, 201, 'Administración II. Estructura administrativas', 6, NULL, NULL, 1, 2, '2021-11-25 22:41:30', '2021-11-25 22:41:30'),
(10, 9, 202, 'Informática II. Organización de archivos y estructura de datos', 12, NULL, NULL, 1, 2, '2021-11-25 22:47:05', '2021-11-25 22:47:05'),
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
  `id_area_fk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `clave`, `nombre`, `created_at`, `updated_at`, `id_area_fk`) VALUES
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
  `id_area_fk` int(2) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`, `id_area_fk`, `id_plantel_fk`) VALUES
('0123mate', 'Matemáticas', 1, 2),
('101ma', 'Matemáticas', 1, 1),
('102fi', 'Física', 1, 1),
('103co', 'Contaduría', 1, 1),
('201bi', 'Biología', 2, 1),
('202qu', 'Química', 2, 1),
('301ge', 'Geografía', 3, 1),
('302ad', 'Administración', 3, 1),
('304in', 'Informática', 3, 1),
('305ec', 'Economía', 3, 1),
('306', 'Derecho', 3, 1);

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
-- Estructura de tabla para la tabla `estudia`
--

CREATE TABLE `estudia` (
  `id_usuarioalumno_fk` int(10) NOT NULL,
  `id_plan_fk` int(10) NOT NULL,
  `anio` varchar(5) NOT NULL,
  `baja` int(2) NOT NULL,
  `estatus` int(1) NOT NULL,
  `turno` int(1) NOT NULL,
  `semestre` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudia`
--

INSERT INTO `estudia` (`id_usuarioalumno_fk`, `id_plan_fk`, `anio`, `baja`, `estatus`, `turno`, `semestre`, `created_at`, `updated_at`) VALUES
(1, 9, '2008', 1, 1, 1, 1, '2021-12-02 05:19:26', '2021-12-02 05:19:26'),
(2, 1119, '2009', 0, 1, 2, 1, '2021-12-02 05:19:26', '2021-12-02 05:19:26'),
(3, 1119, '2010', 1, 2, 1, 2, '2021-12-02 05:20:07', '2021-12-02 05:20:07'),
(4, 1119, '2019', 1, 3, 2, 2, '2021-12-02 05:20:07', '2021-12-02 05:20:07'),
(5, 1119, '2017', 0, 1, 1, 1, '2021-12-02 05:20:39', '2021-12-02 05:20:39'),
(6, 1119, '2013', 0, 1, 2, 2, '2021-12-02 05:20:39', '2021-12-02 05:20:39'),
(8, 9, '2000', 1, 2, 1, 1, '2021-12-02 05:35:52', '2021-12-02 05:35:52'),
(8, 1119, '2019', 0, 1, 1, 2, '2021-12-02 05:20:57', '2021-12-02 05:20:57'),
(11, 9, '2019', 0, 1, 1, 2, '2021-12-06 17:48:30', '2021-12-06 17:48:30');

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
(1, 'F.E.S. Acatlán', '2021-11-25 16:32:35', '2021-11-25 16:32:35'),
(2, 'F.E.S. Aragón', '2021-11-25 16:32:35', '2021-11-25 16:32:35'),
(3, 'F.E.S. Cuautitlán', '2021-11-25 16:33:16', '2021-11-25 16:33:16'),
(4, 'F.E.S. Iztacala', '2021-11-25 16:33:16', '2021-11-25 16:33:16'),
(5, 'F.E.S. Zaragoza', '2021-11-25 16:33:32', '2021-11-25 16:33:32'),
(6, 'Facultad de Arquitectura', '2021-11-25 16:34:49', '2021-11-25 16:34:49'),
(7, 'Facultad de Contaduría y Administración', '2021-11-25 16:34:49', '2021-11-25 16:34:49'),
(8, 'Facultad de Artes y Diseño', '2021-11-25 16:35:48', '2021-11-25 16:35:48'),
(9, 'Facultad de Ciencias', '2021-11-25 16:35:48', '2021-11-25 16:35:48'),
(10, 'Facultad de Derecho', '2021-11-25 16:36:06', '2021-11-25 16:36:06'),
(11, 'Juana', '2021-12-05 15:37:46', '2021-12-05 15:37:46');

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
(35, 7, '1152', '2021-11-25 22:57:23', '2021-11-25 22:57:23'),
(36, 6, '1101', '2021-12-11 16:50:05', '2021-12-11 16:50:05'),
(37, 6, '1102', '2021-12-11 16:50:05', '2021-12-11 16:50:05');

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
(1, 1, 1, '2021-12-13', '09:10:00', '2021-09-10', '10:00:00', '2021-11-26 00:14:14', '2021-11-26 00:14:14'),
(2, 2, 1, '2021-08-27', '10:00:00', '2021-09-10', '10:00:00', '2021-11-26 00:15:28', '2021-11-26 00:15:28'),
(3, 3, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', '2021-11-26 00:15:50', '2021-11-26 00:15:50'),
(4, 4, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', '2021-11-26 00:15:57', '2021-11-26 00:15:57'),
(5, 5, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', '2021-11-26 00:16:11', '2021-11-26 00:16:11'),
(6, 6, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', '2021-11-26 00:16:17', '2021-11-26 00:16:17'),
(7, 8, 1, '2021-12-13', '12:15:00', '2021-09-10', '10:15:00', '2021-11-26 00:16:30', '2021-11-26 00:16:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `id_inscripcion_fk` int(15) NOT NULL,
  `id_asignacion_fk` int(10) NOT NULL,
  `estatus` int(2) NOT NULL,
  `calificacion` varchar(2) NOT NULL,
  `aprobado` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`id_inscripcion_fk`, `id_asignacion_fk`, `estatus`, `calificacion`, `aprobado`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '10', 1, '2021-12-03 02:29:19', '2021-12-03 02:29:19'),
(3, 1, 1, '0', 0, '2021-12-03 02:29:48', '2021-12-03 02:29:48'),
(4, 1, 1, '0', 0, '2021-12-03 02:29:56', '2021-12-03 02:29:56'),
(5, 1, 1, '0', 0, '2021-12-03 02:30:09', '2021-12-03 02:30:09'),
(6, 1, 1, '0', 0, '2021-12-03 02:30:16', '2021-12-03 02:30:16'),
(7, 1, 1, '0', 0, '2021-12-04 04:29:15', '2021-12-04 04:29:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(100) NOT NULL,
  `periodo` varchar(6) NOT NULL,
  `fecha_inscripcion_inicio` datetime NOT NULL,
  `fecha_inscripcion_fin` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_altas_bajas_inicio` datetime NOT NULL,
  `fecha_altas_bajas_fin` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_periodo_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_periodo_fin` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodo`, `fecha_inscripcion_inicio`, `fecha_inscripcion_fin`, `fecha_altas_bajas_inicio`, `fecha_altas_bajas_fin`, `fecha_periodo_inicio`, `fecha_periodo_fin`, `created_at`, `updated_at`) VALUES
(1, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:35:43', '2021-11-25 23:35:43'),
(2, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:36:13', '2021-11-25 23:36:13'),
(3, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:36:23', '2021-11-25 23:36:23'),
(4, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:36:31', '2021-11-25 23:36:31'),
(5, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:37:02', '2021-11-25 23:37:02'),
(6, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:37:11', '2021-11-25 23:37:11'),
(7, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:37:20', '2021-11-25 23:37:20'),
(8, '2022-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-11-25 23:37:28', '2021-11-25 23:37:28'),
(9, '2047', '0000-00-00 00:00:00', '2021-12-12 05:06:44', '0000-00-00 00:00:00', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', '2021-12-07 02:45:48', '2021-12-07 02:45:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandeestudios`
--

CREATE TABLE `plandeestudios` (
  `id_plan` int(10) NOT NULL,
  `id_carrera_fk` int(5) NOT NULL,
  `anio_plan` varchar(4) NOT NULL,
  `nombre_plan` varchar(100) NOT NULL,
  `creditos_obligatorios` int(5) NOT NULL,
  `creditos_optativos` int(5) NOT NULL,
  `creditos_totales` int(5) NOT NULL,
  `semestres` int(3) NOT NULL,
  `maximo_creditos` int(2) DEFAULT NULL,
  `minimo_creditos` int(2) NOT NULL,
  `maximo_semestres` int(2) NOT NULL,
  `minimo_materias` int(1) NOT NULL,
  `maximo_materias` int(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plandeestudios`
--

INSERT INTO `plandeestudios` (`id_plan`, `id_carrera_fk`, `anio_plan`, `nombre_plan`, `creditos_obligatorios`, `creditos_optativos`, `creditos_totales`, `semestres`, `maximo_creditos`, `minimo_creditos`, `maximo_semestres`, `minimo_materias`, `maximo_materias`, `updated_at`, `created_at`) VALUES
(9, 11, '1990', 'Lic. Informática', 439, 8, 447, 10, 68, 6, 15, 1, NULL, '2021-11-25 21:30:11', '2021-11-25 21:30:11'),
(849, 9, '1979', 'Lic. Administración', 430, 0, 430, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:31:25', '2021-11-25 21:31:25'),
(851, 9, '1979', 'Lic. en Administración - Agríc', 436, 0, 436, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:32:51', '2021-11-25 21:32:51'),
(853, 9, '1979', 'Lic. Administración - Estad y ', 448, 0, 448, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:33:17', '2021-11-25 21:33:17'),
(857, 9, '1979', 'Lic. Administración - Inv. de ', 448, 0, 448, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:33:37', '2021-11-25 21:33:37'),
(871, 10, '1974', 'Lic. en Contaduría', 438, 0, 438, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:35:09', '2021-11-25 21:35:09'),
(873, 10, '1974', 'Lic. en Contaduría - Agrícola', 447, 0, 438, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:35:53', '2021-11-25 21:35:53'),
(875, 10, '1974', 'Lic. en Contaduría - Auditoria', 438, 0, 438, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:35:27', '2021-11-25 21:35:27'),
(1119, 11, '2005', 'Lic. en Informática', 359, 72, 431, 9, 68, 6, 13, 1, 8, '2021-11-25 21:29:06', '2021-11-25 21:29:06'),
(1323, 10, '2009', 'Lic. en Contaduría - Comercio Exterior', 376, 40, 416, 9, 68, 6, 13, 1, NULL, '2021-11-25 21:36:51', '2021-11-25 21:36:51');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`usuario_id_fk`, `estatus`, `updated_at`, `created_at`) VALUES
(3, 1, '2021-11-25 22:58:30', '2021-11-25 22:58:30'),
(5, 1, '2021-11-25 22:58:30', '2021-11-25 22:58:30'),
(7, 1, '2021-11-25 22:59:03', '2021-11-25 22:59:03'),
(9, 1, '2021-11-25 22:59:03', '2021-11-25 22:59:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_departamento`
--

CREATE TABLE `profesor_departamento` (
  `usuarioprofesor_id_fk` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(1) NOT NULL,
  `departamento_id_fk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `contrasenia` varchar(32) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `pregunta_secreta` int(2) DEFAULT NULL,
  `respuesta_secreta` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cuenta_alumno`, `cuenta_profesor`, `cuenta_administrador`, `nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasenia`, `telefono`, `fecha_nacimiento`, `pregunta_secreta`, `respuesta_secreta`) VALUES
(1, '316039109', ' 1SOZU265656H', ' 536658215HG7', 'Nayelli', 'Soto', 'Zuñiga', 'nayellisotoz@gmail.com', '49884d2c0a17bd2aa388e8c8fc7b79fb', '5536980291', '2000-10-06', 0, NULL),
(2, '419070375', '', 'VIPL891212TA5', 'Luis Antonio', 'Villagomez', 'Pichardo', 'vip1891212@hotmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5528121287', '1989-12-12', 0, NULL),
(3, '316341042', 'TOHD0003244S1', '', 'Daniela Maria', 'Torres', 'Hernandez', 'danielatorresh@comunidad.unam.mx', '4a7d1ed414474e4033ac29ccb8653d9b', '5528083989', '2000-03-24', 0, NULL),
(4, '312100195', '', '', 'Erick', 'Arcos', 'Peralta', 'arcosperaltaerick@hotmail.com', '15101998', '5548731534', '1998-10-15', 0, NULL),
(5, '419071602', 'EIAL980125FQ3', 'EIAL980125FQ3', 'Luz Fernanda', 'Espinoza', 'Antonio', 'luzespinoza250198@gmail.com', '250198', '5560895392', '1998-01-25', 0, NULL),
(6, '314243919', '', '', 'Emmanuel', 'Martínez', 'Hernández', 'emmanuel_th_2698@hotmail.com', '261198', '5620907010', '1998-11-26', 0, NULL),
(7, '', 'ROBO000809VC4', '', 'Omar', 'Romo', 'Bautista', 'omar.skaa@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5534069985', '2000-08-09', 0, NULL),
(8, '316345978', '', '', 'Luis Fernando', 'Hernández', 'Ledezma', 'fernandohlqwe@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5537091960', '1998-04-16', 0, NULL),
(9, '', 'AAAN0005208B6', 'AAAN0005208B6', 'Natalia', 'Andrade', 'Ayala', 'nataliaaa@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5589562563', '2000-05-20', 0, NULL),
(10, '', '', 'NUJM970814QJ5', 'Marisol', 'Núñez', 'Juárez', 'marisolnj@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5545896505', '1997-08-14', 0, NULL),
(11, '321084654', 'uhdudgas', 'uhduhduhd', 'paco', 'lopez', 'ramirez', 'pacolr@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '5516516878', '2000-12-10', 2, 'manchas');

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
  ADD PRIMARY KEY (`usuario_id_fk`);

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
  ADD KEY `fk_asignacion_grupos` (`id_grupo_fk`),
  ADD KEY `id_periodo_fk` (`id_periodo_fk`);

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
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `id_area_fk` (`id_area_fk`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `fk_departamentos_area` (`id_area_fk`),
  ADD KEY `id_plantel_fk` (`id_plantel_fk`);

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
-- Indices de la tabla `estudia`
--
ALTER TABLE `estudia`
  ADD PRIMARY KEY (`id_usuarioalumno_fk`,`id_plan_fk`),
  ADD KEY `id_plan_fk` (`id_plan_fk`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

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
  ADD PRIMARY KEY (`id_inscripcion_fk`,`id_asignacion_fk`) USING BTREE,
  ADD KEY `id_asignacion` (`id_asignacion_fk`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

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
  ADD PRIMARY KEY (`usuario_id_fk`);

--
-- Indices de la tabla `profesor_departamento`
--
ALTER TABLE `profesor_departamento`
  ADD PRIMARY KEY (`usuarioprofesor_id_fk`,`departamento_id_fk`),
  ADD KEY `departamento_id_fk` (`departamento_id_fk`);

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
  MODIFY `id_asignacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asignacion_grupos` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asignacion_usuario` FOREIGN KEY (`id_usuarioprofesor_fk`) REFERENCES `profesor` (`usuario_id_fk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD CONSTRAINT `fk_asignaturas_plandeestudios` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`id_area_fk`) REFERENCES `area` (`id_area`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`id_plantel_fk`) REFERENCES `plantel` (`id_plantel`),
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
-- Filtros para la tabla `estudia`
--
ALTER TABLE `estudia`
  ADD CONSTRAINT `estudia_ibfk_1` FOREIGN KEY (`id_usuarioalumno_fk`) REFERENCES `alumno` (`usuario_id_fk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudia_ibfk_2` FOREIGN KEY (`id_plan_fk`) REFERENCES `plandeestudios` (`id_plan`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `id_asignacion` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion` (`id_asignacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_inscripcion` FOREIGN KEY (`id_inscripcion_fk`) REFERENCES `inscripcion` (`id_inscripcion`);

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
  ADD CONSTRAINT `fk_profesor_usuario` FOREIGN KEY (`usuario_id_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor_departamento`
--
ALTER TABLE `profesor_departamento`
  ADD CONSTRAINT `profesor_departamento_ibfk_1` FOREIGN KEY (`usuarioprofesor_id_fk`) REFERENCES `profesor` (`usuario_id_fk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profesor_departamento_ibfk_2` FOREIGN KEY (`departamento_id_fk`) REFERENCES `departamentos` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `fk_salon_edificio` FOREIGN KEY (`id_edificio_fk`) REFERENCES `edificio` (`id_edificio`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
