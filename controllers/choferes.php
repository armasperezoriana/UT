<?php 
 require 'libs/classes/roles.class.php'; 
class Choferes extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $modulo = "choferes";
    if ($this->model->choferes->verificar($modulo)) {
      $this->view->mensaje = 'Esta pagina controla los choferes';
    
    $choferes = $this->model->choferes->get();
    $this->view->choferes = $choferes;
    
    $this->view->render('choferes/index');
       }else{
      $this->view->render('errores/bloquear');
    }


  }

  public function load ($metodo, $param = null) {


      $modulo = "choferes";
    if ($this->model->choferes->verificar($modulo)) {
    $ruta = 'source/choferes/'.$metodo.'.php';

    require_once $ruta;
    }else{
      $this->view->render('errores/bloquear');
    }

  
  }

}

?>

 
