<?php

 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM vehiculos WHERE status = 0');
	$salida = "";


		if (isset($_POST['consulta'])) {
		$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT placa, modelo, funcionamiento FROM vehiculos WHERE status = 0 AND placa LIKE '.$q.' OR status = 0 AND modelo LIKE '.$q.' OR  status = 0 AND funcionamiento LIKE '.$q);

		}


		if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
						<th>placa</th>
						<th>modelo</th>
						<th>funcionamiento</th>
						<th>Modificar</th>
						<th>Eliminar</th>

					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

							<td>".$fila['placa']."</td>
							<td>".$fila['modelo']."</td>
							<td>".$fila['funcionamiento']."</td>
							<td> <a class='crud' href='vehiculos/modificarVehiculo/".$fila['placa']."'>Modificar</a></td>
							<td> <a class='crud' href='vehiculos/eliminarVehiculo/".$fila['placa']."'>Eliminar</a></td>


					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;

	

?>