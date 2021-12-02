
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Seguridad</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
        <h2>Gestión de roles</h2> 
      </div>
      <div class="tabla" id="form" data-eliminar="eliminarUsuario">
        <div>
          <table>
            <tr> 
              <th>ID</th>
              <th>Rol</th>
              <th>Descripcion</th>
              <th>Permisos</th>
              <th>Modificar</th>
              <th>Eliminar</th>
      
              <tbody id="tbody-roles">
              <?php
              foreach($this->roles as $row){
              $rol = new RolesClass();
              $rol = $row;
              ?>
            </tr >
            <tr id="fila-<?php echo $rol->getId(); ?>">
              <td>
                <?php echo $rol->getId(); ?>
               </td>
              <td>
                <?php echo $rol->getNombre_rol(); ?>
              </td>
              <td>
                <?php echo $rol->getDescripcion(); ?>
              </td>
                  

              <td>
                <a class="crud" href="<?php echo constant('URL')?>seguridad/permisos/<?php echo $rol->getId();?>">Permisos</a>
              </td>
                <td>
                <a class="crud" href="<?php echo constant('URL')?>seguridad/modificarRol/<?php echo $rol->getId();?>">Modificar</a>
              </td>
             <td>
                <a class="crud" href="<?php echo constant('URL')?>seguridad/eliminarRol/<?php echo $rol->getId();?>">Eliminar</a>
              </td>              </tr>
              <?php } ?>
              </tbody>
          </table>

      </div>  
      <div class="bottom">
        <button class="botoncito" id="abrir" onclick="abrir()">ayuda</button>
        <a href="<?php echo constant('URL')?>bitacora">Bitacora</a>
        <a href="<?php echo constant('URL')?>seguridad/registrarRol">Registrar</a>
        <a href="<?php echo constant('URL')?>">Volver</a>
      </div>
      <div class="modal" id="vent"> 

            <div class="modal_titulo">AYUDA SEGURIDAD</div>
              <div class="modal_mensaje">
                <p>
                  En este modulo podrá visualizar los roles registrados en el sistema y registrar, eliminar y modificar. Estos roles son permitirán al usuario tener acceso total, solo lectura o tener acceso denegado a un modulo o conjunto de modulos
                  <br><br>
                  1. Para eliminar un rol seleccione "eliminar" situada a la derecha del rol del lado derecho de "modificar"
                  <br> <br>
                  2. Para modificar nombre y descripción de un rol seleccione "modificar" 
                  <br><br>
                  3. Para modificar los permisos asociados a un rol seleccione "permisos" situada a izquierda del rol al lado derecho de "eliminar"
                  <br><br>
                  4. Para registrar un rol seleccione "registrar" una vez dentro deberá llenar las casillas de nombre de rol, descripcion y seleccionar los permisos asignados ese rol con respecto a cada modulo 
                  <br><br>
                  5. Para volver al menu principal presione "volver" situado en la parte inferior derecha
                  <br><br>
                  6. Para cerrar esta ventana emergente y seguir con el sistema presione e "cerrar"
                  <br><br>
                  7. Para hacer una busqueda dentro del modulo debe ingresar el nombre completo del dato que desea buscar

                </p>
              </div>  
              <button class="boton" id="cerrar" onclick="cerrar()">cerrar</button>
          </div> 
    </main>
  </div>
<script src="<?php echo constant('URL')?>public/js/ventana/ventana.js"></script>
  </body>
</html>
