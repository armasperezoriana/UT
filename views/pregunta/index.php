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
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Seguridad de Usuarios</h2>    
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>usuarios/registrarUsuario" method="POST" class="form">
      
        <div class="form__box">  
        

              <label>Pregunta 1</label>
            <div>
            <label for="modelo">Elige una pregunta:</label>
             <select required  name="modelo" id="modelo" class="select">
              <option value="">...</option>
                <option value="mejor amigo">¿Cuál era el nombre de tu mejor amigo?</option>
                <option value="color favorito">¿Cuál es tu color favorito?</option>
                <option value="nombre perro">¿Cómo se llama tu perro?</option>
            </select>

          <input type="password" data-patron="^[a-zA-Z]{3,12}$" name="respuesta" id="respuesta1" maxlength="20">
            <p class="ayuda esconder">Responde la pregunta</p>
        </div>

              <label>Pregunta 2</label>
              <div>
            <label for="modelo">Elige una pregunta:</label>
             <select required  name="modelo" id="modelo" class="select">
              <option value="">...</option>
                <option value="mejor amigo">¿Cuál fue tu primer empleo?</option>
                <option value="color favorito">¿En qué ciudad naciste?</option>
                <option value="nombre perro">¿Cuál es tu trabajo ideal?</option>
            </select>

          <input type="password" data-patron="^[a-zA-Z]{3,12}$" name="respuesta" id="respuesta2" maxlength="20">
            <p class="ayuda esconder">Responde la pregunta</p>
        </div>


     <label>Pregunta 3</label>
              <div>
            <label for="modelo">Elige una pregunta:</label>
             <select required  name="modelo" id="modelo" class="select">
              <option value="">...</option>
                <option value="apodo de niño">¿Cuál es tu apodo de niño?</option>
                <option value="pelicula favorita">¿Cuál es tu pelicula favorita?</option>
                <option value="lugar de estudio">¿Dónde estudiaste primaria?</option>
            </select>

          <input type="password" data-patron="^[a-zA-Z]{3,12}$" name="respuesta" id="respuesta3" maxlength="20">
            <p class="ayuda esconder">Responde la pregunta</p>
        </div>


             <label>Pregunta 4</label>
              <div>
            <label for="modelo">Elige una pregunta:</label>
             <select required  name="modelo" id="modelo" class="select">
              <option value="">...</option>
                <option value="banda favorita">Nombre de tu banda favorita</option>
                <option value="lugar nacimiento">¿En qué ciudad nacio tu madre?</option>
                <option value="actor favorito">Nombre de tu actor favorito</option>
            </select>

          <input type="password" data-patron="^[a-zA-Z]{3,12}$" name="respuesta" id="respuesta4" maxlength="20">
            <p class="ayuda esconder">Responde la pregunta</p>
        </div>

      </div>
                <div class="bottom">
          <a href="<?php echo constant('URL')?>imagen">Guardar</a>

          <a href="<?php echo constant('URL')?>usuarios" >Volver</a>
        </div>
         
      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/validarselec.js"></script>
</body>
</html>
