<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Seguridad</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar rol</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>seguridad/registrarRol" method="POST" class="form" id="formulario">
      
        <div class="form__box">
         
          <div>
            <label for="nombre_rol">Nombre del rol:</label>
            <input type="text" name="nombre_rol" id="nombre_rol" placeholder="Ingrese el nombre">
          
         </div>
          <div>
            <label for="descripcion">Descripcion :</label>
            <textarea id="descripcion" name="descripcion" placeholder="Ingrese la descripcion del rol"></textarea>
          </div>
           </div>
          <div class="text-header"><h2>Permisos</h2></div>
          <div >
          <div>
            <table class="tabla">
            <tr>
              <th>Modulos</th>
              <th>Solo lectura</th>
              <th>Permisos total</th>
              <th>Restringido</th>
            </tr>
            <tr>
              <td>Usuarios</td>
              <td><input type="radio" name="permiso_usuario"  value="lectura"></td>
              <td><input type="radio" name="permiso_usuario" value="todo"></td>
              <td><input type="radio" name="permiso_usuario" value="restringido"></td>
            </tr>
             <tr>
              <td>Vehiculos</td>
              <td><input type="radio" name="permisos_vehiculos" value="lectura"></td>
              <td><input type="radio" name="permisos_vehiculos" value="todo"></td>
              <td><input type="radio" name="permisos_vehiculos" value="restringido"></td>
            </tr>
            <tr>
              <td>Choferes</td>
              <td><input type="radio" name="permiso_choferes" value="lectura"></td>
              <td><input type="radio" name="permiso_choferes" value="todo"></td>
              <td><input type="radio" name="permiso_choferes" value="restringido"></td>
            </tr>
             <tr>
              <td>Rutas</td>
              <td><input type="radio" name="permiso_rutas" value="lectura"></td>
              <td><input type="radio" name="permiso_rutas" value="todo"></td>
              <td><input type="radio" name="permiso_rutas" value="restringido"></td>
            </tr>
             <tr>
              <td>Taller</td>
              <td><input type="radio" name="permiso_taller" value="lectura"></td>
              <td><input type="radio" name="permiso_taller" value="todo"></td>
              <td><input type="radio" name="permiso_taller" value="restringido"></td>
            </tr>
             <tr>
              <td>Mantenimiento</td>
              <td><input type="radio" name="permiso_mantenimiento" value="lectura"></td>
              <td><input type="radio" name="permiso_mantenimiento" value="todo"></td>
              <td><input type="radio" name="permiso_mantenimiento" value="restringido"></td>
            </tr>
             <tr>
              <td>Bitacora</td>
              <td><input type="radio" name="permiso_bitacora" value="lectura"></td>
              <td><input type="radio" name="permiso_bitacora" value="todo"></td>
              <td><input type="radio" name="permiso_bitacora" value="restringido"></td>
            </tr>
             <tr>
              <td>Seguridad</td>
              <td><input type="radio" name="permiso_seguridad" value="lectura"></td>
              <td><input type="radio" name="permiso_seguridad" value="todo"></td>
              <td><input type="radio" name="permiso_seguridad" value="restringido"></td>
            </tr>
            <tr>
              <td>Reportes</td>
              <td><input type="radio" name="permiso_reportes" value="lectura"></td>
              <td><input type="radio" name="permiso_reportes" value="todo"></td>
              <td><input type="radio" name="permiso_reportes" value="restringido"></td>
            </tr>
         
            </table>
          </div>
          </div>
        <div class="bottom">
           <button type="submit" name="agregar"  value="agregar" onclick= "validarFormulario()" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>seguridad" >Volver</a>

        </div>

      </form>
    </main>
  </div>
    <script src="<?php echo constant('URL')?>public/js/rutas/validaciones.js"></script>

</body>
</html>
