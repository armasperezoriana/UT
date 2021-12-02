<?php 
require 'libs/classes/roles.class.php'; 
class Mantenimientos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
       $modulo = "mantenimientos";
    if ($this->model->mantenimientos->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla los mantenimientos';
    $mantenimientos = $this->model->mantenimientos->get();
    $this->view->mantenimientos = $mantenimientos;
    $this->view->render('mantenimientos/index');
      }else{
      $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {
    $modulo = "mantenimientos";
    if ($this->model->mantenimientos->verificar($modulo)) {
    $ruta = 'source/mantenimientos/'.$metodo.'.php';
    $ruta  == "source/mantenimientos/index.php";
    require_once $ruta;
      }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>
