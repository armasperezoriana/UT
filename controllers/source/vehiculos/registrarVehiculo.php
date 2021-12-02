<?php 
  
  if(isset($_POST['agregar'])){
      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $modelo = ($_POST['modelo'] !== "") ? $_POST['modelo'] : NULL;
      $funcionamiento = ($_POST['funcionamiento'] !== "") ? $_POST['funcionamiento'] : NULL;
    
      if ($this->model->vehiculos->insert(
        ['placa'=>$placa, 
        'modelo'=>$modelo, 
        'funcionamiento'=>$funcionamiento])){

        $this->view->mensaje = '¡Vehiculo agregado exitosamente!';
      }else{
        $this->view->mensaje = $this->model->vehiculos->getError();
        //$this->view->error = '¡Ha ocurrido un error!';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('vehiculos/agregar');

?>