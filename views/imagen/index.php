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
        <form action="<?php echo constant('URL')?>pregunta/estenografia" method="POST" class="form" id="formulario" id="formulario">
      
        <div class=form_box>
      <div>
            <label for="palabra">Escribe una palabra de seguridad:</label></
          <input type="password"  data-patron="^[a-zA-Z]{4,12}$" name="palabra" id="palabra" maxlength="20">
           <center> <input type="password" data-patron="^[a-zA-Z]{3,12}$" name="respuesta" id="respuesta" placeholder="Palabra de seguridad" maxlength="12"></center>
          </div>

        <div class="tabla">  
           <div>
        <label>Selecciona una imagen</label>
         
         <table div="imagenes">
               <tr>
                <th>Imagen 1 <img src="<?php echo constant('URL')?>public/img/seguridad/1.png" width="300"></th>
              <th>Imagen 2 <img src="<?php echo constant('URL')?>public/img/seguridad/2.png" width="300"></th>
              <th>Imagen 3  <img src="<?php echo constant('URL')?>public/img/seguridad/3.png" width="300"></th>
              <th>Imagen 4  <img src="<?php echo constant('URL')?>public/img/seguridad/4.png" width="300"></th>
              </tr>
          
           
        </table>
        </div>
      </div>
 <!--
      <?php 

      require_once 'controllers/source/esteganografia/esteganografia.php';

            
            $procesar = new EsteganografiaController();
            $procesar->encriptarImg();
        

      ?>
  -->
      </div>
                <div class="bottom">
          <a href="<?php echo constant('URL')?>">Guardar</a>

          <a href="<?php echo constant('URL')?>usuarios" >Volver</a>
        </div>
         
      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/pregunta/agregar.js"></script>
</body>
</html>
