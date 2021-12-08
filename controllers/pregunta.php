<?php 
require 'libs/classes/roles.class.php'; 
class Pregunta extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $modulo = "pregunta";
    if ($this->model->pregunta->verificar($modulo)) {

    $this->view->mensaje = 'Seguridad de Usuarios';

    
    $pregunta = $this->model->pregunta->get();
    $this->view->pregunta = $pregunta;

    $this->view->render('pregunta/index');
    }else{
      $this->view->render('errores/bloquear');
    }

  }

  public function load ($metodo, $param = null) {
    $modulo = "pregunta";
    if ($this->model->pregunta->verificar($modulo)) {
    $ruta = 'source/pregunta/'.$metodo.'.php';

    require_once $ruta;
    }else{
      $this->view->render('errores/bloquear');
    }
  }

}

?>