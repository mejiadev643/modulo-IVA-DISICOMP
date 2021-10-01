-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-10-2021 a las 17:27:16
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
-- Estructura de tabla para la tabla `Venta`
--

DROP TABLE IF EXISTS `Venta`;
CREATE TABLE IF NOT EXISTS `Venta` (
  `IDVENTA` bigint(20) NOT NULL AUTO_INCREMENT,
  `EMPRESA` varchar(2) NOT NULL,
  `SUCURSAL` varchar(2) NOT NULL,
  `NOCAJA` varchar(10) NOT NULL,
  `COMPRO` varchar(15) NOT NULL,
  `COMPRO2` varchar(15) NOT NULL,
  `NODOCU` varchar(14) NOT NULL,
  `FECHA` date NOT NULL,
  `REGISTRO` varchar(15) NOT NULL,
  `VALOR` decimal(12,2) NOT NULL,
  `EXENTAS` decimal(10,2) NOT NULL,
  `IVA13` decimal(10,2) NOT NULL,
  `IVA2` decimal(8,2) NOT NULL,
  `IVA1` decimal(8,2) NOT NULL,
  `EXCLUIDAS` decimal(10,2) NOT NULL,
  `TT` int(2) NOT NULL,
  `DESCRI` varchar(40) NOT NULL,
  `FOVIAL` decimal(10,2) NOT NULL,
  `FECOPERA` date NOT NULL,
  `COTRAN` decimal(10,2) NOT NULL,
  `F930TOTAL` decimal(10,2) NOT NULL,
  `RETENCION` decimal(10,2) NOT NULL,
  `VALSIVA` decimal(10,2) NOT NULL,
  `CUENTAC` varchar(15) NOT NULL,
  `CUENTAA` varchar(15) NOT NULL,
  `NETOCOF` decimal(10,2) NOT NULL,
  `IVACOF` decimal(10,2) NOT NULL,
  `MIGRADODE` varchar(10) NOT NULL,
  `GRANDE` varchar(1) NOT NULL,
  `VALRETPER` decimal(12,2) NOT NULL,
  `EQUIPO` varchar(10) NOT NULL,
  `TOTAL` decimal(12,2) NOT NULL,
  `USUARIO` varchar(15) NOT NULL,
  `MAQUINA` varchar(10) NOT NULL,
  `FECHAOPE` date NOT NULL,
  `HORA` varchar(10) NOT NULL,
  `EXPORTACION` decimal(10,2) NOT NULL,
  `SERIE` varchar(16) NOT NULL,
  `CODIDOCU` varchar(1) NOT NULL,
  `PERIODO` varchar(6) NOT NULL,
  `NOUNICO` varchar(14) NOT NULL,
  `OBSERVA` varchar(10) NOT NULL,
  `NIT` varchar(14) NOT NULL,
  `CUENTAF` varchar(15) NOT NULL,
  `TIPODOCU` varchar(2) NOT NULL,
  `LLAVEC` varchar(10) NOT NULL,
  PRIMARY KEY (`IDVENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
