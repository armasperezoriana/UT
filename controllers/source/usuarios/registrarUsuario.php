<?php 
  
  if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $usuario = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $contrasena     = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL;
      if ($this->model->usuarios->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'contrasena'=>$contrasena, 'rol'=>$rol, 'cedula'=>$cedula, 'usuario'=>$usuario])){
        $this->view->mensaje = 'Módulo de seguridad de Usuarios';
      }else{
        $this->view->mensaje = $this->model->usuarios->getError();
      }

      $this->view->render('imagen/index');
    }else{
      $this->view->mensaje = 'Rellene los campos';
    
    $roles = $this->model->usuarios->getRoles();
    $this->view->roles = $roles;
    //$pregunta = $this->model->pregunta->getPregunta();
    //$this->view->pregunta = $pregunta;
    $this->view->render('usuarios/agregar');
  }

?>