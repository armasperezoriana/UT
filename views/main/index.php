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
             <center><h2>Bienvenido al sistema UT</h2></center>
         </div>

  
  <div class="container">

     <div class="main">
    <div class="slides">
      <img src="<?php echo constant('URL')?>public/img/slider/imagen1.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/imagen2.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/imagen3.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/imagen4.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/imagen5.jpg" alt=""> 
      <img src="<?php echo constant('URL')?>public/img/slider/imagen6.jpg" alt="">
    </div>
  </div>
    <main>
       
        <div class="tablaAlerta" id="form">
          <table>
            <tr>
            <th colspan="3">Alertas del sistema</th>
            </tr>
            <tr> <th>Vehiculo</th><th>Chofer</th><th>Mantenimiento</th>
              <tr>
                <td>AS1-123</td>
                <td>Rafael Dominguez</td>
                <td>Cambio de aceite</td>
              </tr>
               <tr>
                <td>VAS-123</td>
                <td>Carlos Mesa</td>
                <td>Cambio de bateria</td>
              </tr>
               <tr>
                <td>ATE-123</td>
                <td>Miguel Mendi</td>
                <td>Cambio de caucho</td>
              </tr>
               <tr>
                <td>ASF-124</td>
                <td>Santiago Solari</td>
                <td>Cambio de volante</td>
              </tr>
              <tr>
                <td>ASF-124</td>
                <td>Santiago Solari</td>
                <td>Cambio de volante</td>
              </tr>
              <tr>
                <td>ASF-124</td>
                <td>Santiago Solari</td>
                <td>Cambio de volante</td>
              </tr>
          </table>
      </div>
     


      </div>
    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.js"></script>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.slides.js"></script>
    <script>
 
  $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
 
  </script>
</body>
</html>
