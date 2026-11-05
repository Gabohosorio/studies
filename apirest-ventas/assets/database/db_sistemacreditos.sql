-- Create at 20261006
-- Base de datos: sistemacreditos

CREATE DATABASE IF NOT EXISTS sistemacreditos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

USE sistemacreditos;

-- Tabla cliente
CREATE TABLE IF NOT EXISTS cliente (
  `idcliente` bigint(20) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombrefiscal` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccionfiscal` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY(idcliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Tabla cuenta
CREATE TABLE IF NOT EXISTS cuenta (
  `idcuenta` bigint(20) NOT NULL AUTO_INCREMENT,
  `clienteid` bigint(20) NOT NULL,
  `productoid` bigint(20) NOT NULL,
  `frecuenciaid` bigint(20) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `cuotas` int(11) NOT NULL,
  `monto_cuotas` decimal(10,0) NOT NULL,
  `cargo` decimal(10,0) NOT NULL,
  `saldo` decimal(10,0) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idcuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Tabla frecuencia
CREATE TABLE IF NOT EXISTS frecuencia (
  `idfrecuencia` bigint(20) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idfrecuencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Tabla movimiento
CREATE TABLE IF NOT EXISTS movimiento (
  `idmovimiento` int(11) NOT NULL,
  `cuentaid` bigint(20) NOT NULL,
  `tipomovimientoid` bigint(20) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idmovimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Tabla producto
CREATE TABLE IF NOT EXISTS producto (
  `idproducto` bigint(20) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Tabla tipo_movimiento
CREATE TABLE IF NOT EXISTS tipo_movimiento (
  `idtipomovimiento` bigint(20) NOT NULL AUTO_INCREMENT,
  `movimiento` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_movimiento` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `datecreated` int(11) NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idtipomovimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Relaciones
-- Tabla `cuenta`
ALTER TABLE cuenta
  ADD KEY (`clienteid`),
  ADD CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`clienteid`)
    REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD KEY (`productoid`),
  ADD CONSTRAINT `cuenta_ibfk_2` FOREIGN KEY (`productoid`)
    REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD KEY (`frecuenciaid`),
  ADD CONSTRAINT `cuenta_ibfk_3` FOREIGN KEY (`frecuenciaid`)
    REFERENCES `frecuencia` (`idfrecuencia`) ON DELETE CASCADE ON UPDATE CASCADE;

-- tabla `movimiento`
ALTER TABLE `movimiento`
  ADD KEY `cuentaid` (`cuentaid`),
  ADD CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`cuentaid`)
    REFERENCES `cuenta` (`idcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD KEY `tipomovimientoid` (`tipomovimientoid`),
  ADD CONSTRAINT `movimiento_ibfk_2` FOREIGN KEY (`tipomovimientoid`)
    REFERENCES `tipo_movimiento` (`idtipomovimiento`) ON DELETE CASCADE ON UPDATE CASCADE;
