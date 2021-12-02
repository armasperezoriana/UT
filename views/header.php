
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title></title>
</head>
<body>
 <header class="header">
    <div class="wrapper">
     
        <table class="icono_usuario">
          <tr>
            <td><div class="logo"></div> </td>
            <td><h3><p style="color: white;"><?php echo $this->nombre.' '. $this->apellido.' - '. $this->rol; ?></p></h3></td>
          </tr>
        </table>       
   
        <nav>

          <?php if($GLOBALS["notificacion"] == 'on') {?>
             <a href="<?php echo constant('URL')?>alerta"><img class="notificaciones" src="<?php echo constant('URL')?>public/img/notificacionesOn.png?>"></a>
        
        <?php }else{ ?>
           <a href="<?php echo constant('URL')?>alerta"><img class="notificaciones" src="<?php echo constant('URL')?>public/img/notificaciones.png?>"></a>
        <?php } ?>
          <a href="Manual.pdf" target="blank" title="Manual del sistema">Manual</a>
          <a href="<?php echo constant('URL')?>main">Inicio</a>    

        </nav>
    </div>
       <?php require 'menu.php'; ?>
  </header>
</body>
</html>
