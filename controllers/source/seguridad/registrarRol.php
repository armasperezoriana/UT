<?php 
  
  if(isset($_POST['agregar'])){
      
      $nombre_rol = ($_POST['nombre_rol'] !== "") ? $_POST['nombre_rol'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $permiso_usuario = ($_POST['permiso_usuario'] !== "") ? $_POST['permiso_usuario'] : NULL;
      $permisos_vehiculos = ($_POST['permisos_vehiculos'] !== "") ? $_POST['permisos_vehiculos'] : NULL;
      $permiso_choferes = ($_POST['permiso_choferes'] !== "") ? $_POST['permiso_choferes'] : NULL;
      $permiso_rutas = ($_POST['permiso_rutas'] !== "") ? $_POST['permiso_rutas'] : NULL;
      $permiso_taller = ($_POST['permiso_taller'] !== "") ? $_POST['permiso_taller'] : NULL;
      $permiso_mantenimiento = ($_POST['permiso_mantenimiento'] !== "") ? $_POST['permiso_mantenimiento'] : NULL;
      $permiso_bitacora = ($_POST['permiso_bitacora'] !== "") ? $_POST['permiso_bitacora'] : NULL;
      $permiso_seguridad = ($_POST['permiso_seguridad'] !== "") ? $_POST['permiso_seguridad'] : NULL;
      $permiso_reportes = ($_POST['permiso_reportes'] !== "") ? $_POST['permiso_reportes'] : NULL;
      $status = 0;

      if ($this->model->seguridad->insert([
        'nombre_rol'=>$nombre_rol, 
        'descripcion'=>$descripcion, 
        'permiso_usuario'=>$permiso_usuario, 
        'permisos_vehiculos'=>$permisos_vehiculos, 
        'permiso_choferes'=>$permiso_choferes, 
        'permiso_rutas'=>$permiso_rutas, 
        'permiso_taller'=>$permiso_taller, 
        'permiso_mantenimiento'=>$permiso_mantenimiento, 
        'permiso_bitacora'=>$permiso_bitacora, 
        'permiso_seguridad'=>$permiso_seguridad, 
        'permiso_reportes'=>$permiso_reportes,
        'status'=>$status])){

        $this->view->mensaje = '¡Rol agregado exitosamente!';
      }else{
        $this->view->mensaje = $this->model->seguridad->getError();
        //$this->view->error = $this->model->seguridad->getError();
      }
      $this->view->render('seguridad/mensaje');
    }else{
      $this->view->mensaje = 'Rellene los campos';
      
      $this->view->render('seguridad/agregar');
    }


?>