-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-10-2021 a las 17:27:54
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

DROP TABLE IF EXISTS `Clientes`;
CREATE TABLE IF NOT EXISTS `Clientes` (
  `IDCLIENTE` bigint(20) NOT NULL AUTO_INCREMENT,
  `CODCLIENT` varchar(14) NOT NULL,
  `NOMBCLIENT` varchar(60) NOT NULL,
  `DENOMCLIENT` varchar(40) NOT NULL,
  `REGCLIENT` varchar(15) NOT NULL,
  `GIRONEG` varchar(100) NOT NULL,
  `NUMNIT` varchar(14) NOT NULL,
  `TELEFONO` varchar(10) NOT NULL,
  `DIRNEG` varchar(100) NOT NULL,
  `CIUDAD` varchar(25) NOT NULL,
  `DEPTO` varchar(15) NOT NULL,
  `RESNEGO` varchar(40) NOT NULL,
  `TFRESPON` varchar(19) NOT NULL,
  `TIPOCLIENT` varchar(1) NOT NULL,
  `CLASECLIENT` varchar(1) NOT NULL,
  `TIPODOCUCRFCOF` varchar(1) NOT NULL,
  `VENDEDOR` varchar(5) NOT NULL,
  `COBRADOR` varchar(5) NOT NULL,
  `ZONA` varchar(5) NOT NULL,
  `NOMBRENIT` varchar(60) NOT NULL,
  `CORREOELECT` varchar(80) NOT NULL,
  `NACIONALIDAD` varchar(1) NOT NULL,
  `FECHACREACION` date NOT NULL,
  `GRANCONTRIB` varchar(1) NOT NULL,
  `RETENCIONIVA` varchar(1) NOT NULL,
  `IMPORTADOR` varchar(1) NOT NULL,
  `TIPOCOMPRA` varchar(1) NOT NULL,
  `LIMITECREDITO` decimal(10,2) NOT NULL,
  `DIASCREDITO` varchar(3) NOT NULL,
  `DIAVISITA` varchar(10) NOT NULL,
  `CLASIFICACIONCOMPRA` varchar(1) NOT NULL,
  `GRUPOCLIENTE` varchar(4) NOT NULL,
  `CTACARGADA` varchar(15) NOT NULL,
  `CTAABONADA` varchar(15) NOT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `NUMSERIE` varchar(10) NOT NULL,
  `DOCUNICO` varchar(10) NOT NULL,
  `DESCUENTO` decimal(10,2) NOT NULL,
  `NUMERODUI` varchar(11) NOT NULL,
  `USUARIO` varchar(10) NOT NULL,
  `FECHAOPE` date NOT NULL,
  `MAQUINA` varchar(10) NOT NULL,
  `HORA` varchar(10) NOT NULL,
  `GRADO` varchar(10) NOT NULL,
  `NOMGRADO` varchar(10) NOT NULL,
  `SECCION` varchar(10) NOT NULL,
  `CENCOS` varchar(6) NOT NULL,
  `MATRICULA` varchar(10) NOT NULL,
  PRIMARY KEY (`IDCLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

DROP TABLE IF EXISTS `Empresa`;
CREATE TABLE IF NOT EXISTS `Empresa` (
  `IDEMPRESA` int(11) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(2) DEFAULT NULL,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `DENOMINA` varchar(80) DEFAULT NULL,
  `TELEYCAJA` varchar(80) DEFAULT NULL,
  `REGISTRO` varchar(10) DEFAULT NULL,
  `NIT` varchar(18) DEFAULT NULL,
  `GIRO` varchar(60) DEFAULT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `RUTA` varchar(120) DEFAULT NULL,
  `TITULO` varchar(60) DEFAULT NULL,
  `RUTAVTA` varchar(80) DEFAULT NULL,
  `PATHR` text DEFAULT NULL,
  `TRACONCOST` varchar(1) DEFAULT NULL,
  `TIPOCAMBIO` decimal(10,4) DEFAULT NULL,
  `PRECONIVA` varchar(1) DEFAULT NULL,
  `ACTIVADO` varchar(1) DEFAULT NULL,
  `RUTADESA` text DEFAULT NULL,
  `VERICC` varchar(1) DEFAULT NULL,
  `RUTAINVE` text DEFAULT NULL,
  `PORIVA` decimal(5,2) DEFAULT NULL,
  `BACKUPS` text DEFAULT NULL,
  `ACTIVA1` varchar(1) DEFAULT NULL,
  `ACTIVA2` varchar(1) DEFAULT NULL,
  `GRANDE` varchar(1) DEFAULT NULL,
  `MULTISUCU` varchar(1) DEFAULT NULL,
  `CONTADOR` varchar(50) DEFAULT NULL,
  `SIFACTURA` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IDEMPRESA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Login`
--

DROP TABLE IF EXISTS `Login`;
CREATE TABLE IF NOT EXISTS `Login` (
  `IDLOGIN` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `USERID` varchar(10) NOT NULL,
  `PASSWORD` varchar(33) NOT NULL,
  `CARGO` varchar(50) NOT NULL,
  `SISTEMA` int(2) NOT NULL,
  `EMPRESA` varchar(10) NOT NULL,
  PRIMARY KEY (`IDLOGIN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Login`
--

INSERT INTO `Login` (`IDLOGIN`, `NOMBRE`, `USERID`, `PASSWORD`, `CARGO`, `SISTEMA`, `EMPRESA`) VALUES
(1, 'Cristian mejia', 'MejiaDev', '0fb102e89cd0730f0f322b5d6a6eda82', 'Presi', 10, 'papajhons');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tiposdeventa`
--

DROP TABLE IF EXISTS `Tiposdeventa`;
CREATE TABLE IF NOT EXISTS `Tiposdeventa` (
  `IDCODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(2) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `SIGLAS` varchar(3) NOT NULL,
  PRIMARY KEY (`IDCODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tiposdeventa`
--

INSERT INTO `Tiposdeventa` (`IDCODIGO`, `CODIGO`, `NOMBRE`, `SIGLAS`) VALUES
(1, '01', 'prueba ', 'p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TransacIva`
--

DROP TABLE IF EXISTS `TransacIva`;
CREATE TABLE IF NOT EXISTS `TransacIva` (
  `IDIVA` int(11) NOT NULL AUTO_INCREMENT,
  `CODTRAN` varchar(2) NOT NULL,
  `NOMBRE` varchar(35) NOT NULL,
  `SIGNO` varchar(1) NOT NULL,
  `SINOIVA` varchar(1) NOT NULL,
  `CUENTAA` varchar(15) NOT NULL,
  `CUENTAC` varchar(15) NOT NULL,
  PRIMARY KEY (`IDIVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
