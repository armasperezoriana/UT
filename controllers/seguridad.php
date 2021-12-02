<?php 


class Seguridad extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
       $modulo = "seguridad";
    if ($this->model->seguridad->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla la seguridad ';
    $roles = $this->model->seguridad->get();
    $this->view->roles = $roles;
    $this->view->render('seguridad/index');
     }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
   $modulo = "seguridad";
    if ($this->model->seguridad->verificar($modulo)) {
    $seguridad = 'source/seguridad/'.$metodo.'.php';

    require_once $seguridad;
     }else{
      $this->view->render('errores/bloquear');
    }

  }

}

?>

 
