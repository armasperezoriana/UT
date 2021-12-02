<?php 
require 'libs/classes/roles.class.php'; 
class Bitacora extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $modulo = "bitacora";
    if ($this->model->bitacora->verificar($modulo)) {

    $this->view->mensaje = 'Bitacora del sistema';

    
    $bitacora = $this->model->bitacora->get();
    $this->view->bitacora = $bitacora;

    $this->view->render('bitacora/index');
    }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
    $modulo = "bitacora";
    if ($this->model->bitacora->verificar($modulo)) {
    $ruta = 'source/bitacora/'.$metodo.'.php';

    require_once $ruta;
    }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>