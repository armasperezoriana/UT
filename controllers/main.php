
<?php 
 require 'libs/classes/roles.class.php'; 
  class Main extends Controller{

    function __construct () {
      parent::__construct();
    
    }

    function render() {

    $this->view->mensaje = 'Esta pagina control el inicio';
 
    $this->view->render('main/index');

    }





    public function load ($metodo, $param = null) {

		$ruta = 'source/main/'.$metodo.'.php';

		require_once $ruta;
	}

  }

?>