-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 06:59:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ssabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `nombre` varchar(100) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `ci` int(10) DEFAULT NULL,
  `semestre` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`nombre`, `user`, `ci`, `semestre`) VALUES
('Jose Rony Villegas', 'rony', 123456, 1),
('Wilder Mayta Machicado', 'wilder', 9909707, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrito`
--

CREATE TABLE `inscrito` (
  `ci` int(10) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `semestre` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscrito`
--

INSERT INTO `inscrito` (`ci`, `nombre`, `sigla`, `semestre`) VALUES
(9909707, 'Wilder Mayta Machicado', 'FIS–122', 2),
(9909707, 'Wilder Mayta Machicado', 'INF–121', 2),
(9909707, 'Wilder Mayta Machicado', 'FIS–122', 2),
(9909707, 'Wilder Mayta Machicado', 'INF–121', 2),
(9909707, 'Wilder Mayta Machicado', 'LAB–121', 2),
(9909707, 'Wilder Mayta Machicado', 'LAB–122', 2),
(9909707, 'Wilder Mayta Machicado', 'MAT–124', 2),
(9909707, 'Wilder Mayta Machicado', 'MAT–125', 2);

--
-- Disparadores `inscrito`
--
DELIMITER $$
CREATE TRIGGER `nota` AFTER INSERT ON `inscrito` FOR EACH ROW insert into Nota values(new.ci,new.sigla,0,0,0,new.semestre)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `sigla` varchar(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `semestre` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`sigla`, `nombre`, `semestre`) VALUES
('EST–133', 'Estadística I', 3),
('EST–145', 'Estadística II', 4),
('EST–155', 'Investigación de Operaciones I', 5),
('EST–165', 'Investigación de Operaciones II', 6),
('FIS–122', 'Física I', 2),
('FIS–132', 'Física II', 3),
('INF–111', 'Introducción a la Informática', 1),
('INF–112', 'Organización de Computadoras', 1),
('INF–113', 'Laboratorio de Computación', 1),
('INF–121', 'Algoritmos y Programación', 2),
('INF–131', 'Estructura de Datos y Algoritmos', 3),
('INF–141', 'Sistema de Gestión', 4),
('INF–142', 'Fundamentos Digitales', 4),
('INF–143', 'Taller de Programación', 4),
('INF–144', 'Lógica para la ciencia de la Computación', 4),
('INF–151', 'Sistemas Operativos', 5),
('INF–152', 'Sistemas de Información Gerencial', 5),
('INF–153', 'Assembler', 5),
('INF–154', 'Lenguajes Formales y Autómatas', 5),
('INF–161', 'Diseño y Administración de Bases de Datos', 6),
('INF–162', 'Análisis y Diseño de Sistemas de Información', 6),
('INF–163', 'Taller de Base de datos', 6),
('INF–164', 'Teoría de la Información y Codificación', 6),
('INF–166', 'Informática y Sociedad', 6),
('INF–271', 'Teoría de Sistemas y Modelos', 7),
('INF–272', 'Ingeniería de Software', 7),
('INF–273', 'Telemática', 7),
('INF–281', 'Taller de Sistemas de Información', 8),
('INF–282', 'Especificaciones Formales y Verificación', 8),
('INF–391', 'Simulacion de Sistemas', 9),
('INF–398', 'Taller de Licenciatura I', 9),
('INF–399', 'Taller de Licenciatura II', 10),
('LAB–111', 'Laboratorio de Informática', 1),
('LAB–121', 'Laboratorio de Informática 121', 2),
('LAB–122', 'Laboratorio de Física I', 2),
('LAB–131', 'Laboratorio de Informática 131', 3),
('LAB–132', 'Laboratorio de Física II', 3),
('LAB–273', 'Laboratorio de Informática 273', 7),
('LIN–116', 'Gramática Española', 1),
('LIN–135', 'Idioma I', 3),
('MAT-156', 'Análisis Numérico', 5),
('MAT–114', 'Matemática Discreta I', 1),
('MAT–115', 'Análisis Matemático I', 1),
('MAT–123', 'Matemática Discreta II', 2),
('MAT–124', 'Algebra Lineal', 2),
('MAT–125', 'Análisis Matemático II', 2),
('MAT–134', 'Análisis Matemático III', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ci` int(10) DEFAULT NULL,
  `sigla` varchar(100) DEFAULT NULL,
  `nota1` int(3) DEFAULT NULL,
  `nota2` int(3) DEFAULT NULL,
  `nota3` int(3) DEFAULT NULL,
  `semestre` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `semestre`) VALUES
(9909707, 'FIS–122', 10, 30, 40, 2),
(9909707, 'INF–121', 20, 0, 0, 2),
(9909707, 'FIS–122', 0, 0, 0, 2),
(9909707, 'INF–121', 20, 0, 0, 2),
(9909707, 'LAB–121', 10, 0, 0, 2),
(9909707, 'LAB–122', 0, 0, 0, 2),
(9909707, 'MAT–124', 0, 0, 0, 2),
(9909707, 'MAT–125', 30, 0, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `nro` int(2) DEFAULT NULL,
  `nroOrdinal` varchar(20) DEFAULT NULL,
  `cantMaterias` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`nro`, `nroOrdinal`, `cantMaterias`) VALUES
(1, 'Primero', 7),
(2, 'Segundo', 7),
(3, 'Tercero', 7),
(4, 'Cuarto', 5),
(5, 'Quinto', 6),
(6, 'Sexto', 6),
(7, 'Séptimo', 4),
(8, 'Octavo', 2),
(9, 'Noveno', 2),
(10, 'Décimo', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`sigla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
