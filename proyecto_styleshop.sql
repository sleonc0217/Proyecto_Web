-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 15-03-2023 a las 19:08:57
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `VerificarExisteCorreo` (IN `p_email` VARCHAR(100))   BEGIN

SELECT email,Contrasenna FROM usuario WHERE email = p_email;

END$$

DELIMITER ;

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
(1, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Contrasenna` varchar(20) NOT NULL,
  `idRol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `Contrasenna`, `idRol`) VALUES
(1, 'cliente@example.com', 'pwdprueba', 1),
(3, 'sebas01@gmail.com', '01', 1),
(4, 'sleonc02@gmail.com', '12', 1),
(5, 'juan@gmail.com', '123', 1),
(6, 'carlos@gmail.com', '123', 1),
(7, 'pedro@gmail.com', '123', 1),
(8, 'cata@gmail.com', '123', 1),
(9, 'karina@gmail.com', '123', 1),
(10, 'f@gmail.com', '123', 1),
(11, 'f@gmail.com', '123', 1),
(12, 'bernal@gmail.com', '123', 1),
(13, 'fabian@gmail.com', '123', 1),
(14, 'carlos123@gmail.com', '123', 1),
(15, 'Krista@gmail.com', '123', 1),
(16, 'fer@gmail.com', '123', 1),
(17, 'prueba123@gmail.com', '123', 1),
(18, 'leon@gmail.com', '123', 1),
(19, 'perez@gmail.com', '123', 1),
(20, 'pepe@gmail.com', '123', 1),
(21, 'pepe@gmail.com', '123', 1),
(22, 'andres@gmail.com', '123', 1),
(23, 'andres@gmail.com', '123', 1),
(24, 'cliete@example.com', '123', 1);

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
