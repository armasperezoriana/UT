<?php
 require_once '../../../libs/database.php';
 $modal = new Database();



	$query = $modal->connect()->query('SELECT * FROM usuarios WHERE status = 0');
	$salida = "";

		if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_usuario, cedula, usuario, nombre, apellido, contrasena, rol, status FROM usuarios WHERE status = 0 AND nombre LIKE'.$q.' OR status = 0 AND cedula LIKE '.$q.' OR status = 0 AND apellido LIKE '.$q.' OR status = 0 AND usuario LIKE '.$q.' OR status = 0 AND contrasena LIKE '.$q.' OR status = 0 AND rol LIKE '.$q);

		}


		if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>

						<th>Foto</th>
						<th>cedula</th>
						<th>Usuario</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Contrasena</th>
						<th>Rol</th>
						<th>Modificar</th>
						<th>Eliminar</th>
				
				<tbody id='tbody-usuarios'>
					</tr>
					</thead>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

							<td><img src='public/img/logo2.png.' width= '70px' class='desarrolladores'></td>
							<td>".$fila['cedula']."</td>
							<td>".$fila['usuario']."</td>
							<td>".$fila['nombre']."</td>
							<td>".$fila['apellido']."</td>
							<td>".$fila['contrasena']."</td>
							<td>".$fila['rol']."</td>
							<td> <a class='crud' href='usuarios/modificarUsuario/".$fila['id_usuario']."'>Modificar</a></td>
							<td> <a class='crud' href='usuarios/eliminarUsuario/".$fila['id_usuario']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;

		

?>