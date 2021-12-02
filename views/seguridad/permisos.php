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
   

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>seguridad/permisos" method="POST" class="form">

         
        <div>
        <div class="text-header">
            <h2>Actualizar permisos del rol: <?php echo $this->roles->getNombre_rol();?></h2> 
        </div>
         <div class="form__box ">
           <div>
            <label for="id_rol">ID del rol</label>
            <input type="text" name="id_rol" id="id_rol" readonly  value="<?php echo $this->roles->getId();?>">
         </div>
         </div>
            <table class="tabla">
            <tr>
              <th>Modulos</th>
              <th>Solo lectura</th>
              <th>Permisos total</th>
              <th>Restringido</th>
            </tr>
            <tr>
              <td>Usuarios</td>
              <td><input type="radio" name="permiso_usuario"  value="lectura" <?php if ( $this->roles->getPermiso_usuario() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_usuario" value="todo" <?php if ( $this->roles->getPermiso_usuario() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_usuario" value="restringido" <?php if ( $this->roles->getPermiso_usuario() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Vehiculos</td>
              <td><input type="radio" name="permisos_vehiculos" value="lectura" <?php if ( $this->roles->getPermisos_vehiculos() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permisos_vehiculos" value="todo" <?php if ( $this->roles->getPermisos_vehiculos() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permisos_vehiculos" value="restringido" <?php if ( $this->roles->getPermisos_vehiculos() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
            <tr>
              <td>Choferes</td>
              <td><input type="radio" name="permiso_choferes" value="lectura" <?php if ( $this->roles->getPermiso_choferes() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_choferes" value="todo" <?php if ( $this->roles->getPermiso_choferes() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_choferes" value="restringido" <?php if ( $this->roles->getPermiso_choferes() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Rutas</td>
              <td><input type="radio" name="permiso_rutas" value="lectura" <?php if ( $this->roles->getPermiso_rutas() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_rutas" value="todo" <?php if ( $this->roles->getPermiso_rutas() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_rutas" value="restringido" <?php if ( $this->roles->getPermiso_rutas() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Taller</td>
              <td><input type="radio" name="permiso_taller" value="lectura" <?php if ( $this->roles->getPermiso_taller() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_taller" value="todo" <?php if ( $this->roles->getPermiso_taller() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_taller" value="restringido" <?php if ( $this->roles->getPermiso_taller() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Mantenimiento</td>
              <td><input type="radio" name="permiso_mantenimiento" value="lectura" <?php if ( $this->roles->getPermiso_mantenimiento() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_mantenimiento" value="todo" <?php if ( $this->roles->getPermiso_mantenimiento() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_mantenimiento" value="restringido" <?php if ( $this->roles->getPermiso_mantenimiento() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Bitacora</td>
              <td><input type="radio" name="permiso_bitacora" value="lectura" <?php if ( $this->roles->getPermiso_bitacora() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_bitacora" value="todo" <?php if ( $this->roles->getPermiso_bitacora() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_bitacora" value="restringido" <?php if ( $this->roles->getPermiso_bitacora() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
             <tr>
              <td>Seguridad</td>
              <td><input type="radio" name="permiso_seguridad" value="lectura" <?php if ( $this->roles->getPermiso_seguridad() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_seguridad" value="todo" <?php if ( $this->roles->getPermiso_seguridad() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_seguridad" value="restringido" <?php if ( $this->roles->getPermiso_seguridad() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
            <tr>
              <td>Reportes</td>
              <td><input type="radio" name="permiso_reportes" value="lectura" <?php if ( $this->roles->getPermiso_reportes() == 'lectura' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_reportes" value="todo" <?php if ( $this->roles->getPermiso_reportes() == 'todo' ) {?> checked <?php }?>></td>
              <td><input type="radio" name="permiso_reportes" value="restringido" <?php if ( $this->roles->getPermiso_reportes() == 'restringido' ) {?> checked <?php }?>></td>
            </tr>
         
            </table>
 
         
                
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="actualizar" value="actualizar" onclick= "validarFormulario()">Actualizar</button>
          <a href="<?php echo constant('URL')?>seguridad/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>