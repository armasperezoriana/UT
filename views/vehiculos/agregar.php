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
        <form action="<?php echo constant('URL')?>vehiculos/registrarVehiculo" method="POST" class="form" id="formulario" name="formulario"  name="form">
      
        <div class="form__box">
         <div>
            <label for="placa">Placa:</label>
            <input type="text" maxlength="6" name="placa" id="placa" placeholder="ABC-123"  require data-patron="[A-Z]{3}[0-9]{3}" pattern="[A-Z]{3}[0-9]{3}" title="El formato debe coincidir con 3 letras mayúsculas y 3 números."/ >
            <!-- validacion de la placa 3 letras y  numeros -->
     
         </div>
        <div>
            <label for="modelo">Modelo:</label>
             <select required  name="modelo" id="modelo" class="select">
              <option value="">...</option>
                <option value="Otro">Otro</option>
                <option value="Encava">Encava</option>
                <option value="BEDFORD">BEDFORD</option>
                <option value="Caio">Caio</option>
                <option value="Dodge">Dodge</option>
                <option value="Envasa">Envasa</option>
                <option value="Kia">Kia</option>
                <option value="Iveco">Iveco</option>
                <option value="Yutong">Yutong</option>
            </select>

         </div>
         <div>
            <label for="funcionamiento">Funcionamiento:</label>
             <select required name="funcionamiento" id="funcionamiento" class="select" >
                <option value="">...</option>
                <option value="Operativo">Operativo</option>
                <option value="Inoperante">Inoperante</option>
            </select>
         </div>


     
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit" onclick="validarFormulario()" >Agregar</button>

          <a href="<?php echo constant('URL')?>vehiculos" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/vehiculos/validarvehiculo.js"></script>
   <script src="<?php echo constant('URL')?>public/js/vehiculos/validacion.js"></script>
   

</body>
</html>
