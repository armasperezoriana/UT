<?php
 require 'libs/classes/roles.class.php';
 require 'source/seguridad/CRUD.php';
 

  class SeguridadModel extends Model {

    public $seguridad;

    function __construct() {
        parent::__construct();
        $this->seguridad = new seguridadCRUD();

    }

  }

?>