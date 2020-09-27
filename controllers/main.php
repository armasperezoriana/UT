
<?php 

  class Main extends Controller{

    function __construct () {
      parent::__construct();
      
    }

    function render() {

      /*
      CODIGO PARA CALCULAR CUANTOS PUEDEN ENSAMBLAR
      $partesequipos = $this->model->partesequipos->get();

      foreach ($partesequipos as $parte) {
        $partenecesaria = $this->model->partes->get($parte->getCodPartes())[0];

        $partesRestantes = $partenecesaria->getStockActual() - $parte->getCantidadPartes();

        if ($partesRestantes < 0) {
          echo 'El equipo '. $parte->getCodEquipo(). ' no tiene stock disponible.';
        } else {

        }
      }

      */

      $partes = $this->model->partes->get();
      $this->view->mensajeAlerta = [];
      foreach ($partes as $parte) {
        if ($parte->getStockActual() <= $parte->getPuntoReorden()) {
          array_push($this->view->mensajeAlerta, 'La pieza '.$parte->getCodigo(). ' tiene bajo stock.');
        }
      }

      $this->view->render('main/index');
    }

    public function load ($metodo, $param = null) {

		$ruta = 'source/main/'.$metodo.'.php';

		require_once $ruta;
	}

  }

?>