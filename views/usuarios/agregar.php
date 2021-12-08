<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script type="text/javascript" href= "<?php echo constant('URL')?>public/js/query/validar.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Registrar Usuario</h2>    
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>usuarios/registrarUsuario" method="POST" class="form" onclick="validar()";>
      
        <div class="form__box">  
      
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" required name="nombre" id="nombre" maxlength="16">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" required name="apellido" id="apellido">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="usuario">Usuario:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="usuario" id="username">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
            <div>
                <label for="rol">Roles</label>
                <select class="select"  id="select" name="rol" required>
                  <option value="0">Seleccione</option>
                  <?php 
                    foreach($this->roles as $row){
                      $roles = new RolesClass();
                      $roles = $row;
                 ?>
                <option value="<?php echo $roles->getNombre_rol()?>"><?php echo $roles->getNombre_rol(); ?></option>
                  <?php } ?>

                </select>
                
              </div>
            <div>
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" data-patron="^[a-zA-Z0-9]*$" id="pass" maxlength="16" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
            <div>
                <label for="pass">Confirmar contraseña:</label>
                <input type="password" name="pass-confirmar" data-patron="^([a-zA-Z0-9]){3,16}$"id="conPass" maxlength="16" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
          <div>
            <label for="cedula">Cedula:</label>
            <input type="text" name="cedula" id="cedula" data-patron="^[0-9]{6,9}$" maxlength="9" placeholder="Ingrese su cedula" required>
            <p class="ayuda esconder">*6 a 9 numeros</p>

          </div>
        </div>

        <div class="bottom">
          <a href="<?php echo constant('URL')?>pregunta">Agregar</a>
         
          <a href="<?php echo constant('URL')?>usuarios" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/query/usuarios/agregarV.js"></script>
</body>
</html>
