<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | UPTAEB</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/inicio.css">
    </head>
<body>
  <?php require 'views/header.php'; ?>

    <div class="text-header">
             <center><h2>Panel de control</h2></center>
         </div>
    <main>
      <div class="dashboard">
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/usuario.png">
          <br>
          <strong>Usuarios</strong></br>
          <span><?php 
          include 'models/source/main/CRUD.php';

          $mostrar = new mainCRUD();
          $mostrar->cantUsuarios();
          ?></span>
        </a>
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/vehiculo.png">
           <br>
          <strong>Vehiculos</strong></br>
          <span><?php $mostrar->cantVehiculos();?></span>
        </a>
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/chofer.png">
           <br>
          <strong>Choferes</strong></br>
          <span><?php $mostrar->cantChoferes();?></span>
        </a>
      
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/ruta.png">
           <br>
          <strong>Rutas</strong></br>
          <span><?php $mostrar->cantRutas();?></span>
        </a>
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/taller.png">
           <br>
          <strong>Taller</strong></br>
          <span><?php $mostrar->cantTaller();?></span>
        </a>
        <a href="#">
          <img src="<?php echo constant('URL')?>public/img/ico/mantenimiento.png">
           <br>
          <strong>Mantenimiento</strong></br>
          <span><?php $mostrar->cantMantenimiento();?></span>
        </a>
      </div>
<br><br><br>
      <div class="text-header">
            <h2>Actualizacion de datos de usuario actual:</h2> 
        </div>

      <center><div class="container">
      <form action="<?php echo constant('URL')?>usuarios/modificarUsuario" method="POST" class="form">
        <div class="form__box ">
          <div>
            <label for="id">Id:</label>
            <input type="text" data-patron="^[0-9]{6,9}$" name="id" id="id" value="<?php echo $_SESSION['id_usuario']; ?>" required readonly>
          </div>
        <div>
            <label for="cedula">Cedula:</label>
            <input type="text" data-patron="^[0-9]{6,9}$" name="cedula" id="cedula"  maxlength="9" placeholder="Ingrese su cedula" value="<?php echo 
            $_SESSION['cedula'] ?>" required readonly>
          </div> 
        <div>
            <label for="rol">Rol:</label>
            <input type="text" data-patron="^[0-9]{6,9}$" name="rol" id="rol" value="<?php echo $_SESSION['rol']; ?>" required readonly>
          </div>   

         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre"  maxlength="20"  value="<?php echo $_SESSION['nombre']; ?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="apellido" id="apellido"  maxlength="20"  value="<?php echo $_SESSION['apellido'];?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="usuario">Usuario:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="usuario" id="usuario" maxlength="20"  value="<?php echo $_SESSION['usuario'];?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
   
            <div class="margin-lados">
                <label for="contrasena">Contraseña:</label>
                <input type="password" maxlength="15"  name="contrasena" id="contrasena" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
            <div class="margin-lados">
                <label for="conPass">Confirmar contraseña:</label>
                <input type="password" maxlength="15" name="pass-confirmar" id="conPass" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
 
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificarUsuarioMain" value="modificarUsuarioMain">Modificar Usuario</button>
         
        </div>
        
      </form><center>
    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.js"></script>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.slides.js"></script>
    <script>
 
 
  </script>
</body>
</html>
