-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2021 a las 23:36:26
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MovimientosDC`
--
CREATE DATABASE IF NOT EXISTS `MovimientosDC` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `MovimientosDC`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tiposdeventa`
--

CREATE TABLE `Tiposdeventa` (
  `CODIGO` tinyint(2) DEFAULT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `SIGLAS` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TransacIva`
--

CREATE TABLE `TransacIva` (
  `CODTRAN` tinyint(2) DEFAULT NULL,
  `NOMBRE` varchar(35) DEFAULT NULL,
  `SIGNO` varchar(1) DEFAULT NULL,
  `SINOIVA` varchar(1) DEFAULT NULL,
  `CUENTAA` varchar(15) DEFAULT NULL,
  `CUENTAC` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Venta`
--

CREATE TABLE `Venta` (
  `CINE` varchar(10) DEFAULT NULL,
  `EMPRESA` varchar(2) DEFAULT NULL,
  `SUCURSAL` varchar(2) DEFAULT NULL,
  `COMPRO` varchar(15) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `REGISTRO` varchar(15) DEFAULT NULL,
  `VALOR` decimal(12,2) DEFAULT NULL,
  `EXENTAS` decimal(10,2) DEFAULT NULL,
  `IVA13` decimal(8,2) DEFAULT NULL,
  `IVA2` decimal(8,2) DEFAULT NULL,
  `IVA1` decimal(8,2) DEFAULT NULL,
  `EXCLUIDAS` decimal(10,2) DEFAULT NULL,
  `TT` int(2) DEFAULT NULL,
  `DESCRI` varchar(40) DEFAULT NULL,
  `COMPRO2` varchar(15) DEFAULT NULL,
  `NOCAJA` varchar(10) DEFAULT NULL,
  `FOVIAL` decimal(10,2) DEFAULT NULL,
  `FECOPERA` date DEFAULT NULL,
  `COTRAN` decimal(10,2) DEFAULT NULL,
  `MIGRADODE` varchar(10) DEFAULT NULL,
  `FPROCESADO` datetime DEFAULT NULL,
  `GRANDE` tinyint(1) DEFAULT NULL,
  `VALRETPER` decimal(12,2) DEFAULT NULL,
  `EQUIPO` varchar(10) DEFAULT NULL,
  `TOTAL` decimal(12,2) DEFAULT NULL,
  `SUBSI` decimal(12,2) DEFAULT NULL,
  `USUARIO` varchar(15) DEFAULT NULL,
  `MAQUINA` varchar(10) DEFAULT NULL,
  `FECHAOPE` date DEFAULT NULL,
  `HORA` varchar(10) DEFAULT NULL,
  `IVACOF` decimal(10,2) DEFAULT NULL,
  `NETOCOF` decimal(10,2) DEFAULT NULL,
  `CUENTAA` varchar(15) DEFAULT NULL,
  `CUENTAC` varchar(15) DEFAULT NULL,
  `EXPORTACION` decimal(10,2) DEFAULT NULL,
  `SERIE` varchar(16) DEFAULT NULL,
  `CODIDOCU` varchar(1) DEFAULT NULL,
  `NODOCU` varchar(14) DEFAULT NULL,
  `VALSIVA` decimal(10,2) DEFAULT NULL,
  `RETENCION` decimal(10,2) DEFAULT NULL,
  `F930TOTAL` decimal(10,2) DEFAULT NULL,
  `PERIODO` varchar(6) DEFAULT NULL,
  `NOUNICO` varchar(14) DEFAULT NULL,
  `OBSERVA` varchar(10) DEFAULT NULL,
  `NIT` varchar(14) DEFAULT NULL,
  `CUENTAF` varchar(15) DEFAULT NULL,
  `TIPODOCU` varchar(2) DEFAULT NULL,
  `LLAVEC` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
