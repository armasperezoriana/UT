<?php 
require 'libs/classes/roles.class.php'; 
class Talleres extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
     $modulo = "talleres";
    if ($this->model->talleres->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla las talleres';
    $talleres = $this->model->talleres->get();
    $this->view->talleres = $talleres;
    $this->view->render('talleres/index');
     }else{
      $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {
    $modulo = "talleres";
    if ($this->model->talleres->verificar($modulo)) {

    $ruta = 'source/talleres/'.$metodo.'.php';

    require_once $ruta;
     }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>