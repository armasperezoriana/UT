<?php 
require 'libs/classes/roles.class.php'; 
class Rutas extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
      $modulo = "rutas";
    if ($this->model->rutas->verificar($modulo)) {
    $this->view->mensaje = 'Esta pagina controla las rutas';
    $rutas = $this->model->rutas->get();
    $this->view->rutas = $rutas;
    $this->view->render('rutas/index');
       }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
      $modulo = "rutas";
    if ($this->model->rutas->verificar($modulo)) {

    $ruta = 'source/rutas/'.$metodo.'.php';

    require_once $ruta;
       }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>

 
