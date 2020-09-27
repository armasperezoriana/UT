<?php 
  
  if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $telefono = ($_POST['telefono'] !== "") ? $_POST['telefono'] : NULL;
      $id_vehiculo  = ($_POST['id_vehiculo'] !== "") ? $_POST['id_vehiculo'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

      if ($this->model->choferes->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'id_vehiculo'=>$id_vehiculo, 'cedula'=>$cedula, 'telefono'=>$telefono])){
        $this->view->mensaje = '¡Chofer agregado exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->choferes->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('choferes/agregar');

?>