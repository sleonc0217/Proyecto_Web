-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 20-03-2023 a las 06:40:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_styleshop`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedimientoInsertar` (IN `pemail` VARCHAR(50), IN `pContrasenna` VARCHAR(50))   BEGIN
insert into usuario(email,Contrasenna,idRol) values(pemail,pContrasenna,1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarInicio` (IN `pEmail` VARCHAR(50), IN `pContrasenna` VARCHAR(15))   BEGIN

	SELECT 	idUsuario,
    		email,
            Contrasenna,
            idRol
  	FROM 	usuario
    WHERE 	email = pEmail
    	AND Contrasenna       = pContrasenna;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VerDatosUsuarios` (IN `p_idRol` INT, IN `p_email` VARCHAR(250))   BEGIN
    IF p_idRol = 2 THEN
        SELECT idUsuario, cedula, nombre, telefono, email 
        FROM usuario;
    ELSEIF p_idRol = 1 THEN
        SELECT idUsuario, cedula, nombre, telefono, email 
        FROM usuario
        WHERE email = p_email;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VerificarExisteCorreo` (IN `p_email` VARCHAR(100))   BEGIN

SELECT email,Contrasenna FROM usuario WHERE email = p_email;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(30) NOT NULL,
  `nomCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `idCodigo` int(30) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `descuento` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `idEntrega` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(20) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `codigoPostal` int(15) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `referencias` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(30) NOT NULL,
  `idUsuario` int(50) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(30) NOT NULL,
  `nomProducto` int(50) NOT NULL,
  `descProducto` int(50) NOT NULL,
  `precio` decimal(50,0) NOT NULL,
  `unidades` int(60) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `idCategoria` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(2) NOT NULL,
  `nombreRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(0, 'administrador'),
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Contrasenna` varchar(20) NOT NULL,
  `idRol` int(2) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `cedula` int(15) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `Contrasenna`, `idRol`, `nombre`, `cedula`, `telefono`) VALUES
(1, 'cliente@example.com', 'pwdprueba', 1, '', 0, 0),
(3, 'sebas01@gmail.com', '01', 1, '', 0, 0),
(4, 'sleonc02@gmail.com', '12', 1, '', 0, 0),
(5, 'juan@gmail.com', '123', 1, '', 0, 0),
(6, 'carlos@gmail.com', '123', 1, '', 0, 0),
(7, 'pedro@gmail.com', '123', 1, '', 0, 0),
(8, 'cata@gmail.com', '123', 1, '', 0, 0),
(9, 'karina@gmail.com', '123', 1, '', 0, 0),
(10, 'f@gmail.com', '123', 1, '', 0, 0),
(11, 'f@gmail.com', '123', 1, '', 0, 0),
(12, 'bernal@gmail.com', '123', 1, '', 0, 0),
(13, 'fabian@gmail.com', '123', 1, '', 0, 0),
(14, 'carlos123@gmail.com', '123', 1, '', 0, 0),
(15, 'Krista@gmail.com', '123', 1, '', 0, 0),
(16, 'fer@gmail.com', '123', 1, '', 0, 0),
(17, 'prueba123@gmail.com', '123', 1, '', 0, 0),
(18, 'leon@gmail.com', '123', 1, '', 0, 0),
(19, 'perez@gmail.com', '123', 1, '', 0, 0),
(20, 'pepe@gmail.com', '123', 1, '', 0, 0),
(21, 'pepe@gmail.com', '123', 1, '', 0, 0),
(22, 'andres@gmail.com', '123', 1, '', 0, 0),
(23, 'andres@gmail.com', '123', 1, '', 0, 0),
(24, 'cliete@example.com', '123', 1, '', 0, 0),
(25, 'cliente@example2.com', '123', 2, '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `idFactura` int(50) NOT NULL,
  `idProducto` int(30) NOT NULL,
  `idCodigo` int(30) NOT NULL,
  `precio` int(50) NOT NULL,
  `unidades` int(50) NOT NULL,
  `idEntrega` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`idCodigo`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`idEntrega`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `idUsuario_factura` (`idUsuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `id_Categoria` (`idCategoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `FK_Usuario` (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `venta_idFactura` (`idFactura`),
  ADD KEY `venta_idProducto` (`idProducto`),
  ADD KEY `venta_idCodigo` (`idCodigo`),
  ADD KEY `idEntrega` (`idEntrega`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `idUsuario_factura` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `id_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `idEntrega` FOREIGN KEY (`idEntrega`) REFERENCES `entrega` (`idEntrega`),
  ADD CONSTRAINT `venta_idCodigo` FOREIGN KEY (`idCodigo`) REFERENCES `codigo` (`idCodigo`),
  ADD CONSTRAINT `venta_idFactura` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`),
  ADD CONSTRAINT `venta_idProducto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
