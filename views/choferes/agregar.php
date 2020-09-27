<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Choferes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar Usuario</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>choferes/registrarChofer" method="POST" class="form">
      
        <div class="form__box">
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="apellido" id="apellido" placeholder="Ingrese el apellido">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
          <div>
            <label for="cedula">Cedula:</label>
            <input type="text" name="cedula" id="cedula" data-patron="^[0-9]{6,9}$" placeholder="xx.xxx.xxx" required>
                 <p class="ayuda esconder">*6 a 9 numeros</p>
          </div>
          <div>
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" data-patron="^[0-9]{6,9}$" placeholder="04xx-xxxxxxx" required>
            <p class="ayuda esconder">*6 a 9 numeros</p>
          </div>
          <div>
                <label for="vehiculo">Vehiculo</label>
                <select class="select"  id="select">
                  <option value="0">Seleccione</option>
                  <?php 
                    foreach($this->vehiculos as $row){
                      $vehiculo = new VehiculosClass();
                      $vehiculo = $row;
                 ?>
                <option value="<?php echo $vehiculo->getId()?>"><?php echo $vehiculo->getPlaca().' - '.$vehiculo->getId(); ?></option>
                  <?php } ?>

                </select>
                
              </div>
           </div>


        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>choferes" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/agregar.js"></script>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>
