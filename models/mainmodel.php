<?php
  require 'libs/classes/partes.class.php';
  require 'libs/classes/partesequipos.class.php';

  require 'source/partes/CRUD.php';
  require 'source/partesequipos/CRUD.php';

        
  

  class MainModel extends Model {
  	public $partes;
  	public $partesequipos;

    function __construct() {
        parent::__construct();

        $this->partes = new partesCRUD();
        $this->partesequipos = new partesequiposCRUD();
    }

  }

?>