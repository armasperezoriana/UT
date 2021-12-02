<?php 
$notificacion = '';
date_default_timezone_set("America/Merida");
require 'libs/classes/roles.class.php'; 
class Alerta extends Controller{

  function __construct () {
    parent::__construct();

  }

  function render () {
   
    $this->view->mensaje = 'Esta pagina controla las alertas';
   $this->alerta();
    $this->view->render('alerta/index');
  }

  function alerta(){
  	$items = $this->model->alerta->getAlerta();

    if ($items == false) {
      $GLOBALS["notificacion"] = 'off';
    }else{
     $GLOBALS["notificacion"] = 'on';
    }
    $this->view->items = $items;
  }


}


?>
 