<?php 
require 'libs/classes/roles.class.php'; 
class Tipos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $modulo = "mantenimientos";
    if ($this->model->tipos->verificar($modulo)) {
      $this->view->mensaje = 'Esta pagina controla los tipos mantenimientos';
    
    $tipos = $this->model->tipos->get();
    $this->view->tipos = $tipos;
    
    $this->view->render('tipos/index');
    }else{
      $this->view->render('errores/bloquear');
    }


  }

  public function load ($metodo, $param = null) {
      $modulo = "mantenimientos";
    if ($this->model->tipos->verificar($modulo)) {

    $ruta = 'source/tipos/'.$metodo.'.php';

    require_once $ruta;
      }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>
