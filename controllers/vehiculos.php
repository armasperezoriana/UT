<?php 
 require 'libs/classes/roles.class.php'; 
class Vehiculos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
   $modulo = "vehiculos";
    if ($this->model->vehiculos->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla los vehiculos';
    $vehiculos = $this->model->vehiculos->get();
    $this->view->vehiculos = $vehiculos;
    
    $this->view->render('vehiculos/index');
    }else{
      $this->view->render('errores/bloquear');
    }
 
  }

  public function load ($metodo, $param = null) {
    $modulo = "vehiculos";
    if ($this->model->vehiculos->verificar($modulo)) {

    $ruta = 'source/vehiculos/'.$metodo.'.php';

    require_once $ruta;
     }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>
