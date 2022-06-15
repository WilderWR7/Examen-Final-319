-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 06:59:33
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
-- Base de datos: `workflow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSiguiente` varchar(3) DEFAULT NULL,
  `Tipo` varchar(1) DEFAULT NULL,
  `Pantalla` varchar(20) DEFAULT NULL,
  `Rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES
('F1', 'P1', '-', 'C', 'Selecciona', 'Estudiante'),
('F1', 'P2', 'P3', 'P', 'Inscripcion', 'Estudiante'),
('F1', 'P3', 'P4', 'P', 'FormularioEstudiante', 'Estudiante'),
('F1', 'P4', '-', 'F', 'CorrectoE', 'Estudiante'),
('F2', 'P5', 'P6', 'P', 'SeleccionaSemestre', 'Estudiante'),
('F2', 'P6', 'P7', 'P', 'SeleccionaMateria', 'Estudiante'),
('F2', 'P7', '-', 'F', 'VerNota', 'Estudiante'),
('F3', 'P8', 'P9', 'P', 'Registra', 'Docente'),
('F3', 'P9', 'P10', 'P', 'SeleccionaSemestreDo', 'Docente'),
('F3', 'P10', 'P11', 'P', 'SeleccionaMateriaDoc', 'Docente'),
('F3', 'P11', 'P12', 'P', 'FormularioDocente', 'Docente'),
('F3', 'P12', '-', 'F', 'CorrectoD', 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesocondicionante`
--

CREATE TABLE `flujoprocesocondicionante` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSI` varchar(3) DEFAULT NULL,
  `ProcesoNO` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujoprocesocondicionante`
--

INSERT INTO `flujoprocesocondicionante` (`Flujo`, `Proceso`, `ProcesoSI`, `ProcesoNO`) VALUES
('F1', 'P1', 'P2', 'P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesoseguimiento`
--

CREATE TABLE `flujoprocesoseguimiento` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `Usuario` varchar(10) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `HoraInicio` time DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `HoraFin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujoprocesoseguimiento`
--

INSERT INTO `flujoprocesoseguimiento` (`Flujo`, `Proceso`, `Usuario`, `FechaInicio`, `HoraInicio`, `FechaFin`, `HoraFin`) VALUES
('F1', 'P2', 'wilder', '2022-06-15', '12:52:45', '2022-06-15', '12:53:00'),
('F2', 'P6', 'wilder', '2022-06-15', '12:53:14', '2022-06-15', '12:53:21'),
('F2', 'P6', 'wilder', '2022-06-15', '12:53:22', NULL, NULL),
('F3', 'P10', 'rosa', '2022-06-15', '12:54:07', '2022-06-15', '12:54:20'),
('F2', 'P6', 'wilder', '2022-06-15', '12:56:09', '2022-06-15', '12:56:10'),
('F2', 'P6', 'wilder', '2022-06-15', '12:56:13', NULL, NULL),
('F2', 'P6', 'wilder', '2022-06-15', '12:56:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_user` int(3) DEFAULT NULL,
  `user` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_user`, `user`, `email`, `password`) VALUES
(1, 'rony', 'rony@gmail.com', '123'),
(2, 'rosa', 'rosa@gmail.com', '123'),
(1, 'wilder', 'wmayta@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
