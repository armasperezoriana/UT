<?php 
require 'libs/classes/roles.class.php'; 
class Imagen extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $modulo = "imagen";
    if ($this->model->imagen->verificar($modulo)) {

    $this->view->mensaje = 'Elige una imagen de seguridad';

    
    $imagen = $this->model->imagen->get();
    $this->view->imagen = $imagen;

    $this->view->render('imagen/index');
    }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
    $modulo = "imagen";
    if ($this->model->imagen->verificar($modulo)) {
    $ruta = 'source/imagen/'.$metodo.'.php';

    require_once $ruta;
    }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>