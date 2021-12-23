-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2021 a las 03:54:53
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sifesc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario_id_fk` int(100) NOT NULL,
  `estatus` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario_id_fk`, `estatus`, `created_at`, `updated_at`) VALUES
(2, 1, '2021-12-17 06:32:27', '2021-12-17 06:32:45'),
(5, 1, '2021-12-17 06:32:27', '2021-12-17 06:32:45'),
(9, 1, '2021-12-17 06:32:27', '2021-12-17 06:32:45'),
(10, 1, '2021-12-17 06:32:27', '2021-12-17 06:32:45');

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
(11, '2021-12-06 17:46:04', '2021-12-06 17:46:04'),
(12, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(13, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(14, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(15, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(16, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(17, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(18, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(19, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(20, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(21, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(22, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(23, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(24, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(25, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(26, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(27, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(28, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(29, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(30, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(32, '2021-12-23 00:22:35', '2021-12-23 00:22:35'),
(33, '2021-12-23 00:22:35', '2021-12-23 00:22:35'),
(34, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(35, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(36, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(37, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(38, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(39, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(40, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(41, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(42, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(43, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(44, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(45, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(46, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(47, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(48, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(49, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(50, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(51, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(52, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(53, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(54, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(55, '2021-12-23 00:24:36', '2021-12-23 00:24:36'),
(56, '2021-12-23 00:25:25', '2021-12-23 00:25:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre`) VALUES
(1, 'Ciencias Físico Matemáticas y de las Ingenierías'),
(2, 'Ciencias Biológicas, Químicas y de la Salud'),
(3, 'Ciencias Sociales'),
(4, 'Humanidades y las Artes');

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
(1, 1, 31, 8, 25, 7, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(2, 1, 1, 8, 25, 1, '2021-11-25 23:29:55', '2021-11-25 23:29:55'),
(3, 5, 2, 8, 25, 0, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(4, 5, 4, 8, 25, 0, '2021-11-25 23:31:04', '2021-11-25 23:31:04'),
(5, 7, 11, 9, 25, 0, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(6, 7, 14, 9, 25, 0, '2021-11-25 23:33:02', '2021-11-25 23:33:02'),
(7, 9, 12, 9, 25, 0, '2021-11-25 23:33:34', '2021-11-25 23:33:34'),
(8, 9, 15, 9, 25, 0, '2021-11-25 23:33:34', '2021-11-25 23:33:34'),
(9, 5, 21, 9, 25, 0, '2021-12-11 17:27:14', '2021-12-11 17:27:14'),
(10, 1, 27, 8, 25, 0, '2021-12-17 21:38:01', '2021-12-17 21:38:01'),
(11, 1, 32, 8, 25, 0, '2021-12-17 22:37:40', '2021-12-17 22:37:40');

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
  `estatus` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `id_plan_fk`, `codigo`, `nombre`, `creditos`, `antecesor`, `sucesor`, `caracter`, `semestre`, `estatus`, `updated_at`, `created_at`) VALUES
(1, 9, 100, 'Administración I. Proceso Administrativo', 6, NULL, NULL, 1, 1, 1, '2021-11-25 22:31:38', '2021-11-25 22:31:38'),
(2, 9, 101, 'Comunicación oral y escrita', 6, NULL, NULL, 1, 1, 1, '2021-11-25 22:31:56', '2021-11-25 22:31:56'),
(3, 9, 102, 'Informática I. Introducción a la informática', 8, NULL, NULL, 1, 1, 1, '2021-11-25 22:34:33', '2021-11-25 22:34:33'),
(4, 9, 104, 'Taller de componentes de Hardware', 3, NULL, NULL, 1, 1, 1, '2021-11-25 22:36:08', '2021-11-25 22:36:08'),
(5, 9, 105, 'Análisis y diseño de algoritmos', 8, NULL, NULL, 1, 1, 1, '2021-11-25 22:37:31', '2021-11-25 22:37:31'),
(6, 9, 106, 'Matemáticas I. Matemáticas básicas', 8, NULL, NULL, 1, 1, 1, '2021-11-25 22:38:24', '2021-11-25 22:38:24'),
(7, 9, 107, 'Programación I. Introducción a la programación y ambientes integrados', 8, NULL, NULL, 1, 1, 1, '2021-11-25 22:39:12', '2021-11-25 22:39:12'),
(8, 9, 200, 'Contabilidad', 8, NULL, NULL, 1, 2, 1, '2021-11-25 22:40:00', '2021-11-25 22:40:00'),
(9, 1119, 201, 'Administración II. Estructura administrativas', 6, NULL, NULL, 1, 2, 1, '2021-11-25 22:41:30', '2021-11-25 22:41:30'),
(10, 9, 202, 'Informática II. Organización de archivos y estructura de datos', 12, NULL, NULL, 1, 2, 1, '2021-11-25 22:47:05', '2021-11-25 22:47:05'),
(12, 1119, 100, 'ADMINISTRACIÓN I. PROCESO ADMINISTRATIVO', 6, NULL, NULL, 1, 1, 1, '2021-12-22 16:46:25', '2021-12-22 16:46:25'),
(13, 1119, 101, 'COMUNICACIÓN ORAL Y ESCRITA', 6, NULL, NULL, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(14, 1119, 102, 'INFORMÁTICA I. INTRODUCCIÓN A LA INFORMÁTICA', 12, NULL, NULL, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(15, 1119, 104, 'TALLER DE COMPONENTES DE HARDWARE', 3, NULL, NULL, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(16, 1119, 105, 'ANÁLISIS Y DISEÑO DE ALGORITMOS', 8, NULL, NULL, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(17, 1119, 106, 'MATEMÁTICAS I. MATEMÁTICAS BÁSICAS', 8, NULL, 37, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(18, 1119, 107, 'PROGRAMACIÓN I. INTRODUCCIÓN A LA PROGRAMACIÓN Y AMBIENTES INTEGRADOS', 8, NULL, 23, 1, 1, 1, '2021-12-22 16:54:40', '2021-12-22 16:54:40'),
(20, 1119, 200, 'CONTABILIDAD', 8, NULL, NULL, 1, 2, 1, '2021-12-22 16:59:06', '2021-12-22 16:59:06'),
(21, 1119, 201, 'ADMINISTRACIÓN II. ESTRUCTURAS ADMINISTRATIVAS', 6, NULL, NULL, 1, 2, 1, '2021-12-22 17:02:58', '2021-12-22 17:02:58'),
(22, 1119, 202, 'INFORMÁTICA II. ORGANIZACIÓN DE ARCHIVOS Y ESTRUCTURA DE DATOS', 12, NULL, NULL, 1, 2, 1, '2021-12-22 17:02:58', '2021-12-22 17:02:58'),
(23, 1119, 203, 'PROGRAMACIÓN II. PROGRAMACIÓN AVANZADA', 8, 18, NULL, 1, 2, 1, '2021-12-22 17:02:58', '2021-12-22 17:02:58'),
(24, 1119, 204, 'ARQUITECTURA DE COMPUTADORAS', 8, NULL, NULL, 1, 2, 1, '2021-12-22 17:02:58', '2021-12-22 17:02:58'),
(25, 1119, 205, 'MATEMÁTICAS II. LÓGICA MATEMÁTICA', 8, NULL, NULL, 1, 2, 1, '2021-12-22 17:02:58', '2021-12-22 17:02:58'),
(26, 1119, 300, 'DERECHO INFORMÁTICO', 8, NULL, NULL, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(27, 1119, 301, 'METODOLOGÍA DE LA INVESTIGACIÓN', 8, NULL, 48, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(28, 1119, 302, 'INFORMÁTICA III. ANÁLISIS Y DISEÑO DE SISTEMAS I', 12, NULL, 34, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(29, 1119, 303, 'PROGRAMACIÓN III. PROGRAMACIÓN VISUAL', 8, NULL, NULL, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(30, 1119, 304, 'SISTEMAS OPERATIVOS', 8, NULL, NULL, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(31, 1119, 305, 'MATEMÁTICAS III. MATEMÁTICAS FINANCIERAS', 8, NULL, NULL, 1, 3, 1, '2021-12-22 17:07:22', '2021-12-22 17:07:22'),
(32, 1119, 400, 'CONTABILIDAD DE COSTOS', 8, NULL, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(33, 1119, 401, 'MERCADOTECNIA', 6, NULL, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(34, 1119, 402, 'INFORMÁTICA IV. ANÁLISIS Y DISEÑO DE SISTEMAS II', 12, 28, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(35, 1119, 403, 'PROGRAMACIÓN IV. PROGRAMACIÓN DE INTERFACES', 12, NULL, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(36, 1119, 404, 'REDES DE COMPUTADORAS I', 8, NULL, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(37, 1119, 405, 'MATEMÁTICAS IV. MATEMÁTICAS COMPUTACIONALES', 8, 17, NULL, 1, 4, 1, '2021-12-22 17:11:42', '2021-12-22 17:11:42'),
(38, 1119, 500, 'FINANZAS', 8, NULL, 42, 1, 5, 1, '2021-12-22 17:18:38', '2021-12-22 17:18:38'),
(39, 1119, 501, 'ADMINISTRACIÓN DE CENTROS DE COMPUTO', 8, NULL, NULL, 1, 5, 1, '2021-12-22 17:18:38', '2021-12-22 17:18:38'),
(40, 1119, 502, 'INFORMÁTICA V. INDUSTRIA DEL SOFTWARE', 12, NULL, NULL, 1, 5, 1, '2021-12-22 17:18:38', '2021-12-22 17:18:38'),
(41, 1119, 503, 'INTRODUCCIÓN A LAS BASES DE DATOS', 10, NULL, 45, 1, 5, 1, '2021-12-22 17:18:38', '2021-12-22 17:18:38'),
(42, 1119, 600, 'EVALUACIÓN DE PROYECTOS', 8, 38, NULL, 1, 6, 1, '2021-12-22 17:29:50', '2021-12-22 17:29:50'),
(43, 1119, 601, 'ECONOMÍA', 8, NULL, NULL, 1, 6, 1, '2021-12-22 18:43:45', '2021-12-22 18:43:45'),
(44, 1119, 602, 'INFORMÁTICA VI. TÓPICOS SELECTOS DE INFORMÁTICA', 12, NULL, NULL, 1, 6, 1, '2021-12-22 18:43:45', '2021-12-22 18:43:45'),
(45, 1119, 603, 'DESARROLLO DE APLICACIONES DE BASE DE DATOS', 10, 41, NULL, 1, 6, 1, '2021-12-22 20:15:41', '2021-12-22 20:15:41'),
(46, 1119, 604, 'REDES DE COMPUTADORAS II', 8, NULL, NULL, 1, 6, 1, '2021-12-22 20:15:41', '2021-12-22 20:15:41'),
(47, 1119, 700, 'ANÁLISIS Y TOMA DE DECISIONES', 6, NULL, NULL, 1, 7, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(48, 1119, 701, 'SEMINARIO DE INVESTIGACIÓN', 8, 27, NULL, 1, 7, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(49, 1119, 702, 'SEGURIDAD INFORMÁTICA', 8, NULL, NULL, 1, 7, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(50, 1119, 703, 'LABORATORIO DE SISTEMAS DE INFORMACIÓN', 8, NULL, NULL, 1, 7, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(51, 1119, 704, 'MATEMÁTICAS VI. INVESTIGACIÓN DE OPERACIONES', 8, NULL, NULL, 1, 7, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(52, 1119, 800, 'AUDITORÍA EN INFORMÁTICA', 8, NULL, NULL, 1, 8, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(53, 1119, 801, 'ÉTICA Y DESARROLLO PROFESIONAL', 6, NULL, NULL, 1, 8, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(54, 1119, 900, 'ADMINISTRACIÓN PÚBLICA Y POLÍTICA INFORMÁTICA', 6, NULL, NULL, 1, 9, 1, '2021-12-22 20:27:40', '2021-12-22 20:27:40'),
(55, 1119, 2001, 'SIMULACIÓN DE NEGOCIOS', 8, NULL, NULL, 2, 0, 1, '2021-12-22 21:55:33', '2021-12-22 21:55:33'),
(56, 1119, 2002, 'ANÁLISIS FINANCIEROS MATEMÁTICOS CON SISTEMAS ELECTRÓNICOS', 8, NULL, NULL, 2, 0, 1, '2021-12-22 21:55:33', '2021-12-22 21:55:33'),
(57, 1119, 2003, 'SISTEMAS INFORMÁTICOS APLICADOS A LA PRODUCCIÓN', 6, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(58, 1119, 2004, 'ANÁLISIS MATEMÁTICOS APLICADOS A LA ADMINISTRACIÓN', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(59, 1119, 2005, 'HABILIDADES DE LIDERAZGO ESTRATÉGICO', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(60, 1119, 2006, 'ADMINISTRACIÓN INTERNACIONAL COMPARADA', 6, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(61, 1119, 2007, 'INTELIGENCIA DE NEGOCIOS', 6, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(62, 1119, 2008, 'INGLÉS I', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(63, 1119, 2009, 'INGLÉS II', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(64, 1119, 2010, 'COMERCIO EXTERIOR', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(65, 1119, 1958, 'CONTABILIDADES ESPECIALES', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(66, 1119, 1962, 'HERRAMIENTAS DE CÓMPUTO AVANZADO', 8, NULL, NULL, 2, 0, 1, '2021-12-22 22:14:56', '2021-12-22 22:14:56'),
(67, 1119, 4001, 'SEMINARIO DE TITULACIÓN', 0, NULL, NULL, 3, 0, 2, '2021-12-22 22:31:50', '2021-12-22 22:31:50'),
(68, 1119, 3000, 'SEMINARIO DE DESARROLLO DE APLICACIONES WEB I', 8, NULL, 81, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(69, 1119, 3001, 'SEMINARIO DE BASES DE DATOS AVANZADAS', 8, 45, NULL, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(70, 1119, 3002, 'SEMINARIO DE COMERCIO ELECTRÓNICO', 8, NULL, 83, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(71, 1119, 3003, 'SEMINARIO DE ANÁLISIS Y EXTRACCIÓN DE CONOCIMIENTOS DE BASES DE DATOS', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(72, 1119, 3004, 'SEMINARIO DE INFERENCIA ESTADÍSTICA CON USO DE SOFTWARE', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(73, 1119, 3005, 'SEMINARIO DE MINERÍA DE DATOS', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(74, 1119, 3006, 'SEMINARIO DE SISTEMAS INFORMÁTICOS PARA LA INTELIGENCIA DE NEGOCIOS', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(75, 1119, 3007, 'SEMINARIO DE TÉCNICAS ESTADÍSTICAS AVANZADAS PARA LA TOMA DE DECISIONES I', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(76, 1119, 3008, 'SEMINARIO DE ECUACIONES DIFERENCIALES I', 8, 17, 85, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(77, 1119, 3009, 'SEMINARIO DE REDES DE COMPUTADORAS I', 8, NULL, 86, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(78, 1119, 3, 'SEMINARIO DE SISTEMAS EXPERTOS I', 8, NULL, 87, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(79, 1119, 3010, 'SEMINARIO DE INTELIGENCIA ARTIFICIAL I', 8, NULL, 88, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(80, 1119, 3011, 'SEMINARIO DE GRAFICACIÓN POR COMPUTADORA I', 8, NULL, 89, 3, 8, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(81, 1119, 3012, 'SEMINARIO DE DESARROLLO DE APLICACIONES WEB II', 8, 68, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(82, 1119, 3013, 'SEMINARIO DE DESARROLLO DE APLICACIONES PARA DISPOSITIVOS MÓVILES', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(83, 1119, 3014, 'SEMINARIO DE ADMINISTRACIÓN DE SERVICIOS DE TI', 8, NULL, NULL, 3, 0, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(84, 1119, 3015, 'SEMINARIO DE TÉCNICAS ESTADÍSTICAS AVANZADAS PARA LA TOMA DE DECISIONES II', 8, 75, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(85, 1119, 3016, 'SEMINARIO DE ECUACIONES DIFERENCIALES II', 8, 76, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(86, 1119, 3017, 'SEMINARIO DE REDES DE COMPUTADORAS II', 8, 77, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(87, 1119, 3018, 'SEMINARIO DE SISTEMAS EXPERTOS II', 8, 78, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(88, 1119, 3019, 'SEMINARIO DE INTELIGENCIA ARTIFICIAL II', 8, 79, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29'),
(89, 1119, 3020, 'SEMINARIO DE GRAFICACIÓN POR COMPUTADORA II', 8, 80, NULL, 3, 9, 1, '2021-12-22 23:03:29', '2021-12-22 23:03:29');

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
(3, 103, 'Arquitectura del paisaje', '2021-11-25 16:24:47', '2021-11-25 16:24:47', 1),
(4, 133, 'Ciencias de materiales sustentables', '2021-11-25 16:24:47', '2021-11-25 16:24:47', 1),
(5, 138, 'Ciencias de datos', '2021-11-25 16:25:42', '2021-11-25 16:25:42', 1),
(6, 104, 'Ciencias de la computación', '2021-11-25 16:25:42', '2021-11-25 16:25:42', 1),
(7, 127, 'Ciencias de la tierra', '2021-11-25 16:26:36', '2021-11-25 16:26:36', 1),
(8, 105, 'Diseño industrial', '2021-11-25 16:26:36', '2021-11-25 16:26:36', 1),
(9, 301, 'Administración', '2021-11-25 16:28:28', '2021-11-25 16:28:28', 3),
(10, 304, 'Contaduría', '2021-11-25 16:28:28', '2021-11-25 16:28:28', 3),
(11, 308, 'Informática', '2021-11-25 16:28:50', '2021-11-25 16:28:50', 3),
(12, 211, 'Química', '2021-12-21 12:24:45', '2021-12-21 12:24:45', 2),
(13, 214, 'Química industrial', '2021-12-21 12:32:42', '2021-12-21 12:32:42', 2),
(14, 218, 'Bioquímica diagnóstica', '2021-12-21 12:34:15', '2021-12-21 12:34:15', 2),
(15, 219, 'Farmacia', '2021-12-21 12:35:07', '2021-12-21 12:35:07', 2),
(16, 205, 'Ingeniería en alimentos', '2021-12-21 12:36:20', '2021-12-21 12:36:20', 2),
(17, 207, 'Medicina Veterinaria y Zootecnia ', '2021-12-21 12:37:39', '2021-12-21 12:37:39', 2),
(18, 204, 'Ingeniería agrícola ', '2021-12-21 12:44:30', '2021-12-21 12:44:30', 2),
(19, 116, 'Ingeniería mecánica eléctrica', '2021-12-21 12:51:17', '2021-12-21 12:51:17', 1),
(20, 118, 'Ingeniería química ', '2021-12-21 12:52:11', '2021-12-21 12:52:11', 1),
(21, 126, 'Tecnología', '2021-12-21 12:52:46', '2021-12-21 12:52:46', 1),
(22, 114, 'Ingeniería industrial', '2021-12-21 12:53:36', '2021-12-21 12:53:36', 1),
(23, 130, 'Ingeniería en telecomunicaciones, sistemas y elect', '2021-12-21 12:54:28', '2021-12-21 12:54:28', 1),
(24, 423, 'Diseño y comunicación visual', '2021-12-21 12:55:27', '2021-12-21 12:55:27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_area_fk` int(2) NOT NULL,
  `id_plantel_fk` int(5) NOT NULL,
  `estatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`, `id_area_fk`, `id_plantel_fk`, `estatus`) VALUES
('00000102', 'PROFESOR POR ASIGNATURA', 4, 102, 1),
('00000105', 'PROFESOR POR ASIGNATURA', 2, 105, 1),
('00000106', 'PROFESOR POR ASIGNATURA', 3, 106, 1),
('00000111', 'PROFESOR POR ASIGNATURA', 1, 111, 1),
('00000116', 'PROFESOR POR ASIGNATURA', 2, 116, 1),
('00000118', 'PROFESOR POR ASIGNATURA', 1, 118, 1),
('00000195', 'PROFESOR POR ASIGNATURA', 1, 195, 1),
('0101MATEMATICAS', 'MATEMÁTICAS', 1, 111, 1),
('0102INGENYT', 'INGENIERÍA Y TECNOLOGÍA', 1, 195, 1),
('0102MATE', 'MATEMÁTICAS', 1, 105, 2),
('0103INGENIERIA', 'INGENIERÍA', 1, 111, 1),
('0104FISICA', 'FISICA', 1, 111, 1),
('0201CQUIMICAS', 'CIENCIAS QUÍMICAS', 2, 105, 1),
('0202CPECUARIAS', 'CIENCIAS PECUARIAS', 2, 116, 1),
('0203CBIOLOGICAS', 'CIENCIAS BIOLOGICAS', 2, 111, 1),
('0204CAGRICOLAS', 'CIENCIAS AGRÍCOLAS', 2, 118, 1),
('0301CSOCIALES', 'CIENCIAS SOCIALES', 3, 106, 1),
('0302CADMINISTRA', 'CIENCIAS ADMINISTRATIVAS', 3, 106, 1),
('0303COMPUTO', 'CÓMPUTO E INFORMÁTICA', 3, 106, 1),
('0401DISEÑOCOM', 'DISEÑO Y COMUNICACIÓN VISUAL', 4, 102, 1);

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
  `baja` double NOT NULL,
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
(11, 1118, '2019', 0, 1, 1, 2, '2021-12-06 17:48:30', '2021-12-06 17:48:30'),
(12, 1119, '2020', 0, 1, 1, 5, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(13, 1119, '2020', 0, 1, 1, 5, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(14, 1119, '2020', 0, 1, 1, 5, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(15, 1318, '2021', 0, 1, 2, 3, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(16, 1600, '2019', 1, 1, 1, 6, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(17, 1119, '2019', 0, 1, 1, 7, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(17, 1600, '2021', 0, 1, 2, 2, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(18, 1119, '2018', 0, 1, 1, 4, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(19, 1119, '2021', 0, 1, 2, 2, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(20, 1119, '2021', 0, 1, 2, 2, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(21, 1119, '2019', 0, 1, 1, 9, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(22, 1119, '2019', 0, 1, 1, 7, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(23, 1119, '2019', 0, 1, 2, 7, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(24, 1119, '2019', 1, 1, 1, 6, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(25, 1119, '2019', 0.5, 2, 1, 7, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(26, 1119, '2019', 1, 3, 1, 5, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(27, 1119, '2019', 1, 4, 1, 3, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(28, 1119, '2019', 0, 5, 1, 9, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(29, 1498, '2021', 0, 1, 1, 1, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(30, 1119, '2019', 0, 1, 2, 3, '2021-11-26 03:30:11', '2021-11-26 03:30:11'),
(32, 1122, '2021', 0, 1, 1, 1, '2021-12-23 00:29:29', '2021-12-23 00:29:29'),
(33, 1600, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(34, 1316, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(35, 1317, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(36, 1136, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(37, 1505, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(38, 1506, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(39, 1140, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(40, 1498, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(41, 1118, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(42, 1549, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(43, 1543, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(44, 1318, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(45, 1387, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(46, 1119, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(47, 1608, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(48, 1092, '2021', 0, 1, 1, 1, '2021-12-23 00:36:00', '2021-12-23 00:36:00'),
(48, 1119, '2021', 0, 1, 1, 1, '2021-12-23 00:46:26', '2021-12-23 00:46:26'),
(49, 1119, '2021', 0, 1, 1, 2, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(50, 1119, '2020', 0, 1, 1, 3, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(51, 1119, '2020', 0, 1, 1, 4, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(52, 1119, '2019', 0, 1, 1, 5, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(53, 1119, '2019', 0, 1, 1, 6, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(54, 1119, '2018', 0, 1, 1, 7, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(55, 1119, '2018', 0, 1, 1, 8, '2021-12-23 00:51:06', '2021-12-23 00:51:06'),
(56, 1119, '2017', 0, 1, 1, 9, '2021-12-23 00:51:06', '2021-12-23 00:51:06');

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
(10, 'Facultad de Derecho', '2021-11-25 16:36:06', '2021-11-25 16:36:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(10) NOT NULL,
  `id_asignatura_fk` int(10) NOT NULL,
  `nombre_grupo` varchar(5) NOT NULL,
  `tipo` int(2) NOT NULL,
  `turno` int(2) NOT NULL,
  `estatus` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `id_asignatura_fk`, `nombre_grupo`, `tipo`, `turno`, `estatus`, `updated_at`, `created_at`) VALUES
(1, 1, '2201', 1, 0, 1, '2021-11-25 22:52:31', '2021-11-25 22:52:31'),
(2, 1, '1102', 1, 0, 1, '2021-11-25 22:52:31', '2021-11-25 22:52:31'),
(3, 1, '1103', 1, 0, 1, '2021-11-25 22:52:51', '2021-11-25 22:52:51'),
(4, 1, '1151', 1, 0, 2, '2021-11-25 22:52:51', '2021-11-25 22:52:51'),
(5, 1, '1152', 1, 0, 1, '2021-11-25 22:53:08', '2021-11-25 22:53:08'),
(6, 2, '1101', 1, 0, 1, '2021-11-25 22:53:08', '2021-11-25 22:53:08'),
(7, 2, '1102', 1, 0, 1, '2021-11-25 22:53:38', '2021-11-25 22:53:38'),
(8, 2, '1103', 1, 0, 2, '2021-11-25 22:53:38', '2021-11-25 22:53:38'),
(9, 2, '1151', 1, 0, 1, '2021-11-25 22:53:58', '2021-11-25 22:53:58'),
(10, 2, '1152', 1, 0, 1, '2021-11-25 22:53:58', '2021-11-25 22:53:58'),
(11, 3, '1101', 1, 0, 1, '2021-11-25 22:54:18', '2021-11-25 22:54:18'),
(12, 3, '1102', 1, 0, 2, '2021-11-25 22:54:18', '2021-11-25 22:54:18'),
(13, 3, '1103', 1, 0, 1, '2021-11-25 22:54:33', '2021-11-25 22:54:33'),
(14, 3, '1151', 1, 0, 1, '2021-11-25 22:54:33', '2021-11-25 22:54:33'),
(15, 3, '1152', 1, 0, 1, '2021-11-25 22:54:48', '2021-11-25 22:54:48'),
(16, 4, '1101', 1, 0, 1, '2021-11-25 22:54:48', '2021-11-25 22:54:48'),
(17, 4, '1102', 1, 0, 1, '2021-11-25 22:55:04', '2021-11-25 22:55:04'),
(18, 4, '1103', 1, 0, 1, '2021-11-25 22:55:04', '2021-11-25 22:55:04'),
(19, 4, '1151', 1, 0, 1, '2021-11-25 22:55:17', '2021-11-25 22:55:17'),
(20, 4, '1152', 1, 0, 1, '2021-11-25 22:55:17', '2021-11-25 22:55:17'),
(21, 5, '2201', 1, 0, 1, '2021-11-25 22:55:34', '2021-11-25 22:55:34'),
(22, 5, '1102', 1, 0, 1, '2021-11-25 22:55:34', '2021-11-25 22:55:34'),
(23, 5, '1103', 1, 0, 1, '2021-11-25 22:55:50', '2021-11-25 22:55:50'),
(24, 5, '1151', 1, 0, 1, '2021-11-25 22:55:50', '2021-11-25 22:55:50'),
(25, 5, '1152', 1, 0, 1, '2021-11-25 22:56:09', '2021-11-25 22:56:09'),
(26, 6, '1101', 1, 0, 1, '2021-11-25 22:56:09', '2021-11-25 22:56:09'),
(27, 6, '1102', 1, 0, 1, '2021-11-25 22:56:30', '2021-11-25 22:56:30'),
(28, 6, '1103', 1, 0, 1, '2021-11-25 22:56:30', '2021-11-25 22:56:30'),
(29, 6, '1151', 1, 0, 1, '2021-11-25 22:56:43', '2021-11-25 22:56:43'),
(30, 6, '1152', 1, 0, 1, '2021-11-25 22:56:43', '2021-11-25 22:56:43'),
(31, 7, '1101', 1, 0, 1, '2021-11-25 22:57:01', '2021-11-25 22:57:01'),
(32, 7, '1102', 1, 0, 1, '2021-11-25 22:57:01', '2021-11-25 22:57:01'),
(33, 7, '1103', 1, 0, 1, '2021-11-25 22:57:14', '2021-11-25 22:57:14'),
(34, 7, '1151', 1, 0, 1, '2021-11-25 22:57:14', '2021-11-25 22:57:14'),
(35, 7, '1152', 1, 0, 1, '2021-11-25 22:57:23', '2021-11-25 22:57:23'),
(36, 6, '1101', 1, 0, 1, '2021-12-11 16:50:05', '2021-12-11 16:50:05'),
(37, 6, '1102', 1, 0, 1, '2021-12-11 16:50:05', '2021-12-11 16:50:05');

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
  `estatus` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscripcion`, `hora_inscripcion`, `fecha_altas_bajas`, `hora_altas_bajas`, `estatus`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2021-12-17', '06:00:00', '2021-09-10', '10:00:00', 0, '2021-11-26 00:14:14', '2021-11-26 00:14:14'),
(2, 2, 1, '2021-08-27', '10:00:00', '2021-09-10', '10:00:00', 0, '2021-11-26 00:15:28', '2021-11-26 00:15:28'),
(3, 3, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', 0, '2021-11-26 00:15:50', '2021-11-26 00:15:50'),
(4, 4, 1, '2021-08-27', '10:05:00', '2021-09-10', '10:05:00', 0, '2021-11-26 00:15:57', '2021-11-26 00:15:57'),
(5, 5, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', 0, '2021-11-26 00:16:11', '2021-11-26 00:16:11'),
(6, 6, 1, '2021-08-27', '10:10:00', '2021-09-10', '10:10:00', 0, '2021-11-26 00:16:17', '2021-11-26 00:16:17'),
(7, 8, 1, '2021-12-15', '00:32:00', '2021-09-10', '10:15:00', 0, '2021-11-26 00:16:30', '2021-11-26 00:16:30');

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
(1, 3, 1, '0', 0, '2021-12-15 13:23:15', '2021-12-15 13:23:15'),
(2, 1, 1, '10', 1, '2021-12-03 02:29:19', '2021-12-03 02:29:19'),
(3, 1, 1, '0', 0, '2021-12-03 02:29:48', '2021-12-03 02:29:48'),
(4, 1, 1, '0', 0, '2021-12-03 02:29:56', '2021-12-03 02:29:56'),
(5, 1, 1, '0', 0, '2021-12-03 02:30:09', '2021-12-03 02:30:09'),
(5, 2, 1, '0', 0, '2021-12-17 08:06:14', '2021-12-17 08:06:14'),
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
  `estatus` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodo`, `fecha_inscripcion_inicio`, `fecha_inscripcion_fin`, `fecha_altas_bajas_inicio`, `fecha_altas_bajas_fin`, `fecha_periodo_inicio`, `fecha_periodo_fin`, `estatus`, `created_at`, `updated_at`) VALUES
(1, '2018-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:35:43', '2021-11-25 23:35:43'),
(2, '2018-2', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:36:13', '2021-11-25 23:36:13'),
(3, '2019-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:36:23', '2021-11-25 23:36:23'),
(4, '2019-2', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:36:31', '2021-11-25 23:36:31'),
(5, '2020-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:37:02', '2021-11-25 23:37:02'),
(6, '2020-2', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:37:11', '2021-11-25 23:37:11'),
(7, '2021-1', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:37:20', '2021-11-25 23:37:20'),
(8, '2021-2', '2021-08-27 17:35:24', '2021-12-12 05:06:44', '2021-09-10 17:35:24', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-11-25 23:37:28', '2021-11-25 23:37:28'),
(9, '2022-1', '0000-00-00 00:00:00', '2021-12-12 05:06:44', '0000-00-00 00:00:00', '2021-12-12 05:07:08', '2021-12-12 05:07:35', '2021-12-12 05:07:52', 0, '2021-12-07 02:45:48', '2021-12-07 02:45:48');

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
  `estatus` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plandeestudios`
--

INSERT INTO `plandeestudios` (`id_plan`, `id_carrera_fk`, `anio_plan`, `nombre_plan`, `creditos_obligatorios`, `creditos_optativos`, `creditos_totales`, `semestres`, `maximo_creditos`, `minimo_creditos`, `maximo_semestres`, `minimo_materias`, `maximo_materias`, `estatus`, `updated_at`, `created_at`) VALUES
(9, 11, '1990', 'Lic. Informática', 439, 8, 447, 10, 68, 6, 15, 1, NULL, 1, '2021-11-25 21:30:11', '2021-11-25 21:30:11'),
(849, 9, '1979', 'Lic. Administración', 430, 0, 430, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:31:25', '2021-11-25 21:31:25'),
(851, 9, '1979', 'Lic. en Administración - Agrícola', 436, 0, 436, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:32:51', '2021-11-25 21:32:51'),
(853, 9, '1979', 'Lic. Administración - Estad y ', 448, 0, 448, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:33:17', '2021-11-25 21:33:17'),
(857, 9, '1979', 'Lic. Administración - Inv. de ', 448, 0, 448, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:33:37', '2021-11-25 21:33:37'),
(871, 10, '1974', 'Lic. en Contaduría', 438, 0, 438, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:35:09', '2021-11-25 21:35:09'),
(873, 10, '1974', 'Lic. en Contaduría - Agrícola', 447, 0, 438, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:35:53', '2021-11-25 21:35:53'),
(875, 10, '1974', 'Lic. en Contaduría - Auditoria', 438, 0, 438, 9, 68, 6, 13, 1, NULL, 2, '2021-11-25 21:35:27', '2021-11-25 21:35:27'),
(1092, 24, '2002', 'Lic. en Diseño y comunicación Visual', 390, 40, 430, 9, 68, 4, 14, 1, NULL, 1, '2021-12-22 03:11:19', '2021-12-22 03:11:19'),
(1118, 20, '2005', 'Ing. Química', 349, 56, 405, 9, 68, 2, 14, 1, NULL, 1, '2021-12-22 02:45:37', '2021-12-22 02:45:37'),
(1119, 11, '2005', 'Lic. en Informática', 359, 72, 431, 9, 68, 6, 13, 1, 8, 1, '2021-11-25 21:29:06', '2021-11-25 21:29:06'),
(1122, 12, '2005', 'Lic. en Química', 330, 74, 404, 9, 68, 3, 14, 1, NULL, 1, '2021-12-22 01:33:39', '2021-12-22 01:33:39'),
(1136, 16, '2005', 'Ing. en Alimentos', 320, 80, 400, 9, 68, 6, 14, 1, NULL, 1, '2021-12-22 02:36:41', '2021-12-22 02:36:41'),
(1140, 18, '2005', 'Ing. Agrícola', 437, 12, 499, 10, 68, 2, 15, 1, NULL, 1, '2021-12-22 02:41:46', '2021-12-22 02:41:46'),
(1316, 14, '2009', 'Lic. en Bioquímica Diagnóstica', 298, 72, 370, 8, 68, 2, 12, 1, NULL, 1, '2021-12-22 02:32:39', '2021-12-22 02:32:39'),
(1317, 15, '2009', 'Lic. en Farmacia', 300, 72, 372, 8, 68, 2, 12, 1, NULL, 1, '2021-12-22 02:34:42', '2021-12-22 02:34:42'),
(1318, 10, '2009', 'Lic. en Contaduría', 376, 40, 416, 9, 68, 2, 14, 1, NULL, 1, '2021-12-22 02:53:08', '2021-12-22 02:53:08'),
(1323, 10, '2009', 'Lic. en Contaduría - Comercio Exterior', 376, 40, 416, 9, 68, 6, 13, 1, NULL, 1, '2021-11-25 21:36:51', '2021-11-25 21:36:51'),
(1387, 9, '2010', 'Lic. en Administración', 380, 24, 404, 9, 68, 4, 14, 1, NULL, 1, '2021-12-22 02:54:18', '2021-12-22 02:54:18'),
(1498, 19, '2012', 'Ing. Mecánico Electricista', 400, 16, 416, 9, 68, 4, 14, 1, NULL, 1, '2021-12-22 02:43:21', '2021-12-22 02:43:21'),
(1505, 17, '2012', 'Lic. en Medicina Veterinaria y Zootecnia', 361, 56, 417, 10, 68, 4, 15, 1, NULL, 1, '2021-12-22 02:38:34', '2021-12-22 02:38:34'),
(1506, 17, '2012', 'Lic. en Medicina Veterinaria y Zootecnia', 361, 56, 417, 10, 68, 4, 15, 1, NULL, 1, '2021-12-22 02:40:00', '2021-12-22 02:40:00'),
(1543, 23, '2012', 'Lic. en Ingeniería en Telecomunicaciones, Sistemas y Electrónica', 372, 40, 412, 9, 68, 6, 14, 1, NULL, 1, '2021-12-22 02:50:40', '2021-12-22 02:50:40'),
(1549, 22, '2012', 'Lic. en Ingeniería Industrial', 366, 40, 406, 9, 68, 4, 14, 1, NULL, 1, '2021-12-22 02:48:32', '2021-12-22 02:48:32'),
(1600, 13, '2013', 'Lic. en Química Industrial', 350, 16, 366, 8, 68, 4, 12, 1, NULL, 1, '2021-12-22 02:30:06', '2021-12-22 02:30:06'),
(1608, 24, '2013', 'Lic. en Diseño y Comunicación Visual', 390, 40, 430, 9, 68, 4, 14, 1, NULL, 1, '2021-12-22 03:01:43', '2021-12-22 03:01:43');

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
(1, 6, 'FACULTAD DE ARQUITECTURA', '2021-11-25 21:01:53', '2021-11-25 21:01:53'),
(2, 8, 'FACULTAD DE ARTES Y DISEÑO', '2021-11-25 21:01:53', '2021-11-25 21:01:53'),
(3, 9, 'FACULTAD DE CIENCIAS', '2021-11-25 21:03:09', '2021-11-25 21:03:09'),
(7, 10, 'FACULTAD DE DERECHO', '2021-11-25 21:03:09', '2021-11-25 21:03:09'),
(102, 3, 'F.E.S. CUAUTITLÁN (ARTES PLÁSTICAS)', '2021-11-25 21:04:32', '2021-11-25 21:04:32'),
(105, 3, 'F.E.S. CUAUTITLÁN (QUÍMICA)', '2021-11-25 21:06:06', '2021-11-25 21:06:06'),
(106, 3, 'F.E.S CUAUTITLÁN (CONTADURÍA)', '2021-11-25 21:06:06', '2021-11-25 21:06:06'),
(111, 3, 'F.E.S. CUAUTITLÁN (INGENIERÍA)', '2021-11-25 21:08:44', '2021-11-25 21:08:44'),
(116, 3, 'F.E.S. CUAUTITLÁN (VETERINARIA) ', '2021-12-21 11:23:40', '2021-12-21 11:23:40'),
(118, 3, 'F.E.S. CUAUTITLÁN (AGRÍCOLA) ', '2021-12-21 11:24:29', '2021-12-21 11:24:29'),
(195, 3, 'F.E.S. CUAUTITLÁN (TECNOLOGÍA) ', '2021-12-21 11:25:42', '2021-12-21 11:25:42'),
(207, 1, 'F.E.S. ACATLÁN (DERECHO)', '2021-11-25 21:11:25', '2021-11-25 21:11:25'),
(208, 1, 'F.E.S. ACATLÁN (ECONOMÍA)', '2021-11-25 21:11:25', '2021-11-25 21:11:25');

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
(1, 1, '2021-12-17 20:39:20', '2021-12-17 20:39:20'),
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
  `departamento_id_fk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor_departamento`
--

INSERT INTO `profesor_departamento` (`usuarioprofesor_id_fk`, `created_at`, `updated_at`, `estatus`, `departamento_id_fk`) VALUES
(1, '2021-12-22 04:30:09', '2021-12-22 04:30:09', 1, '0302CADMINISTRA'),
(3, '2021-12-22 04:30:09', '2021-12-22 04:30:09', 1, '0303COMPUTO');

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
(1, '316039109', ' 1SOZU265656H', ' 536658215HG7', 'Nayelli', 'Soto', 'Zuñiga', 'nayellisotoz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5536980291', '2000-10-06', 1, 'morado'),
(2, '419070375', '', 'VIPL891212TA5', 'Luis Antonio', 'Villagomez', 'Pichardo', 'vip1891212@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5528121287', '1989-12-12', 0, NULL),
(3, '316341042', 'TOHD0003244S1', '', 'Daniela Maria', 'Torres', 'Hernandez', 'danielatorresh@comunidad.unam.mx', '81dc9bdb52d04dc20036dbd8313ed055', '5528083989', '2000-03-24', 1, 'rojo'),
(4, '312100195', '', '', 'Erick', 'Arcos', 'Peralta', 'arcosperaltaerick@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5548731534', '1998-10-15', 0, NULL),
(5, '419071602', 'EIAL980125FQ3', 'EIAL980125FQ3', 'Luz Fernanda', 'Espinoza', 'Antonio', 'luzespinoza250198@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5560895392', '1998-01-25', 0, NULL),
(6, '314243919', '', '', 'Emmanuel', 'Martínez', 'Hernández', 'emmanuel_th_2698@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5620907010', '1998-11-26', 0, NULL),
(7, '', 'ROBO000809VC4', '', 'Omar', 'Romo', 'Bautista', 'omar.skaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5534069985', '2000-08-09', 1, 'azul'),
(8, '316345978', '', '', 'Luis Fernando', 'Hernández', 'Ledezma', 'fernandohlqwe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5537091960', '1998-04-16', 1, 'asd'),
(9, '', 'AAAN0005208B6', 'AAAN0005208B6', 'Natalia', 'Andrade', 'Ayala', 'nataliaaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5589562563', '2000-05-20', 0, NULL),
(10, '', '', 'NUJM970814QJ5', 'Marisol', 'Núñez', 'Juárez', 'marisolnj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5545896505', '1997-08-14', 0, NULL),
(11, '318084654', '', '', 'Francisco', 'López', 'Ramirez', 'pacolr@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5516516878', '2000-12-10', 2, 'manchas'),
(12, '320317879', '', '', 'Lilian', 'Castillo', 'Obrera', 'lilianmorales@gmail.com ', '81dc9bdb52d04dc20036dbd8313ed055', '5549786512', '1998-01-15', NULL, NULL),
(13, '320445620', '', '', 'Diana', 'Martínez', 'Montes', 'dianamtzmontes@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5563748920', '1996-02-16', NULL, NULL),
(14, '320315478', '', '', 'Tabatha', 'Santillán', 'Santiago', 'tabathasantillan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5574129622', '1999-03-17', NULL, NULL),
(15, '411391156', '', '', 'Alan', 'Zavala', 'Santos', 'alanzavala@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5612410378', '1994-04-18', NULL, NULL),
(16, '419798546', '', '', 'Pedro', 'Dorante', 'Huerta', 'huertadorp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5512336674', '1990-05-19', NULL, NULL),
(17, '419587123', '', '', 'Alberto', 'Juárez', 'Flores', 'floresjuareza@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5510124789', '1996-02-20', NULL, NULL),
(18, '419587125', '', '', 'Jaqueline', 'Ramírez', 'Blas', 'jackieblas@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5623411014', '2000-05-04', NULL, NULL),
(19, '321489560', '', '', 'Carolina', 'Zempoalteca', 'Yáñez', 'carobzempoalteca@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5578845665', '2001-06-22', NULL, NULL),
(20, '321786325', '', '', 'Mireya', 'Molina', 'Gómez', 'molinagomm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5683245104', '2000-07-23', NULL, NULL),
(21, '418960045', '', '', 'Elena', 'Duarte', 'Correa', 'elenacorread@gmail.com ', '81dc9bdb52d04dc20036dbd8313ed055', '5688475125', '1997-08-24', NULL, NULL),
(22, '419624587', '', '', 'María José', 'Sánchez ', 'Barragán', 'barraganmajo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5589764487', '2000-09-10', NULL, NULL),
(23, '419624588', '', '', 'Diego', 'Neria', 'Zamora', 'diegozamora@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5614148998', '2000-11-11', NULL, NULL),
(24, '419624589', '', '', 'Leslie', 'Águilar', 'Hernández', 'hernandezleslie@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5536600005', '2000-12-12', NULL, NULL),
(25, '419624590', '', '', 'Francisco', 'Velázquez', 'Enriquez', 'vefrancisco@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5578894531', '2000-04-13', NULL, NULL),
(26, '419624591', '', '', 'Axel', 'Altamirano', 'Ramírez', 'ramirezalta.axel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5549325618', '2000-05-14', NULL, NULL),
(27, '419624592', '', '', 'Gabriela', 'Lazcano', 'Jiménez', 'gabilazcano.j@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5674258564', '2000-06-15', NULL, NULL),
(28, '419624593', '', '', 'Carlos', 'Buenrostro', 'Marcelino', 'carlosbuenrostrom@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5549736520', '2000-07-16', NULL, NULL),
(29, '3219387002', '', '', 'Uriel', 'Sanchez', 'Villanueva', 'urielsv@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5548963715', '1999-10-10', NULL, NULL),
(30, '315624594', '', '', 'Frida', 'Sandoval', 'Vallarte', 'fridasv@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5549786523', '1996-08-08', NULL, NULL),
(31, '', 'MELM8305281H0', '', 'Marta', 'Meza', 'Licona', 'martamlic@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5534151534', '1988-03-20', NULL, NULL),
(32, '320781205', '', '', 'ANA LUISA', 'GALVÁN', 'HERRERA', 'anagherrera@gmail.com', '1234', '5549751263', '2004-05-26', NULL, NULL),
(33, '320781205', '', '', 'PAULA', 'TEJEDA', 'REYES', 'paulareyes@gmail.com', '1234', '5579845023', '2004-01-28', NULL, NULL),
(34, '320781206', '', '', 'SUSANA', 'RIVERA', 'NERI', 'susanarn@gmail.com', '1234', '5549751264', '2004-02-26', NULL, NULL),
(35, '320781207', '', '', 'JESUS ANTONIO', 'CHAVEZ', 'OCHOA', 'jachavez@gmail.com', '1234', '5549751265', '2004-03-06', NULL, NULL),
(36, '320781208', '', '', 'DANIEL', 'MENDOZA', 'FERNÁNDEZ', 'danielmendoza@gmail.com', '1234', '5549751266', '2004-04-07', NULL, NULL),
(37, '320781209', '', '', 'URIEL', 'MENDEZ', 'GARZA', 'urielmza@gmail.com', '1234', '5549751267', '2004-05-08', NULL, NULL),
(38, '320781210', '', '', 'KATERIN', 'ÁLVARES', 'VILLAREAL', 'katvillareal@gmail.com', '1234', '5549751268', '2004-06-09', NULL, NULL),
(39, '320781211', '', '', 'SAMANTHA', 'ROMERO', 'CASAS', 'sromerocasas@gmail.com', '1234', '5549751269', '2004-07-10', NULL, NULL),
(40, '320781212', '', '', 'ESTEFANIA', 'CASTILLO', 'MONROY', 'estefaniacm@gmail.com', '1234', '5549751270', '2004-08-11', NULL, NULL),
(41, '320781213', '', '', 'LETICIA', 'MORENO', 'Y SANTOS', 'leticiamorsant@gmail.com', '1234', '5549751271', '2004-09-12', NULL, NULL),
(42, '320781214', '', '', 'MIGUEL', 'ORTIZ', 'VARGAS', 'miguel.ovargas@gmail.com', '1234', '5549751272', '2004-10-13', NULL, NULL),
(43, '320781215', '', '', 'JONATHAN', 'AGUILAR', 'DELGADO', 'jonathan.aguilar@gmail.com', '1234', '5549751273', '2004-11-14', NULL, NULL),
(44, '320781216', '', '', 'GIOVANI', 'RUIZ', 'SUAREZ', 'gio99ruizs@gmail.com', '1234', '5549751274', '2004-12-15', NULL, NULL),
(45, '320781217', '', '', 'DAN', 'GUTIERREZ', 'PADILLA', 'danoadilla12@gmail.com', '1234', '5549751275', '2004-01-16', NULL, NULL),
(46, '320781218', '', '', 'ULISES', 'DÍAZ', 'PEÑA', 'ulisespdiazp@gmail.com', '1234', '5549751276', '2004-02-17', NULL, NULL),
(47, '320781219', '', '', 'LEONARDO', 'LARA', 'ACOSTA', 'leo.lara.acosta@gmail.com', '1234', '5549751277', '2004-03-18', NULL, NULL),
(48, '320781220', '', '', 'JAVIER', 'CRUZ', 'NAVARRO', 'javiercn@gmail.com', '1234', '5549751505', '2004-04-19', NULL, NULL),
(49, '320781221', '', '', 'BRIAN', 'PEREZ', 'PAIAGUA', 'brian_pp@gmail.com', '1234', '5516552348', '2004-05-20', NULL, NULL),
(50, '320781222', '', '', 'JUAN', 'LÓPEZ', 'COLIN', 'juanlc@gmail.com', '1234', '5514860003', '2004-06-21', NULL, NULL),
(51, '320781223', '', '', 'BRUNO', 'GARCIA', 'HUERTA', 'brunogarcia@gmail.com', '1234', '5596351256', '2004-07-22', NULL, NULL),
(52, '320781224', '', '', 'KEVIN', 'MARTÍNEZ', 'AGUAYO', 'kevin1999martinez@gmail.com', '1234', '5549751280', '2004-08-23', NULL, NULL),
(53, '320781225', '', '', 'GISSELLE', 'GUZMÁN', 'BARRIOS', 'gissbarrios@gmail.com', '1234', '5596140514', '2004-09-14', NULL, NULL),
(54, '320781226', '', '', 'GISSELLE', 'GUZMÁN', 'BARRIOS', 'gisselleguzmanbb@gmail.com', '1234', '5560231486', '2004-09-14', NULL, NULL),
(55, '320781227', '', '', 'NANCY', 'HERNÁNDEZ', 'MARTÍNEZ', 'nancymartinez@gmail.com', '1234', '5589551216', '2004-10-10', NULL, NULL),
(56, '320781228', '', '', 'MELISSA', 'HERNÁNDEZ', 'MARTÍNEZ', 'melisamartinez@gmail.com', '1234', '55565446', '2004-10-10', NULL, NULL),
(57, '', 'GMJL8805281J0', '', 'JOSÉ LUIS', 'GARCIA', 'MONTEZ', 'joseluga@gmail.com', '1234', '5513467811', '1988-05-28', NULL, NULL),
(58, '', 'RIMK8605142K1', '', 'KEVIN', 'RÍOS', 'MARTÍNEZ', 'kmartinezrios@gmail.com', '1234', '5513467812', '1986-05-14', NULL, NULL),
(59, '', 'VADM9002053L2', '', 'MADELEINE', 'DELGADO', 'VAZQUEZ', 'madeldv21@gmail.com', '1234', '5513467813', '1990-02-05', NULL, NULL),
(60, '', 'GOJR8805284M3', '', 'RICARDO', 'JUAREZ', 'GOMEZ', 'ricardojgomez@gmail.com', '1234', '5513467814', '1988-05-28', NULL, NULL);

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
  ADD KEY `fk_asignaturas_plandeestudios` (`id_plan_fk`),
  ADD KEY `antecesor` (`antecesor`),
  ADD KEY `sucesor` (`sucesor`);

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
  MODIFY `id_asignacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
  ADD CONSTRAINT `asignaturas_ibfk_1` FOREIGN KEY (`antecesor`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignaturas_ibfk_2` FOREIGN KEY (`sucesor`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE NO ACTION ON UPDATE CASCADE,
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
