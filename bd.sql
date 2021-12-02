CREATE TABLE roles (
	id_rol int not null,
	nombre_rol varchar (15),
	descripcion varchar (60),
	permiso_usuario varchar (12),
	permisos_vehiculos varchar (12),
	permiso_choferes varchar (12),
	permiso_rutas varchar (12),
	permiso_taller varchar (12),
	permiso_mantenimiento varchar (12),
	permiso_bitacora varchar (12),
	permiso_seguridad varchar (12),
	permiso_reportes varchar (12),
	status int,
	primary key (nombre_rol)
);
INSERT INTO roles 
(id_rol, 
nombre_rol, 
descripcion, 
permiso_usuario, 
permisos_vehiculos, 
permiso_choferes, 
permiso_rutas,
permiso_taller,
permiso_mantenimiento,
permiso_bitacora,
permiso_seguridad,
permiso_reportes,
status)
VALUES ( 
1, 
'Root', 
'Es el superusuario de este sistema.', 
'todo', 
'todo', 
'todo', 
'todo',
'todo', 
'todo', 
'todo',
'todo', 
'todo', 
0);

DROP TRIGGER IF EXISTS `bitacora_roles_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_roles_insertar` AFTER INSERT ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,' Seguridad Roles', 'Se creo un nuevo rol');
CREATE TRIGGER `bitacora_roles_update` BEFORE UPDATE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,'Seguridad Roles', 'Se modifico un rol');
CREATE TRIGGER `bitacora_roles_delete` AFTER DELETE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.id_rol,'Seguridad Roles', 'Se elimino un rol');



CREATE TABLE usuarios (
	id_usuario int not null,
	cedula varchar (8) not null,
	usuario varchar (15) not null,
	nombre varchar (20) not null,
	apellido varchar (20) not null,
	contrasena varchar (32) not null,
	rol varchar (20) not null,
	status int,
	correo varchar(30) not null,
	fechaRecuperacion timestamp not null,
	codigo varchar(32),
	primary key (cedula),
	CONSTRAINT fk_rol foreign key (rol) references roles (nombre_rol) on delete cascade on update cascade
);
INSERT INTO usuarios 
(id_usuario, 
cedula, 
usuario, 
nombre, 
apellido, 
contrasena, 
rol,
status,
correo,
fechaRecuperacion,
codigo)
VALUES ( 
0, 
1234, 
'root', 
'root', 
'root', 
 MD5('root'), 
'Root',
'0',
'root@gmail.com',
'',
'codigo');


DROP TRIGGER IF EXISTS `bitacora_usuario_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_usuario_insertar` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula,'Usuario', 'Se inserto un nuevo usuario');
DROP TRIGGER IF EXISTS `after_usuarios_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_usuarios_update` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se Modifico un campo de esta tabla');
DROP TRIGGER IF EXISTS `usuarios_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `usuarios_delete` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se elimino un usuario');


CREATE TABLE taller (
	id_taller int not null,
	rif varchar (10) not null,
	nombre varchar (30) not null,
	direccion varchar (200),
	informacion_contacto varchar (12),
	status int,
	primary key (nombre)
);
DROP TRIGGER IF EXISTS `bitacora_taller_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_taller_insertar` AFTER INSERT ON `taller` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)), CURRENT_USER, NEW.rif, NOW(), NOW(),'Taller', 'Se inserto un taller');
DROP TRIGGER IF EXISTS `after_taller_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_taller_update` BEFORE UPDATE ON `taller` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.rif,'Taller', 'Se Modificaron los datos de un taller');
DROP TRIGGER IF EXISTS `taller_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `taller_delete` AFTER DELETE ON `taller` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.rif,'Taller', 'Se elimino un taller');


CREATE TABLE vehiculos (
	id_vehiculo int not null,
	placa varchar (10) not null,
	modelo varchar (20),
	funcionamiento varchar (20),
    nombre_tipo varchar (30),
    id_mantenimiento int,
    status int,
	primary key (placa)
 
);
DROP TRIGGER IF EXISTS `bitacora_vehiculo_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_vehiculo_insertar` AFTER INSERT ON `vehiculos` FOR EACH ROW INSERT INTO bitacora (host, usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.placa,'Vehiculo', 'Se inserto un vehiculo');
DROP TRIGGER IF EXISTS `after_vehiculos_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_vehiculos_update` BEFORE UPDATE ON `vehiculos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Vehiculo', 'Se Modifico un vehiculo');
DROP TRIGGER IF EXISTS `vehiculos_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `vehiculos_delete` AFTER DELETE ON `vehiculos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Vehiculo', 'Se elimino un Vehiculo');


CREATE TABLE choferes(
	id_choferes int not null,
	placa varchar (10),
	nombre varchar (20),
	apellido varchar (20),
	cedula varchar (8),
	telefono varchar (11),
    status int,
	primary key (cedula),
	CONSTRAINT fk_placa_vehiculo foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);
DROP TRIGGER IF EXISTS `bitacora_chofer_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_chofer_insertar` AFTER INSERT ON `choferes` FOR EACH ROW INSERT INTO bitacora (host, usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula, 'Chofer', 'Se inserto un nuevo chofer');
DROP TRIGGER IF EXISTS `after_chofer_update`; CREATE DEFINER=`root`@`localhost` TRIGGER `after_chofer_update` BEFORE UPDATE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Chofer', 'Se Modificaron los datos de un chofer');
DROP TRIGGER IF EXISTS `choferes_delete`; CREATE DEFINER=`root`@`localhost` TRIGGER `choferes_delete` AFTER DELETE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Choferes', 'Se elimino un Chofer del registro');

CREATE TABLE rutas (
	id_ruta int not null,
	placa varchar (10) not null,
	nombre_ruta varchar (50),
	direccion_ruta varchar (250),
	hora_salida time,
	status int,
	primary key (nombre_ruta),
	CONSTRAINT fk2_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);
DROP TRIGGER IF EXISTS `bitacora_ruta_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_ruta_insertar` AFTER INSERT ON `rutas` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Ruta', 'Se inserto una nueva ruta');
DROP TRIGGER IF EXISTS `after_ruta_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_ruta_update` BEFORE UPDATE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se Modifico una ruta');
DROP TRIGGER IF EXISTS `rutas_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `rutas_delete` AFTER DELETE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se elimino una ruta');

CREATE TABLE tipos (
	id_tipos int not null,
	nombre_tipo varchar (50),
	descripcion varchar (200),
	tiempo varchar (20),
	status int,

	primary key (nombre_tipo)
);
DROP TRIGGER IF EXISTS `bitacora_tipos_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_tipos_insertar` AFTER INSERT ON `tipos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.nombre_tipo, NOW(), NOW(),'Tipos', 'Se registro un dato en la tabla tipos ');
DROP TRIGGER IF EXISTS `after_tipos_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_tipos_update` BEFORE UPDATE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipos', 'Se Modifico un campo de la tabla');
DROP TRIGGER IF EXISTS `tipos_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `tipos_delete` AFTER DELETE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipo', 'Se elimino un registro de tipos de mantenimiento');

CREATE TABLE mantenimientos (
	id_mantenimiento int not null AUTO_INCREMENT,
	nombre_tipo varchar (30) not null,
	tiempo varchar (20) not null,
	placa varchar (10) not null,
	nombre varchar (30) not null,
	costo varchar (30) not null,
	fecha date,
	status int,

	primary key (id_mantenimiento),
	CONSTRAINT fk_nombre_tipo foreign key (nombre_tipo) references tipos (nombre_tipo) on delete cascade on update cascade,
	CONSTRAINT fk1_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade,
	CONSTRAINT fk1_nombre foreign key (nombre) references taller (nombre) on delete cascade on update cascade
);

DROP TRIGGER IF EXISTS `bitacora_mantenimientos_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_mantenimientos_insertar` AFTER INSERT ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Mantenimiento', 'Se inserto un nuevo mantenimiento');
DROP TRIGGER IF EXISTS `after_mantenimientos_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_mantenimientos_update` BEFORE UPDATE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimiento', 'Se modifico un mantenimiento');
DROP TRIGGER IF EXISTS `mantenimientos_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `mantenimientos_delete` AFTER DELETE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimientos', 'Se elimino un mantenimiento asociado a la placa señalada');

CREATE TABLE reparaciones (
	id_reparaciones int not null AUTO_INCREMENT,
	nombre varchar (30) not null,
	placa varchar (10) not null,
	costo varchar (30) not null,
	fecha date,
	descripcion varchar (200),
	status int,
	primary key (id_reparaciones),
	CONSTRAINT fk_nombre foreign key (nombre) references taller (nombre) on delete cascade on update cascade,
	CONSTRAINT fk_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);
DROP TRIGGER IF EXISTS `bitacora_reparacion_insertar`;CREATE DEFINER=`root`@`localhost` TRIGGER `bitacora_reparacion_insertar` AFTER INSERT ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Reparaciones', 'Se registro una nueva reparacion');
DROP TRIGGER IF EXISTS `after_reparaciones_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `after_reparaciones_update` BEFORE UPDATE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparacion', 'Se modifico una reparacion');
DROP TRIGGER IF EXISTS `reparacion_delete`;CREATE DEFINER=`root`@`localhost` TRIGGER `reparacion_delete` AFTER DELETE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparaciones', 'Se elimino una reparacion');


CREATE TABLE bitacora (
	id_bitacora int not null AUTO_INCREMENT,
	cedula varchar(8),
	usuario varchar(15),
	operacion varchar (200),
	host varchar(30),
	fecha date,
	hora  time,
	tabla varchar (40),
	status int,
    primary key(id_bitacora)
);


