<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Alertas del sistema</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Alertas de mantenimiento preventivo</h2> 
        </div>

    <div class="tabla" id="form">
      <div>
          <table>
            <tr> 
            <th>Id</th>
            <th>Placa del vehiculo</th>
            <th>Tipo de mantenimiento</th>
            <th>Ultimo mantenimiento</th>
            <th>Tiempo excedido</th> <th>Realizar mantenimiento</th>
            <tbody id="tbody-alertas">
              <?php
                foreach($this->items as $item){

              ?>
              </tr>
              <tr >
                <td><?php echo $item["id_mantenimiento"]; ?></td>
                <td><?php echo $item["mostrarPlaca"]; ?></td>
                <td><?php echo $item["mostrarTipo"]; ?></td>
                <td><?php echo $item["mostrarFecha"]; ?></td>
                <td><?php echo $item["diasPasado"] . " dias"; ?></td>

                <td><a class="crud" href="<?php echo constant('URL')?>mantenimientos/modificarMantenimiento/">Mantenimiento</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
          <button class="botoncito" id="abrir" onclick="abrir()">ayuda</button>
            <a href="<?php echo constant('URL')?>mantenimientos/registrarMantenimiento">Registrar</a>
            <a href="<?php echo constant('URL')?>opcion">Volver</a>
        </div>
      </div>
      <div class="modal" id="vent"> 

            <div class="modal_titulo">AYUDA ALERTAS</div>
              <div class="modal_mensaje">
                <p>
                  En este modulo podrá visualizar los vehiculos que están necesitados de algún tipo de mantenimiento a su vez se le permitira al usuario registrar, modificar y eliminar los mantenimientos
                  <br><br>
                  1. Para eliminar un mantenimiento seleccione "eliminar" situada a la derecha del mantenimiento
                  <br> <br>
                  2. Para modificar un mantenimiento seleccione "modificar" situada a izquierda del mantenimiento
                  <br><br>
                  3. Para registrar un mantenimiento seleccione "registrar" que se muestra en el lado inferior derecho de la tabla
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
    <script src="<?php echo constant('URL')?>public/js/ventana/ventana.js"></script>
  </div>
  

</body>
</html>
