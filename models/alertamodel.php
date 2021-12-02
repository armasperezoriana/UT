<?php
  require 'libs/classes/mantenimientos.class.php';
  require 'source/alerta/CRUD.php';

  class AlertaModel extends Model {

    public $alerta;

    function __construct() {
        parent::__construct();
        $this->alerta = new alertaCRUD();
    }

  }

?>