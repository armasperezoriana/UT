<?php 
 require 'libs/classes/roles.class.php'; 
class Reparaciones extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
      $modulo = "mantenimientos";
    if ($this->model->reparaciones->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla las reparaciones';
    $reparaciones = $this->model->reparaciones->get();
    $this->view->reparaciones = $reparaciones;
    $this->view->render('reparaciones/index');
        }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
    $modulo = "mantenimientos";
    if ($this->model->reparaciones->verificar($modulo)) {

    $ruta = 'source/reparaciones/'.$metodo.'.php';

    require_once $ruta;
        }else{
      $this->view->render('errores/bloquear');
    }

  }

}

?>

 
