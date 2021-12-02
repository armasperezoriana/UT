<?php 
	
	if(isset($_POST['modificarRol'])) {
      $id_rol    = ($_POST['id_rol'] !== "") ? $_POST['id_rol'] : NULL;
      $nombre_rol    = ($_POST['nombre_rol'] !== "") ? $_POST['nombre_rol'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
    

      if ($this->model->seguridad->update([
        'id_rol'=>$id_rol, 
        'nombre_rol'=>$nombre_rol, 
        'descripcion'=>$descripcion])){
        $this->view->mensaje = '¡Rol Modificado exitosamente!';

      }else{
    
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('seguridad/mensaje');

    } else {
      
      $roles = $this->model->seguridad->get($param[0]);
      if (isset($roles)){

        $this->view->roles = $roles[0];

        $this->view->render('seguridad/actualizar'); 
      } else {
        $this->view->mensaje = 'Rol no encontrado';
        $this->view->render('seguridad/mensaje');
      }
    }

?>