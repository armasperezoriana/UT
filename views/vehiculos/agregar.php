<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Vehiculos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 

        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>vehiculos/registrarVehiculo" method="POST" class="form">
      
        <div class="form__box">
         <div>
            <label for="placa">Placa:</label>
            <input type="text"  name="placa" id="placa">
     
         </div>
         <div>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo">
           
         </div>
         <div>
            <label for="funcionamiento">Funcionamiento:</label>
             <select name="funcionamiento" id="funcionamiento" class="select" required>
                <option value="">...</option>
                <option value="Operativo">Operativo</option>
                <option value="Inoperante">Inoperante</option>>
            </select>
         </div>
        
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>vehiculos" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/agregar.js"></script>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>
