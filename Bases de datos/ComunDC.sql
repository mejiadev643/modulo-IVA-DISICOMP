-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-09-2021 a las 16:56:04
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

CREATE TABLE `Clientes` (
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
  `MATRICULA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tiposdeventa`
--

CREATE TABLE `Tiposdeventa` (
  `CODIGO` varchar(2) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `SIGLAS` varchar(3) NOT NULL
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

CREATE TABLE `TransacIva` (
  `CODTRAN` varchar(2) NOT NULL,
  `NOMBRE` varchar(35) NOT NULL,
  `SIGNO` varchar(1) NOT NULL,
  `SINOIVA` varchar(1) NOT NULL,
  `CUENTAA` varchar(15) NOT NULL,
  `CUENTAC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
