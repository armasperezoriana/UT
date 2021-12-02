<?php

	 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM mantenimientos WHERE status = 0');
	$salida = "";
	

		
		if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_mantenimiento, nombre_tipo, tiempo, placa, nombre, costo, fecha FROM mantenimientos WHERE status = 0 AND nombre_tipo LIKE '.$q.' OR status = 0 AND tiempo LIKE '.$q.' OR status = 0 AND costo LIKE '.$q.' OR status = 0 AND fecha LIKE '.$q.' OR status = 0 AND placa LIKE '.$q);

		}

	

			if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Tipo de mantenimiento</th>
						<th>Cada cuantos meses se requiere</th>
						<th>Placa</th>
						<th>Taller</th>
						<th>Costo</th>
						<th>Fecha</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

							<td>".$fila['id_mantenimiento']."</td>
							<td>".$fila['nombre_tipo']."</td>
							<td>".$fila['tiempo']."</td>
							<td>".$fila['placa']."</td>
							<td>".$fila['nombre']."</td>
							<td>".$fila['costo']."</td>
							<td>".$fila['fecha']."</td>
							<td> <a class='crud' href='mantenimientos/modificarMantenimiento/".$fila['id_mantenimiento']."'>Modificar</a></td>
							<td> <a class='crud' href='mantenimientos/eliminarMantenimiento/".$fila['id_mantenimiento']."'>Eliminar</a></td>


					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			
			$salida.="No hay registros";
		}

		echo $salida;


?>