<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Tipos de Mantenimientos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de talleres</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarUsuario">
      <div>
          <table>
            <tr>
             <tr>
              <th>Id</th> 
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Cada cuanto tiempo</th><th>Modificar</th> <th>Eliminar</th>
              <tbody id="tbody-talleres">
              <?php
                foreach($this->tipos as $row){
                  $taller = new TiposClass();
                  $taller = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $taller->getId(); ?>">
                <td><?php echo $taller->getId(); ?></td>
                <td><?php echo $taller->getRif(); ?></td>
                <td><?php echo $taller->getNombre(); ?></td>
                <td><?php echo $taller->getDireccion(); ?></td>

                <td><a class="crud" href="<?php echo constant('URL')?>talleres/modificarTaller/<?php echo $taller->getId();?>">Modificar</a></td>
                
                <td><a class="crud" href="<?php echo constant('URL')?>talleres/eliminarTaller/<?php echo $taller->getId();?>">Eliminar</a></td>

              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>talleres/registrarTaller">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  
</body>
</html>
