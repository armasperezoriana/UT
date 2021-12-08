<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Seguridad</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
        <div class="text-header">
            <h2>Bitácora del Sistema</h2> 
        </div>
         <div class="tabla" id="form">
      <div>
          <table>
            <center><h3>Registros de datos</h3></center>
            <tr><th>No.</th> <th>Usuario</th><th>Acción</th><th>Modulo Modificado</th><th>Cédula/Rif/Identificador</th><th>Host</th><th>Fecha</th><th>Hora</th></tr>
           <tbody>
           <?php 
                 foreach($this->bitacora as $row){
                  $bitacora = new BitacoraCLass();
                 $bitacora = $row;
              ?>
              </tr >
              <tr id="fila-1 <?php echo $bitacora->getIdBitacora(); ?>">
                  <td><?php echo $bitacora->getIdBitacora(); ?></td>
                <td><?php echo $bitacora->getUsuario(); ?></td>
                   <td><?php echo $bitacora->getOperacion(); ?></td>
                     <td><?php echo $bitacora->getTabla(); ?></td>
                      <td><?php echo $bitacora->getCedula(); ?></td>
                    <td><?php echo $bitacora->getHost(); ?></td>  
                <td><?php echo $bitacora->getFecha(); ?></td>
                <td><?php echo $bitacora->getHora(); ?></td>
                </tr>
               
              <?php } ?>
  
          </table>
  
      </div>

    
          </table>
        <div class="bottom">
          <button class="botoncito" id="abrir" onclick="abrir()">Ayuda</button>
          <a href="<?php echo constant('URL')?>seguridad">Volver</a>
        </div> 
      </div>
      <div class="modal" id="vent"> 

            <div class="modal_titulo">AYUDA BITACORA</div>
              <div class="modal_mensaje">
                <p>
                  En este modulo se podrán visualizar todos los movimientos realizados por los usuarios en el sistema desde los registros, a las modificaciones y las eliminaciones
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
<script src="<?php echo constant('URL')?>public/js/ventana/ventana.js"></script>

</body>
</html>
