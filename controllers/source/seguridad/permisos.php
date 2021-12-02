<?php 
	
	if(isset($_POST['actualizar'])) {
      $id_rol    = ($_POST['id_rol'] !== "") ? $_POST['id_rol'] : NULL;
      $permiso_usuario = ($_POST['permiso_usuario'] !== "") ? $_POST['permiso_usuario'] : NULL;
      $permisos_vehiculos = ($_POST['permisos_vehiculos'] !== "") ? $_POST['permisos_vehiculos'] : NULL;
      $permiso_choferes = ($_POST['permiso_choferes'] !== "") ? $_POST['permiso_choferes'] : NULL;
      $permiso_rutas = ($_POST['permiso_rutas'] !== "") ? $_POST['permiso_rutas'] : NULL;
      $permiso_taller = ($_POST['permiso_taller'] !== "") ? $_POST['permiso_taller'] : NULL;
      $permiso_mantenimiento = ($_POST['permiso_mantenimiento'] !== "") ? $_POST['permiso_mantenimiento'] : NULL;
      $permiso_bitacora = ($_POST['permiso_bitacora'] !== "") ? $_POST['permiso_bitacora'] : NULL;
      $permiso_seguridad = ($_POST['permiso_seguridad'] !== "") ? $_POST['permiso_seguridad'] : NULL;
      $permiso_reportes = ($_POST['permiso_reportes'] !== "") ? $_POST['permiso_reportes'] : NULL;
    

      if ($this->model->seguridad->permisos([
        'id_rol'=>$id_rol, 
        'permiso_usuario'=>$permiso_usuario,
        'permisos_vehiculos'=>$permisos_vehiculos, 
        'permiso_choferes'=>$permiso_choferes, 
        'permiso_rutas'=>$permiso_rutas, 
        'permiso_taller'=>$permiso_taller, 
        'permiso_mantenimiento'=>$permiso_mantenimiento, 
        'permiso_bitacora'=>$permiso_bitacora, 
        'permiso_seguridad'=>$permiso_seguridad, 
        'permiso_reportes'=>$permiso_reportes])){
        $this->view->mensaje = '¡Permisos modificado exitosamente!';

      }else{
    
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('seguridad/mensaje');

    } else {
      
      $roles = $this->model->seguridad->get($param[0]);
      if (isset($roles)){

        $this->view->roles = $roles[0];

        $this->view->render('seguridad/permisos'); 
      } else {
        $this->view->mensaje = 'Rol no encontrado';
        $this->view->render('seguridad/mensaje');
      }
    }

?>