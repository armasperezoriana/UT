<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Vehiculos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
         <div class="text-header">
            <h2>Actualizar vehiculo</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>vehiculos/modificarVehiculo" method="POST" class="form">
        <div class="form__box ">
         <div>
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" value="<?php echo $this->vehiculos->getPlaca();?>" readonly data-patron="[A-Z]{3}[0-9]{3}" pattern="[A-Z]{3}[0-9]{3}" title="El formato debe coincidir con 3 letras mayúsculas y 3 números."/ >

         </div>
        <div>
            <label for="modelo">Modelo:</label>
             <select name="modelo" id="modelo" class="select">
                <option value="Otro">Otro</option>
                <option value="Encava">Encava</option>
                <option value="BEDFORD">BEDFORD</option>
                <option value="Caio">Caio</option>
                <option value="Dodge">Dodge</option>
                <option value="Envasa">Envasa</option>
                <option value="Kia">Kia</option>
                <option value="Iveco">Iveco</option>
                <option value="Yutong">Yutong</option>
            </select>

         </div>
         <div>
            <label for="funcionamiento">Funcionamiento:</label>
             <select name="funcionamiento" id="funcionamiento" class="select">
                <option value="">...</option>
                <option value="Operativo">Operativo</option>
                <option value="Inoperante">Inoperante</option>
            </select>

         </div>
         <script>
       document.addEventListener("DOMContentLoaded", function() {
      document.getElementById("formulario").addEventListener('submit', validarFormulario);
    });

    function validarFormulario(evento) {
     var select = document.getElementById("funcionamiento").selectedIndex;
      else if(select == null || select == 0){
        alert("Debe seleccionar si la unidad esta operativa o no");
    return false;
  }
  return true
}
         </script>
     
          
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificar" value="modificar">Modificar Vehiculo</button>
          <a href="<?php echo constant('URL')?>vehiculos">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>
     <script src="<?php echo constant('URL')?>public/js/vehiculos/validarvehiculo.js"></script>

</body>
</html>