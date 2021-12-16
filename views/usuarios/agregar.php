<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- menu y cabecera -->
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
        <form action="<?php echo constant('URL')?>usuarios/registrarUsuario" method="POST" class="form" id="formulario">
         
        <div class="form__box">  
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre" placeholder="Ingrese su nombre" maxlength="12" required  title="Solo puede ingresar caracteres">
            <span id="mnombre"></span>
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$"  placeholder="Ingrese su apellido" name="apellido" id="apellido" required>
            <span id="mapellido"></span>
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="usuario">Usuario:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$"  placeholder="Ingrese su nombre de usuario" name="usuario" id="usuario" required title="Solo puede ingresar caracteres">
               <span id="musername"></span>
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
            <div>
                <label for="rol">Roles</label>
                <select  required  class="select"  id="select" name="rol" >
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
            <label for="cedula">Cedula:</label>
            <input type="number" name="cedula" id="cedula" data-patron="^[a-zA-Z0-9]*$" pattern="solo puedes ingresar numeros" maxlength="9" placeholder="Ingrese su cedula" title="Solo puede ingresar de 6 a 9 numeros" required>
            <span id="cedula"></span>
            <p class="ayuda esconder">*6 a 9 numeros</p>
          </div>

            <div>
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena"  placeholder="Ingrese su contraseña" data-patron="^[a-zA-Z0-9]*$" id="pass" required maxlength="16">
                   <span id="pass"></span>
                <p class="ayuda esconder">*Debe contener al menos 3 letras y 3 numeros</p>
            </div>
            <div>
                <label for="pass">Confirmar contraseña:</label>
                <input type="password" name="pass-confirmar" data-patron="^([a-zA-Z0-9]){3,16}$" id="conPass"  placeholder="Repita su contraseña" required maxlength="16" >
                   <span id="conPass"></span>
                <p class="ayuda esconder">*Debe contener al menos 3 letras y 3 numeros</p>
            </div>


         
    
          <!-- NO FUNCIONAL POR AHORA
          <div>
                 <label for="foto perfil">Foto de Perfil:</label>
            <input type="file" name="imagen" id="imagen" data-patron="^[0-9]{6,9}$" maxlength="9" required>
            <p class="ayuda esconder">*6 a 9 numeros</p>
          </div>
          -->
          </div>

          <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>usuarios" >Volver</a></div>
        </div>
        <div id="error"></div>
       
      </form>
    </main>
  </div>
   <script  src="<?php  echo constant('URL')?>public/js/usuarios/agregar2.js"></script>
</body>

</html>
