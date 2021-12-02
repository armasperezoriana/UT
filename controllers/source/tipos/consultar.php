<?php
 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM tipos WHERE status = 0');
	$salida = "";


	if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_tipos, nombre_tipo, descripcion, tiempo FROM tipos WHERE status = 0 AND nombre_tipo LIKE '.$q.' OR status = 0 AND descripcion LIKE '.$q.' OR status = 0 AND tiempo LIKE '.$q);

		}


if ($query->rowCount() > 0) {			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Intervalo entre mantenimiento (Por meses)</th>
						<th>Modificar</th>
						<th>Eliminar</th>
				
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>

							<td>".$fila['nombre_tipo']."</td>
							<td>".$fila['descripcion']."</td>
							<td>".$fila['tiempo']."</td>
							<td> <a class='crud' href='tipos/modificarTipo/".$fila['nombre_tipo']."'>Modificar</a></td>
							<td> <a class='crud' href='tipos/eliminarTipo/".$fila['id_tipos']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;



?>