<?php 

class Talleres extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla las talleres';
    
    $talleres = $this->model->talleres->get();
    $this->view->talleres = $talleres;
    
    $this->view->render('talleres/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/talleres/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>