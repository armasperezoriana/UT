
INSERT INTO `usuarios` (`id_usuario`, `cedula`, `usuario`, `nombre`, `apellido`, `contrasena`, `rol`, `status`) VALUES ('1', '45678910', 'admin', 'admin', 'admin', '12345', 'root', '2');
INSERT INTO `usuarios` (`id_usuario`, `cedula`, `usuario`, `nombre`, `apellido`, `contrasena`, `rol`, `status`) VALUES ('2', '12345678', 'usuario', 'usuario', 'nuevo', '12345', 'root', '1');
INSERT INTO `usuarios` (`id_usuario`, `cedula`, `usuario`, `nombre`, `apellido`, `contrasena`, `rol`, `status`) VALUES ('3', '98765432', 'visitante', 'visitante', 'visitante', '010101', 'root', '3');

INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `modelo`, `funcionamiento`, `nombre_tipo`, `id_mantenimiento`, `status`) VALUES ('4', 'ABC345', 'encava', 'operativo', NULL, '2', '6');
INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `modelo`, `funcionamiento`, `nombre_tipo`, `id_mantenimiento`, `status`) VALUES ('1', 'DCE123', 'encava', 'operativo', NULL, '1', '1');
INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `modelo`, `funcionamiento`, `nombre_tipo`, `id_mantenimiento`, `status`) VALUES ('3', 'OGA173', 'Kiat', 'inoperativo', NULL, '3', '2');



INSERT INTO `taller` (`id_taller`, `rif`, `nombre`, `direccion`, `informacion_contacto`, `status`) VALUES ('2', 'J-34567890', 'Mamusa', 'Centro de barquisimeto', '04145448669', '2');
INSERT INTO `taller` (`id_taller`, `rif`, `nombre`, `direccion`, `informacion_contacto`, `status`) VALUES ('1', 'J-64567890', 'Repuestos Josue', 'Libertador con 34', '04127721353', '1');


INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES ('2', 'administrador', 'Administrador del sistema', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', '1');
INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES ('5', 'Usuario', 'sin permiso para modulos de seguridad solo lectura', 'restringido', 'todo', 'todo', 'todo', 'todo', 'todo', 'restringido', 'restringido', 'todo', '2');
INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES ('4', 'visitante', 'sin permiso para modulos de seguridad solo lectura', 'nada', 'todo', 'todo', 'todo', 'todo', 'todo', 'nada', 'nada', 'todo', '3');
INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES ('3', 'visitante', 'sin permiso para modulos de seguridad solo lectura', 'restringido', 'restringido', 'restringido', 'restringido', 'restringido', 'restringido', 'restringido', 'restringido', 'restringido', '4');

INSERT INTO `rutas` (`id_ruta`, `placa`, `nombre_ruta`, `direccion_ruta`, `hora_salida`, `status`) VALUES ('2', 'OGA173', 'Zona Norte', 'Duaca', '06:00:00', '1');
INSERT INTO `rutas` (`id_ruta`, `placa`, `nombre_ruta`, `direccion_ruta`, `hora_salida`, `status`) VALUES ('1', 'ABC345', 'Pescadito', 'Simon Bolivar', '12:30:00', '2');

