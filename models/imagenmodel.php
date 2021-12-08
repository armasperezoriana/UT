<?php
 require 'libs/classes/bitacora.class.php';
  require 'libs/classes/usuarios.class.php';
  require 'source/bitacora/CRUD.php';

  class ImagenModel extends Model {

    public $imagen;
  
    function __construct() {
        parent::__construct();
        $this->imagen = new bitacoraCRUD();
  
    }



      
 }



?>