<?php

 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM choferes WHERE status = 0');
	$salida = "";


		if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_choferes, cedula, nombre, apellido, placa, telefono FROM choferes WHERE status = 0 AND nombre LIKE '.$q.' OR status = 0 AND cedula LIKE '.$q.' OR status = 0 AND apellido LIKE '.$q);
		

		}

		

		if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
		
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cedula</th>
						<th>Telefono</th>
						<th>Vehiculo</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

		
							<td>".$fila['nombre']."</td>
							<td>".$fila['apellido']."</td>
							<td>".$fila['cedula']."</td>
							<td>".$fila['telefono']."</td>
							<td>".$fila['placa']."</td>
							<td> <a class='crud' href='choferes/modificarChofer/".$fila['id_choferes']."'>Modificar</a></td>
							<td> <a class='crud' href='choferes/eliminarChofer/".$fila['id_choferes']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

	$salida.="No hay registros";
		}

		echo $salida;



?>