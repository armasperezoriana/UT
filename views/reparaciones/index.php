<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Reparaciones</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo azul -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de reparaciones</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarUsuario">
      <div>
          <table>
            <tr> <th>Id</th><th>Id Vehiculo</th><th>Descripcion</th><th>Costo</th><th>taller</th><th>fecha</th><th>Modificar</th> <th>Eliminar</th>
            <tbody>
              <?php
                foreach($this->reparaciones as $row){
                  $reparacion = new ReparacionesClass();
                  $reparacion = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $reparacion->getId(); ?>">
                <td><?php echo $reparacion->getId(); ?></td>
                <td><?php echo $reparacion->getId_vehiculo(); ?></td>
                <td><?php echo $reparacion->getDescripcion(); ?></td>
                <td><?php echo $reparacion->getCosto(); ?></td>
                <td><?php echo $reparacion->getTaller(); ?></td>
                <td><?php echo $reparacion->getFecha(); ?></td>

                <td><a class="crud" href="<?php echo constant('URL')?>reparaciones/modificarUsuario/<?php echo $reparacion->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $reparacion->getId(); ?>" <?php if ( $reparacion->getId() == '1' ) {?> disabled="disabled" <?php }?>>Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>usuarios/registrarUsuario">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
