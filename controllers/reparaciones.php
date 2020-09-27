<?php 

class Reparaciones extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla las reparaciones';
    
    $reparaciones = $this->model->reparaciones->get();
    $this->view->reparaciones = $reparaciones;
    
    $this->view->render('reparaciones/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/reparaciones/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>