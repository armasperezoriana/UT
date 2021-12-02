<?php 
	
	if(isset($_POST['modificarTaller'])) {

      $rif    = ($_POST['rif'] !== "") ? $_POST['rif'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $direccion = ($_POST['direccion'] !== "") ? $_POST['direccion'] : NULL;
      $informacion_contacto = ($_POST['informacion_contacto'] !== "") ? $_POST['informacion_contacto'] : NULL;

      if ($this->model->talleres->update(['rif'=>$rif, 'nombre'=>$nombre, 'direccion'=>$direccion, 'informacion_contacto'=>$informacion_contacto])){
        $this->view->mensaje = '¡Taller Modificado exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('talleres/mensaje');

    } else {
      
      $talleres = $this->model->talleres->get($param[0]);

      if (isset($talleres)){

        $this->view->talleres = $talleres[0];

        $this->view->render('talleres/actualizar'); 
      } else {
        $this->view->mensaje = 'Taller no encontrado';
        $this->view->render('talleres/mensaje');
      }
    }

?>