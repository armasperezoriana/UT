<?php 

class Usuarios extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {

    $modulo = "usuarios";
    if ($this->model->usuarios->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla los usuarios';
    
    $usuarios = $this->model->usuarios->get();
    $this->view->usuarios = $usuarios;

    $roles = $this->model->usuarios->getRoles();
    $this->view->roles = $roles;
    
    $this->view->render('usuarios/index');

    }else{
      $this->view->render('errores/bloquear');
    }
  }

  
  public function load ($metodo, $param = null) {
    $modulo = "usuarios";
    if ($this->model->usuarios->verificar($modulo)) {
    $ruta = 'source/usuarios/'.$metodo.'.php';

    require_once $ruta;
    
    }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>

 
