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
            <h2>Actualizar Rol</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>seguridad/modificarRol" method="POST" class="form">
        <div class="form__box ">
         
         <div>
            <label for="id_rol">ID del rol</label>
            <input type="text" name="id_rol" id="id_rol" readonly  value="<?php echo $this->roles->getId();?>">
         </div>
         <div>
            <label for="nombre_rol">Nombre del rol:</label>
            <input type="text" name="nombre_rol" id="nombre_rol" placeholder="Ingrese el nombre del rol" value="<?php echo $this->roles->getNombre_rol();?>">
         </div>
           <div>
            <label for="descripcion">Descripcion :</label>
            <textarea id="descripcion" name="descripcion" ><?php echo $this->roles->getDescripcion();?></textarea>
          </div>
         
                
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificarRol" value="modificarRol" onclick= "validarFormulario()">Modificar rol</button>
          <a href="<?php echo constant('URL')?>seguridad/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>