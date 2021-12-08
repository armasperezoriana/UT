<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Registrar Usuario</h2>    
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>pregunta/estenografia" method="POST" class="form">
      
        <div class="tabla">  
           <div>
        <label>Selecciona una imagen</label>
         
         <table div="imagenes">
               <tr>
                <th>Imagen 1 <a class="crud" href="<?php echo constant('URL')?>tipos"><img src="<?php echo constant('URL')?>public/img/slider/5.jpg" width="300"></th>
              <th>Imagen 2 <a class="crud" href="<?php echo constant('URL')?>tipos"><img src="<?php echo constant('URL')?>public/img/slider/6.jpg" width="300"></th>
              <th>Imagen 3  <a class="crud" href="<?php echo constant('URL')?>tipos"><img src="<?php echo constant('URL')?>public/img/slider/2.jpg" width="300"></th>
              <th>Imagen 4  <a class="crud" href="<?php echo constant('URL')?>tipos"><img src="<?php echo constant('URL')?>public/img/slider/7.jpg" width="300"></th>
              </tr>
          
           
            </table>
        </div>
      </div>
                <div class="bottom">
          <a href="<?php echo constant('URL')?>">Guardar</a>

          <a href="<?php echo constant('URL')?>usuarios" >Volver</a>
        </div>
         
      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/agregar.js"></script>
</body>
</html>
