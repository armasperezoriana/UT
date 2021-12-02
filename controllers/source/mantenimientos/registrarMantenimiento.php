<?php 
  
  if(isset($_POST['agregar'])){
      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $taller = ($_POST['taller'] !== "") ? $_POST['taller'] : NULL;
      $costo  = ($_POST['costo'] !== "") ? $_POST['costo'] : NULL;
      $fecha     = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;

      $tipo           = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
      $array                = explode(",", $tipo);
      $nombre_tipo           = $array[0];
      $tiempo               = $array[1];

      if ($this->model->mantenimientos->insert(['placa'=>$placa, 'taller'=>$taller, 'costo'=>$costo, 'fecha'=>$fecha, 'nombre_tipo'=>$nombre_tipo, 'tiempo'=>$tiempo])){
        $this->view->mensaje = '¡Mantenimiento agregado exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->mantenimientos->getError();
      }
       $this->view->render('mantenimientos/mensaje');
    }else{
      $this->view->mensaje = 'Rellene los campos';

      $vehiculos = $this->model->mantenimientos->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      $tipos = $this->model->mantenimientos->getTipos();
      $this->view->tipos = $tipos;
      $talleres = $this->model->mantenimientos->getTalleres();
      $this->view->talleres = $talleres;
      $this->view->render('mantenimientos/agregar');
    }



?>