<?php 

class Tipos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla los tipos de mantenimiento';
    
    $tipos = $this->model->tipos->get();
    $this->view->tipos = $tipos;
    
    $this->view->render('mantenimientos/tipos');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/tipos/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>