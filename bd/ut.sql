-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 16:09:30
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `cedula` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `operacion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `host` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tabla` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `cedula`, `usuario`, `operacion`, `host`, `fecha`, `hora`, `tabla`, `status`) VALUES
(1, '2', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-08-29', '21:34:12', ' Seguridad Roles', NULL),
(2, '7403566', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-08-29', '21:34:50', 'Usuario', NULL),
(3, 'GAP173', 'root@localhost', 'Se inserto un vehiculo', 'localhost', '2021-09-13', '13:04:48', 'Vehiculo', NULL),
(4, 'SAR891', 'root@localhost', 'Se inserto un vehiculo', 'localhost', '2021-09-15', '18:33:21', 'Vehiculo', NULL),
(5, '95589666', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-10-13', '21:16:22', 'Chofer', NULL),
(6, '95589666', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2021-10-13', '21:37:00', 'Chofer', NULL),
(7, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-10-20', '14:22:42', 'Usuario', NULL),
(8, '123456', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:49:08', 'Chofer', NULL),
(9, '9601788', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:51:37', 'Chofer', NULL),
(10, '26779425', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:52:11', 'Chofer', NULL),
(11, '3', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-12-03', '10:53:24', ' Seguridad Roles', NULL),
(12, '4', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-12-03', '10:54:34', ' Seguridad Roles', NULL),
(13, '4', 'root@localhost', 'Se modifico un rol', 'localhost', '2021-12-03', '10:54:55', 'Seguridad Roles', NULL),
(14, 'Preventi', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:56:49', 'Tipos', NULL),
(15, 'Cambio d', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:57:13', 'Tipos', NULL),
(16, 'Chequeo', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:57:43', 'Tipos', NULL),
(17, 'Frenos', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:58:07', 'Tipos', NULL),
(18, 'GAP173', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:00:23', 'Ruta', NULL),
(19, 'VAS123', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:00:42', 'Ruta', NULL),
(20, 'XAM368', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:01:13', 'Ruta', NULL),
(21, 'SAR891', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:01:50', 'Ruta', NULL),
(22, 'Cambio d', 'root@localhost', 'Se Modifico un campo de la tabla', 'localhost', '2021-12-03', '11:02:10', 'Tipos', NULL),
(23, '11456268', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '11:02:49', 'Chofer', NULL),
(24, '123456', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2021-12-03', '11:02:57', 'Chofer', NULL),
(25, '27889456', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '11:03:30', 'Chofer', NULL),
(26, 'GAP173', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:04:03', 'Mantenimiento', NULL),
(27, 'PFS982', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:04:36', 'Mantenimiento', NULL),
(28, 'XAM368', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:05:14', 'Mantenimiento', NULL),
(29, 'Cauchos', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '11:05:36', 'Tipos', NULL),
(30, 'GAP173', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2021-12-03', '11:06:05', 'Reparaciones', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoraut`
--

CREATE TABLE `bitacoraut` (
  `id_bitacoraut` int(11) NOT NULL,
  `id_tabla` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `id_usuario` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `operacion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `actividad_realizada` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `informacion_anterior` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tabla` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choferes`
--

CREATE TABLE `choferes` (
  `id_choferes` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cedula` varchar(8) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `choferes`
--

INSERT INTO `choferes` (`id_choferes`, `placa`, `nombre`, `apellido`, `cedula`, `telefono`, `status`) VALUES
(5, 'VAS123', 'Franklin', 'Jimenez', '11456268', '04145578996', 0),
(2, 'PFS982', 'Juan', 'Perez', '123456', '0412772134', 0),
(4, 'XAM815', 'Simon', 'Fonseca', '26779425', '04245188422', 0),
(6, 'GAP173', 'Antonio', 'Ramos', '27889456', '0412658793', 0),
(1, 'XAM368', 'Oriana', 'Armas', '95589666', '04127721353', 0),
(3, 'SAR891', 'Erwin', 'Gonzalez', '9601788', '04127728954', 0);

--
-- Disparadores `choferes`
--
DELIMITER $$
CREATE TRIGGER `after_chofer_update` BEFORE UPDATE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Chofer', 'Se Modificaron los datos de un chofer')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_chofer_insertar` AFTER INSERT ON `choferes` FOR EACH ROW INSERT INTO bitacora (host, usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula, 'Chofer', 'Se inserto un nuevo chofer')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `choferes_delete` AFTER DELETE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Choferes', 'Se elimino un Chofer del registro')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(11) NOT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8_bin NOT NULL,
  `tiempo` varchar(20) COLLATE utf8_bin NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `costo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id_mantenimiento`, `nombre_tipo`, `tiempo`, `placa`, `nombre`, `costo`, `fecha`, `status`) VALUES
(1, 'Cambio de aceite', '1', 'GAP173', 'Fernandez ', '10,0', '2021-09-03', 0),
(2, 'Chequeo', '3', 'PFS982', 'Mcqueen', '30,0', '2021-10-02', 0),
(3, 'Preventivo', '2', 'XAM368', 'Michellin', '40,0', '2021-09-03', 0);

--
-- Disparadores `mantenimientos`
--
DELIMITER $$
CREATE TRIGGER `after_mantenimientos_update` BEFORE UPDATE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimiento', 'Se modifico un mantenimiento')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_mantenimientos_insertar` AFTER INSERT ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Mantenimiento', 'Se inserto un nuevo mantenimiento')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mantenimientos_delete` AFTER DELETE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimientos', 'Se elimino un mantenimiento asociado a la placa señalada')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id_reparaciones` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `costo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id_reparaciones`, `nombre`, `placa`, `costo`, `fecha`, `descripcion`, `status`) VALUES
(1, 'Mcqueen', 'GAP173', '50,0', '2021-09-03', 'Revision completa', 0);

--
-- Disparadores `reparaciones`
--
DELIMITER $$
CREATE TRIGGER `after_reparaciones_update` BEFORE UPDATE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparacion', 'Se modifico una reparacion')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_reparacion_insertar` AFTER INSERT ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Reparaciones', 'Se registro una nueva reparacion')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `reparacion_delete` AFTER DELETE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparaciones', 'Se elimino una reparacion')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `permiso_usuario` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permisos_vehiculos` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_choferes` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_rutas` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_taller` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_mantenimiento` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_bitacora` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_seguridad` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_reportes` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES
(4, 'Administradores', 'Permiso para todo', 'todo', 'todo', 'todo', NULL, 'todo', 'todo', 'todo', 'todo', 'todo', 0),
(1, 'Root', 'Es el superusuario de este sistema.', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 0),
(2, 'Secretaria', 'Solo dispone de tres modulos', 'todo', 'todo', 'todo', NULL, 'lectura', 'lectura', 'lectura', 'restringido', 'restringido', 0),
(3, 'UsuarioEstandar', 'Solo puede consultar', 'restringido', 'lectura', 'lectura', 'lectura', 'lectura', 'lectura', 'restringido', 'restringido', 'todo', 0);

--
-- Disparadores `roles`
--
DELIMITER $$
CREATE TRIGGER `bitacora_roles_delete` AFTER DELETE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.id_rol,'Seguridad Roles', 'Se elimino un rol')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_roles_insertar` AFTER INSERT ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,' Seguridad Roles', 'Se creo un nuevo rol')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_roles_update` BEFORE UPDATE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,'Seguridad Roles', 'Se modifico un rol')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre_ruta` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion_ruta` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `placa`, `nombre_ruta`, `direccion_ruta`, `hora_salida`, `status`) VALUES
(3, 'XAM368', 'BarrioUnion', 'calle 4 hasta san jose', '01:00:00', 0),
(2, 'VAS123', 'Cabudare', 'Cabudare La mora', '07:30:00', 0),
(4, 'SAR891', 'Centro', 'Vargas con 18', '05:30:00', 0),
(1, 'GAP173', 'ZonaNorte', 'Zona norte, Yucatan', '12:30:00', 0);

--
-- Disparadores `rutas`
--
DELIMITER $$
CREATE TRIGGER `after_ruta_update` BEFORE UPDATE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se Modifico una ruta')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_ruta_insertar` AFTER INSERT ON `rutas` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Ruta', 'Se inserto una nueva ruta')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `rutas_delete` AFTER DELETE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se elimino una ruta')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(11) NOT NULL,
  `rif` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `informacion_contacto` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `rif`, `nombre`, `direccion`, `informacion_contacto`, `status`) VALUES
(4, 'J-17031998', 'Fernandez ', '60 con 13', '025144778869', 0),
(1, 'E-9601788 ', 'Mcqueen', 'Libertador con 37', '02514423626', 0),
(3, 'E-12348369', 'Michellin', 'calle  42', '025123344589', 0),
(2, 'J-26561633', 'ORI', 'MACIAS', '04145448669', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipos` int(11) NOT NULL,
  `nombre_tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tiempo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipos`, `nombre_tipo`, `descripcion`, `tiempo`, `status`) VALUES
(2, 'Cambio de aceite', 'renovacion ', '1', 0),
(5, 'Cauchos', 'Revision completa', '3', 0),
(3, 'Chequeo', 'Se revisaron los cauchos', '3', 0),
(4, 'Frenos', 'Cambio de liga de freno', '1', 0),
(1, 'Preventivo', 'Revision completa', '2', 0);

--
-- Disparadores `tipos`
--
DELIMITER $$
CREATE TRIGGER `after_tipos_update` BEFORE UPDATE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipos', 'Se Modifico un campo de la tabla')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_tipos_insertar` AFTER INSERT ON `tipos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.nombre_tipo, NOW(), NOW(),'Tipos', 'Se registro un dato en la tabla tipos ')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tipos_delete` AFTER DELETE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipo', 'Se elimino un registro de tipos de mantenimiento')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(8) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(32) COLLATE utf8_bin NOT NULL,
  `rol` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` int(11) DEFAULT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fechaRecuperacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `codigo` varchar(32) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula`, `usuario`, `nombre`, `apellido`, `contrasena`, `rol`, `status`, `correo`, `fechaRecuperacion`, `codigo`) VALUES
(0, '1234', 'root', 'root', 'root', '63a9f0ea7bb98050796b649e85481845', 'Root', 0, 'root@gmail.com', '0000-00-00 00:00:00', 'codigo'),
(2, '26561633', 'admin', 'Oriana', 'Armas', '21232f297a57a5a743894a0e4a801fc3', 'Root', 0, '', '2021-10-20 18:22:42', NULL),
(1, '7403566', 'secretaria', 'Maria', 'Armas', 'fd09accffacf03d7393c2a23a9601b43', 'Secretaria', 0, '', '2021-08-30 01:34:50', NULL);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `after_usuarios_update` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se Modifico un campo de esta tabla')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_usuario_insertar` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula,'Usuario', 'Se inserto un nuevo usuario')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuarios_delete` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se elimino un usuario')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `funcionamiento` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `id_mantenimiento` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `modelo`, `funcionamiento`, `nombre_tipo`, `id_mantenimiento`, `status`) VALUES
(1, 'GAP173', 'Encava', 'Operativo', NULL, NULL, 0),
(6, 'PFS982', 'Dodge', 'Operativo', NULL, NULL, 0),
(2, 'SAR891', 'Encava', 'Operativo', NULL, NULL, 0),
(4, 'VAS123', 'Kia', 'Operativo', NULL, NULL, 0),
(3, 'XAM368', 'Encava', 'Operativo', NULL, NULL, 0),
(5, 'XAM815', 'Encava', 'Operativo', NULL, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `bitacoraut`
--
ALTER TABLE `bitacoraut`
  ADD PRIMARY KEY (`id_bitacoraut`);

--
-- Indices de la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `fk_placa_vehiculo` (`placa`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `fk_nombre_tipo` (`nombre_tipo`),
  ADD KEY `fk1_placa` (`placa`),
  ADD KEY `fk1_nombre` (`nombre`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id_reparaciones`),
  ADD KEY `fk_nombre` (`nombre`),
  ADD KEY `fk_placa` (`placa`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`nombre_rol`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`nombre_ruta`),
  ADD KEY `fk2_placa` (`placa`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`nombre_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `fk_rol` (`rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `bitacoraut`
--
ALTER TABLE `bitacoraut`
  MODIFY `id_bitacoraut` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id_reparaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD CONSTRAINT `fk_placa_vehiculo` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `fk1_nombre` FOREIGN KEY (`nombre`) REFERENCES `taller` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk1_placa` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nombre_tipo` FOREIGN KEY (`nombre_tipo`) REFERENCES `tipos` (`nombre_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `fk_nombre` FOREIGN KEY (`nombre`) REFERENCES `taller` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_placa` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `fk2_placa` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
