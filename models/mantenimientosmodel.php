<?php

  require 'libs/classes/mantenimientos.class.php';
  require 'source/mantenimientos/CRUD.php';

  class MantenimientosModel extends Model {

    public $mantenimientos;

    function __construct() {
        parent::__construct();
        $this->mantenimientos = new mantenimientosCRUD();
    }

  }

?>