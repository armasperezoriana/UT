<?php 

class Mantenimientos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla las mantenimientos';
    
    $mantenimientos = $this->model->mantenimientos->get();
    $this->view->mantenimientos = $mantenimientos;
    
    $this->view->render('mantenimientos/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

}

?>