<?php

 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM rutas WHERE status = 0');
	$salida = "";

		if (isset($_POST['consulta'])) {
		$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_ruta, placa, nombre_ruta, direccion_ruta, hora_salida FROM rutas WHERE status = 0 AND nombre_ruta LIKE '.$q.' OR status = 0 AND direccion_ruta LIKE '.$q.' OR status = 0 AND hora_salida LIKE '.$q.' OR status = 0 AND placa LIKE '.$q);

		}



	if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
		
						<th>Vehiculo</th>
						<th>Nombre de la ruta</th>
						<th>Direccion</th>
						<th>Hora de salida</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

				
							<td>".$fila['placa']."</td>
							<td>".$fila['nombre_ruta']."</td>
							<td>".$fila['direccion_ruta']."</td>
							<td>".$fila['hora_salida']."</td>
							<td> <a class='crud' href='rutas/modificarRuta/".$fila['id_ruta']."'>Modificar</a></td>
							<td> <a class='crud' href='rutas/EliminarRuta/".$fila['id_ruta']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;

	

?>