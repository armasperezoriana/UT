<?php 

class Bitacora extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {

    $this->view->mensaje = 'Bitacora';
    $this->view->render('bitacora/index');

    }else{
       $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/bitacora/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>