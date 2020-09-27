<?php 

class Rutas extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla las rutas';
    
    $rutas = $this->model->rutas->get();
    $this->view->rutas = $rutas;
    
    $this->view->render('rutas/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/rutas/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>

 
