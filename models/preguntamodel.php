<?php
 require 'libs/classes/bitacora.class.php';
  require 'libs/classes/usuarios.class.php';
  require 'source/bitacora/CRUD.php';

  class PreguntaModel extends Model {

    public $pregunta;
  
    function __construct() {
        parent::__construct();
        $this->pregunta = new bitacoraCRUD();
  
    }



      
 }



?>