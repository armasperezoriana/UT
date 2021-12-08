<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> UT| Reportes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
        <h2> Gestión de Reportes</h2>
      </div>
      

      <div class="tabla" id="form">
      <div>
          <table>
            <div class="text-header">
        <h3> Reportes PDF</h3>
      </div>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/choferes"><img src="<?php echo constant('URL')?>public/img/icoReportes/chofer.png" whith><br>Choferes</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/mantenimientos"><img src="<?php echo constant('URL')?>public/img/icoReportes/mantenimiento.png"><br>Mantenimiento</a></th>
           <!-- <th><a class="crud" href="<?php echo constant('URL')?>reportes/reparaciones"><img src="<?php echo constant('URL')?>public/img/icoReportes/reparacion.png"><br>Reparaciones</a></th>-->
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/talleres"><img src="<?php echo constant('URL')?>public/img/icoReportes/taller.png"><br>Talleres</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/rutas"><img src="<?php echo constant('URL')?>public/img/icoReportes/ruta.png"><br>Rutas</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/vehiculos"><img src="<?php echo constant('URL')?>public/img/icoReportes/vehiculo.png"><br>Vehiculos</a></th>
            </tbody>
          </table>
      </div>
      <br>

       <div class="text-header">
        <h3> Reportes Estadísticos</h3>
      </div>

      <div class="tabla" id="form">
      <div>
          <table>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/choferess"><img src="<?php echo constant('URL')?>public/img/icoReportes/chofer.png" whith><br>Choferes</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/mantenimientoss"><img src="<?php echo constant('URL')?>public/img/icoReportes/mantenimiento.png"><br>Mantenimiento</a></th>
           <!-- <th><a class="crud" href="<?php echo constant('URL')?>reportes/reparaciones"><img src="<?php echo constant('URL')?>public/img/icoReportes/reparacion.png"><br>Reparaciones</a></th>-->
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/talleress"><img src="<?php echo constant('URL')?>public/img/icoReportes/taller.png"><br>Talleres</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/rutass"><img src="<?php echo constant('URL')?>public/img/icoReportes/ruta.png"><br>Rutas</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>reportes/vehiculoss"><img src="<?php echo constant('URL')?>public/img/icoReportes/vehiculo.png"><br>Vehiculos</a></th>
            </tbody>
          </table>
      </div>

        <div class="bottom">
            <button class="botoncito" id="abrir" onclick="abrir()">Ayuda</button>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
      <div class="modal" id="vent"> 

            <div class="modal_titulo">AYUDA REPORTES</div>
              <div class="modal_mensaje">
                <p>
                  En este modulo podrá visualizar reportes normales y reportes estadisticos de los modulos que del sistema. Los iconos te la parte superior corresponden a los reportes normales y los iconos de la parte inferior corresponden a los estadisticos
                  <br><br>
                  1. seleccione el icono del modulo que desee visualizar como reporte
                  <br> <br>                  
                  2. Para volver al menu principal presione "volver" situado en la parte inferior derecha
                  <br><br>
                  3. Para cerrar esta ventana emergente y seguir con el sistema presione e "cerrar"
                  <br><br>
                  4. Para hacer una busqueda dentro del modulo debe ingresar el nombre completo del dato que desea buscar

                </p>
              </div>  
              <button class="boton" id="cerrar" onclick="cerrar()">cerrar</button>
          </div>
    </main>
  </div>
  



  </main>
  <script src="<?php echo constant('URL')?>public/js/ventana/ventana.js"></script>
</div>

</body>
</html>
