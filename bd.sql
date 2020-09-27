CREATE TABLE usuarios (
	id_usuario int not null AUTO_INCREMENT,
	cedula varchar (8),
	usuario varchar (15),
	nombre varchar (20),
	apellido varchar (20),
	contrasena varchar (10),
	rol varchar (20),
	primary key (id_usuario)
);
INSERT INTO usuarios (id_usuario, cedula, usuario, nombre, apellido, contrasena, rol)
VALUES ( 0, 1234, 'admin', 'admin', 'istrador', 'admin', 'admin');

CREATE TABLE bitacora (
	id_bitacora int not null AUTO_INCREMENT,
	fecha date,
	hora time,
	accion varchar (200),
	primary key (id_bitacora)
);
CREATE TABLE taller (
	id_taller int not null AUTO_INCREMENT,
	rif varchar (10),
	nombre varchar (30),
	direccion varchar (30),
	primary key (id_taller)
);


CREATE TABLE vehiculos (
	id_vehiculo int not null AUTO_INCREMENT,
	placa varchar (8),
	modelo varchar (20),
	funcionamiento varchar (20),
	primary key (id_vehiculo)
);
CREATE TABLE choferes(
	id_choferes int not null AUTO_INCREMENT,
	id_vehiculo int not null,
	nombre varchar (10),
	apellido varchar (10),
	cedula varchar (8),
	telefono varchar (11),
	primary key (id_choferes),
	CONSTRAINT fk_idvehiculo foreign key (id_vehiculo) references vehiculos (id_vehiculo) on delete cascade on update cascade
);
CREATE TABLE rutas (
	id_ruta int not null AUTO_INCREMENT,
	id_vehiculo int not null,
	nombre_ruta varchar (50),
	direccion_ruta varchar (250),
	hora_salida time,
	primary key (id_ruta),
	CONSTRAINT fk2_id_vehiculo foreign key (id_vehiculo) references vehiculos (id_vehiculo) on delete cascade on update cascade
);
CREATE TABLE tipos (
	id_tipo int not null AUTO_INCREMENT,
	nombre_tipo varchar (50),
	descripcion varchar (200),
	tiempo varchar (20),

	primary key (id_tipo)
);
CREATE TABLE mantenimientos (
	id_mantenimiento int not null AUTO_INCREMENT,
	id_tipo int not null,
	id_vehiculo int not null,
	id_taller int not null,
	costo int not null,
	fecha date,

	primary key (id_mantenimiento),
	CONSTRAINT fk_id_tipo foreign key (id_tipo) references tipos (id_tipo) on delete cascade on update cascade,
	CONSTRAINT fk1_id_vehiculo foreign key (id_vehiculo) references vehiculos (id_vehiculo) on delete cascade on update cascade,
	CONSTRAINT fk1_idtaller foreign key (id_taller) references taller (id_taller) on delete cascade on update cascade
);
CREATE TABLE reparaciones (
	id_reparaciones int not null AUTO_INCREMENT,
	id_taller int not null,
	id_vehiculo int not null,
	costo int not null,
	descripcion varchar (200),
	primary key (id_reparaciones),
	CONSTRAINT fk_idtaller foreign key (id_taller) references taller (id_taller) on delete cascade on update cascade,
	CONSTRAINT fk_id_vehiculo foreign key (id_vehiculo) references vehiculos (id_vehiculo) on delete cascade on update cascade
);

