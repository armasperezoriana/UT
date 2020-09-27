<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Bitacora</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
        <div class="text-header">
            <h2>Bitacora del sistema</h2> 
        </div>
         <div class="tabla" id="form">
      <div>
          <table>
            <tr> <th>Descripcion del proceso</th><th>Usuario</th><th>Rol</th><th>Fecha</th><th>Hora</th></tr>
           <!--   <tbody>
           <?php 
                 foreach($this->usuarios as $row){
                  $bitacora = new BitacoraCLass();
                 $bitacora = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $bitacora->getId(); ?>">
                <td><?php echo $bitacora->getDescripcion(); ?></td>
                <td><?php echo $bitacora->getUsuario(); ?></td>
                <td><?php echo $bitacora->getRol(); ?></td>
                <td><?php echo $bitacora->getFecha(); ?></td>
                <td><?php echo $bitacora->getHora(); ?></td>

              </tr>
              <?php } ?>

            </tbody>  -->
              <tr>
                <td>Se agregó un nuevo usuario</td>
                <td>Alejandro</td>
                <td>admin</td>
                <td>12/10/2020</td>
                <td>10:35 am</td>
              </tr>
          

          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>

    </main>
  </div>


</body>
</html>
