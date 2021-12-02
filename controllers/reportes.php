<?php  
require 'libs/classes/roles.class.php'; 
  class Reportes extends Controller{
  	public function __construct(){
		parent::__construct();
		$this->view->modelos=[];
		$this->view->partes=[];
	}


	public function render(){
    $modulo = "reportes";
    if ($this->model->reportes->verificar($modulo)) {
	  $this->view->render('reportes/index');
	   }else{
      $this->view->render('errores/bloquear');
    }
	}

	public function load ($metodo, $param = null) {
    $modulo = "reportes";
    if ($this->model->reportes->verificar($modulo)) {
		$ruta = 'source/reportes/'.$metodo.'.php';
	
		require_once $ruta;
		 }else{
      $this->view->render('errores/bloquear');
    }
	  }
}
?>