<?php

	 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM reparaciones WHERE status = 0');
	$salida = "";


		if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_reparaciones, nombre, placa, costo, fecha, descripcion FROM reparaciones WHERE status = 0 AND nombre LIKE '.$q.' OR status = 0 AND costo LIKE '.$q.' OR status = 0 AND fecha LIKE '.$q.' OR status = 0 AND placa LIKE '.$q);

		}



	if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>

						<th>Taller</th>
						<th>Placa</th>
						<th>costo</th>
						<th>Fecha</th>
						<th>Descripcion</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

							<td>".$fila['nombre']."</td>
							<td>".$fila['placa']."</td>
							<td>".$fila['costo']."</td>
							<td>".$fila['fecha']."</td>
							<td>".$fila['descripcion']."</td>
							<td> <a class='crud' href='reparaciones/modificarReparacion/".$fila['id_reparaciones']."'>Modificar</a></td>
							<td> <a class='crud' href='reparaciones/eliminarReparacion/".$fila['id_reparaciones']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;

		

?>