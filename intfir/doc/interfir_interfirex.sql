-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2013 at 05:05 PM
-- Server version: 5.5.23
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interfir_interfirex`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoriaprodcuto`
--

CREATE TABLE IF NOT EXISTS `categoriaprodcuto` (
  `idCategoria` int(11) NOT NULL,
  `NombreCat` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `idempresas` int(11) NOT NULL AUTO_INCREMENT,
  `nit` varchar(45) DEFAULT NULL,
  `RazonSocial` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idempresas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`idempresas`, `nit`, `RazonSocial`, `ciudad`, `direccion`, `Telefono`, `celular`, `contacto`, `correo`, `descripcion`, `logo`) VALUES
(1, '1', 'empresa1', 'ciudad1', 'direccion1', 'telefono1', 'celular1', NULL, 'correo1', 'descripcion', NULL),
(2, '2', 'empresa2', 'ciudad2', 'direccion2', 'telefono2', 'celular2', NULL, 'correo3', 'descripcion', NULL),
(3, '3', 'Exito', 'ciudad1', 'direccion2', 'telefono', 'celular', 'contacto', 'correo', 'desc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `idformulario` int(11) NOT NULL,
  `idSede` varchar(45) NOT NULL,
  `IdProducto` varchar(45) NOT NULL,
  `idPregunta` varchar(45) NOT NULL,
  `Fecha` datetime NOT NULL,
  `idRespuesta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idformulario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProdcuto` varchar(45) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idProducto`, `NombreProdcuto`) VALUES
(1, 'Detección y Alarma de Incendios'),
(2, 'Rociadores Automáticos'),
(3, 'Agua Nebulizada'),
(4, 'Agua Pulverizada'),
(5, 'Rociadores de espuma'),
(6, 'Sistemas de espuma'),
(7, 'Tuberías y Mangueras'),
(8, 'Bombas contra incendios'),
(9, 'abastecimiento de agua'),
(10, 'hidrantes contra incendios'),
(11, 'sistemas fijos de extincion por polvo'),
(12, 'sistemas de extincion por agente extintor acu'),
(13, 'sistemas de extincion por agente halogenado'),
(14, 'sistemas de extincion por agente alternativo '),
(15, 'sistemas de extincion por dioxido de carbono'),
(16, 'extintores portatiles'),
(17, 'puertas y compuertas cortafuego'),
(18, 'luces de emergencia');

-- --------------------------------------------------------

--
-- Table structure for table `productoempresa`
--

CREATE TABLE IF NOT EXISTS `productoempresa` (
  `idProductoEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `idempresas` varchar(45) DEFAULT NULL,
  `idproducto` varchar(45) DEFAULT NULL,
  `idSede` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProductoEmpresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productoempresa`
--

INSERT INTO `productoempresa` (`idProductoEmpresa`, `idempresas`, `idproducto`, `idSede`) VALUES
(1, '3', '1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`idRol`, `nombre`) VALUES
(1, 'Administradores'),
(2, 'Coordinadores'),
(3, 'Usuarios');

-- --------------------------------------------------------

--
-- Table structure for table `rolxusuario`
--

CREATE TABLE IF NOT EXISTS `rolxusuario` (
  `idrolXusuario` int(11) NOT NULL,
  `idusuarios` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  PRIMARY KEY (`idrolXusuario`),
  KEY `idusuarios_idx` (`idusuarios`),
  KEY `idrol_idx` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rolxusuario`
--

INSERT INTO `rolxusuario` (`idrolXusuario`, `idusuarios`, `idrol`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

CREATE TABLE IF NOT EXISTS `sede` (
  `idSede` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `idempresa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSede`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`idSede`, `nombre`, `direccion`, `telefono`, `celular`, `correo`, `contacto`, `idempresa`) VALUES
(1, 'sede1', 'direccion1', 'telefono1', 'celular1', 'correo1', 'contacto1', '1'),
(2, 'sede2', 'direccion2', 'telefono2', 'celular2', 'correo2', 'contacto2', '2'),
(3, 'sede20', 'direccion20', 'telefono20', 'celular20', 'correo20', 'contacto20', '1'),
(4, 'ÉXITO CIUDAD JARDIN', 'ÉXITO CIUDAD JARDIN', 'ÉXITO CIUDAD JARDIN', 'ÉXITO CIUDAD JARDIN', NULL, 'JUAN CARLOS GONZALES', '3');

-- --------------------------------------------------------

--
-- Table structure for table `sedeempresausuario`
--

CREATE TABLE IF NOT EXISTS `sedeempresausuario` (
  `t_one` int(11) DEFAULT NULL,
  `tier_one` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_two` int(11) DEFAULT NULL,
  `tier_two` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_three` int(11) DEFAULT NULL,
  `tier_three` varchar(91) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `three_drops`
--

CREATE TABLE IF NOT EXISTS `three_drops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tier_one` varchar(255) NOT NULL,
  `tier_two` varchar(255) NOT NULL,
  `tier_three` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `three_drops`
--

INSERT INTO `three_drops` (`id`, `tier_one`, `tier_two`, `tier_three`) VALUES
(1, 'Chevy', 'Camaro', 'Black'),
(2, 'Chevy', 'Camaro', 'White'),
(3, 'Chevy', 'Trailblazer', 'Blue'),
(4, 'Chevy', 'Trailblazer', 'Red'),
(5, 'Chevy', 'Camaro', 'Red'),
(6, 'Ford', 'Mustang', 'White'),
(7, 'Ford', 'Mustang', 'Red'),
(8, 'Ford', 'Mustang', 'Black'),
(9, 'Ford', 'F-350', 'White'),
(10, 'Ford', 'F-350', 'Green'),
(11, 'Honda', 'Civic', 'Black'),
(12, 'Honda', 'Civic', 'Red'),
(13, 'Honda', 'Civic', 'Silver'),
(14, 'Honda', 'Prelude', 'Red'),
(15, 'Honda', 'Prelude', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `sede` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `psw` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellido`, `correo`, `celular`, `empresa`, `sede`, `cargo`, `rol`, `usuario`, `psw`, `foto`) VALUES
(1, 'Andrï¿½s', 'Ceballos', '123@456.com', '54654654', '1', '1', 'administrador', '1', 'admin', 'admin', NULL),
(2, 'Andres ', 'Torres', 'andres.torres@sika.com.co', NULL, '1', '2', 'Supervisor General', '3', 'atorres', 'atorres', NULL),
(3, 'Angie', 'Castillo', 'angie.castillo@cocacola.com.co', NULL, '2', '1', 'Supervisor General', '3', 'Acastillo', 'Acastillo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vista_usuarios`
--

CREATE TABLE IF NOT EXISTS `vista_usuarios` (
  `nombre` varchar(91) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sede` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
