<?php 
	
	if(isset($_POST['modificarMantenimiento'])) {

      $id_mantenimiento    = ($_POST['id_mantenimiento'] !== "") ? $_POST['id_mantenimiento'] : NULL;
      $nombre              = ($_POST['taller'] !== "") ? $_POST['taller'] : NULL;
      $costo               = ($_POST['costo'] !== "") ? $_POST['costo'] : NULL;
      $fecha               = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;

      if ($this->model->mantenimientos->update(['id_mantenimiento'=>$id_mantenimiento, 'nombre'=>$nombre, 'costo'=>$costo, 'fecha'=>$fecha])){
        $this->view->mensaje = '¡Mantenimiento Modificado exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('mantenimientos/mensaje');

    } else {
      
      $mantenimientos = $this->model->mantenimientos->get($param[0]);

      $vehiculos = $this->model->mantenimientos->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      $tipos = $this->model->mantenimientos->getTipos();
      $this->view->tipos = $tipos;
      $talleres = $this->model->mantenimientos->getTalleres();
      $this->view->talleres = $talleres;

      if (isset($mantenimientos)){
         $this->view->mensaje = 'Actualizar mantenimientos';
        $this->view->mantenimientos = $mantenimientos[0];

        $this->view->render('mantenimientos/actualizar'); 
      } else {
       $this->view->mensaje = 'Actualizar mantenimientos';
        $this->view->mensaje = 'Mantenimiento no encontrado';
        $this->view->render('mantenimientos/mensaje');
      }
    }

?>