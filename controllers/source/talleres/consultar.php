<?php

	
 require_once '../../../libs/database.php';
 $modal = new Database();

	$query = $modal->connect()->query('SELECT * FROM taller WHERE status = 0');
	$salida = "";


		if (isset($_POST['consulta'])) {
			$q = $modal->connect()->quote($_POST['consulta']);

			$query = $modal->connect()->query('SELECT id_taller, rif, nombre, direccion, informacion_contacto FROM taller WHERE status = 0 AND nombre LIKE '.$q.' OR status = 0 AND id_taller LIKE '.$q.' OR status = 0 AND rif LIKE '.$q.' OR status = 0 AND direccion LIKE '.$q);

		}

	

	if ($query->rowCount() > 0) {
			
				$salida = "<table class='tabla_datos'>
				<thead>
					<tr>
						<th>Rif</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Informacion de contacto</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
					</thead>
				<tbody>";

				while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
					$salida.="<tr>


							<td>".$fila['rif']."</td>
							<td>".$fila['nombre']."</td>
							<td>".$fila['direccion']."</td>
							<td>".$fila['informacion_contacto']."</td>
							<td> <a class='crud' href='talleres/modificarTaller/".$fila['rif']."'>Modificar</a></td>
							<td> <a class='crud' href='talleres/eliminarTaller/".$fila['id_taller']."'>Eliminar</a></td>

					</tr>";
				}

				$salida.="</tbody></table>";
		

		}else{

			$salida.="No hay registros";
		}

		echo $salida;

	

?>