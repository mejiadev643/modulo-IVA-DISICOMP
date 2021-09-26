-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2021 a las 01:31:25
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
-- Base de datos: `ComunDC`
--
CREATE DATABASE IF NOT EXISTS `ComunDC` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComunDC`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `CODCLIENT` varchar(14) DEFAULT NULL,
  `NOMBCLIENT` varchar(60) DEFAULT NULL,
  `DENOMCLIENT` varchar(40) DEFAULT NULL,
  `REGCLIENT` varchar(15) DEFAULT NULL,
  `GIRONEG` varchar(100) DEFAULT NULL,
  `NUMNIT` varchar(14) DEFAULT NULL,
  `TELEFONO` varchar(10) DEFAULT NULL,
  `DIRNEG` varchar(100) DEFAULT NULL,
  `CIUDAD` varchar(25) DEFAULT NULL,
  `DEPTO` varchar(15) DEFAULT NULL,
  `RESNEGO` varchar(40) DEFAULT NULL,
  `TFRESPON` varchar(19) DEFAULT NULL,
  `TIPOCLIENT` varchar(1) DEFAULT NULL,
  `CLASECLIENT` varchar(1) DEFAULT NULL,
  `TIPODOCUCRFCOF` varchar(1) DEFAULT NULL,
  `VENDEDOR` varchar(5) DEFAULT NULL,
  `COBRADOR` varchar(5) DEFAULT NULL,
  `ZONA` varchar(5) DEFAULT NULL,
  `NOMBRENIT` varchar(60) DEFAULT NULL,
  `CORREOELECT` varchar(80) DEFAULT NULL,
  `NACIONALIDAD` varchar(1) DEFAULT NULL,
  `FECHACREACION` date DEFAULT NULL,
  `GRANCONTRIB` varchar(1) DEFAULT NULL,
  `RETENCIONIVA` varchar(1) DEFAULT NULL,
  `IMPORTADOR` varchar(1) DEFAULT NULL,
  `TIPOCOMPRA` varchar(1) DEFAULT NULL,
  `LIMITECREDITO` decimal(10,2) DEFAULT NULL,
  `DIASCREDITO` varchar(3) DEFAULT NULL,
  `DIAVISITA` varchar(10) DEFAULT NULL,
  `CLASIFICACIONCOMPRA` varchar(1) DEFAULT NULL,
  `GRUPOCLIENTE` varchar(4) DEFAULT NULL,
  `CTACARGADA` varchar(15) DEFAULT NULL,
  `CTAABONADA` varchar(15) DEFAULT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `NUMSERIE` varchar(10) DEFAULT NULL,
  `DOCUNICO` varchar(10) DEFAULT NULL,
  `DESCUENTO` decimal(10,2) DEFAULT NULL,
  `NUMERODUI` varchar(11) DEFAULT NULL,
  `USUARIO` varchar(10) DEFAULT NULL,
  `FECHAOPE` date DEFAULT NULL,
  `MAQUINA` varchar(10) DEFAULT NULL,
  `HORA` varchar(10) DEFAULT NULL,
  `GRADO` varchar(10) DEFAULT NULL,
  `NOMGRADO` varchar(10) DEFAULT NULL,
  `SECCION` varchar(10) DEFAULT NULL,
  `CENCOS` varchar(6) DEFAULT NULL,
  `MATRICULA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `NOMBRE` varchar(50) DEFAULT NULL,
  `USERID` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `CARGO` varchar(50) DEFAULT NULL,
  `SISTEMA` int(2) DEFAULT NULL,
  `EMPRESA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tiposdeventa`
--

CREATE TABLE IF NOT EXISTS `Tiposdeventa` (
  `CODIGO` varchar(2) DEFAULT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `SIGLAS` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tiposdeventa`
--

INSERT INTO `Tiposdeventa` (`CODIGO`, `NOMBRE`, `SIGLAS`) VALUES
('01', 'prueba ', 'p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TransacIva`
--

CREATE TABLE IF NOT EXISTS `TransacIva` (
  `CODTRAN` varchar(2) DEFAULT NULL,
  `NOMBRE` varchar(35) DEFAULT NULL,
  `SIGNO` varchar(1) DEFAULT NULL,
  `SINOIVA` varchar(1) DEFAULT NULL,
  `CUENTAA` varchar(15) DEFAULT NULL,
  `CUENTAC` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
