<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Vehiculos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestión de vehiculos</h2> 
        </div>

    <div class="tabla" id="form" >
          <div class="form__box">
          <div>
          <label for="caja_busqueda">Buscar</label>
          <input type="text" name="caja_busqueda" id="caja_busqueda" > 
          </div>
          
        </div>

        <div id="datos" >
          
        </div>
     
        <div class="bottom">
            <button class="botoncito" id="abrir" onclick="abrir()">Ayuda</button>
            <a href="<?php echo constant('URL')?>vehiculos/registrarVehiculo">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
      <div class="modal" id="vent"> 

            <div class="modal_titulo">AYUDA VEHICULOS</div>
              <div class="modal_mensaje">
                <p>
                  En este modulo podrá visualizar los vehiculos que están registrados en el sistema a su vez registrar, eliminar y modificar
                  <br><br>
                  1. Para eliminar un vehiculo seleccione "eliminar" situada a la derecha del vehiculo
                  <br> <br>
                  2. Para modificar un vehiculo seleccione "modificar" situada a izquierda del vehiculo
                  <br><br>
                  3. Para registrar un vehiculo seleccione "registrar" que se muestra en el lado inferior derecho de la tabla
                  <br><br>
                  4. Para volver al menu principal presione "volver" situado en la parte inferior derecha
                  <br><br>
                  5. Para cerrar esta ventana emergente y seguir con el sistema presione e "cerrar" 
                  <br><br>
                  6. Para hacer una busqueda dentro del modulo debe ingresar el nombre completo del dato que desea buscar

                </p> 
              </div>  
              <button class="boton" id="cerrar" onclick="cerrar()">cerrar</button>
          </div>  
    </main>
  </div>
  
  
  <script src="<?php echo constant('URL')?>public/js/jquery.min.js"></script>
  <script src="<?php echo constant('URL')?>public/js/ventana/ventana.js"></script>
     <script src="<?php echo constant('URL')?>public/js/mainvehiculos.js"></script>
</body>
</html>
