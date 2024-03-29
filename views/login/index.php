<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UT | Iniciar sesion</title>
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/main.css">  
    <script src="<?php echo constant('URL')?>public/js/jquery.min.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <body> 
      
  <header class="header">
    <div class="wrapper">
      <div class="logo">
      </div>
        <nav>
          <a href="Manual.pdf" target="blank" title="Manual del sistema">Manual</a>
          <a href="<?php echo constant('URL')?>contacto">Contacto</a>

        </nav>
    </div>
  </header>

    <main> 
      
      <div class="login" >
       <?php
        if (isset($this->mensaje) ) {
          ?>
          <h2 id="mensaje"> <?php echo $this->mensaje; ?> </h2>
          <?php
        } ?>
        <form id="login" name="formulario" action="<?php echo constant('URL')?>login" class="login__form"method="POST">
          <div class="img_logo"></div>

          <input
            class="login_input" type="text" name="usuario" placeholder="Usuario" data-id="Campo de nombre de usuario" id="usuario "
          />
          <input class="login_input" type="password" name="contrasena" placeholder="********" data-id="Campo de Contraseña" id="contrasena"
          />
          <input type="hidden" name="token" id="token">
         <!-- <center> <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LeZAUYaAAAAAE834hm56IyNCBRmlWb8OgAtA3IX"></div><center> Con esto aparece el botón de captcha en el index en el cual el sitekey es un codigo especifico que da google para usar el api -->
          <br>
          <button type="submit" name="ingresar" class="boton" value="ingresar" id="submit">Iniciar Sesion</button>
          <p class="restaurar">
            <a href="<?php echo constant('URL')?>restaurar">¿Olvidaste la contraseña?</a>
          </p>

        </form>

      </div>
    </main>
   <script src="https://www.google.com/recaptcha/api.js?render=6Lenol0aAAAAAL58P1eQFRe6yfLmR8EEDBnXe4P_"></script>

    <script>
        
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lenol0aAAAAAL58P1eQFRe6yfLmR8EEDBnXe4P_', {action: 'homepage'})
                .then(function(token) {
                    // Add your logic to submit to your backend server here.
                    console.log(token);
                    $('#token').val(token);
                });
            });
    </script>

    <script src="<?php echo constant('URL')?>public/js/validacion/login.js"></script>
  </body>
</html>
