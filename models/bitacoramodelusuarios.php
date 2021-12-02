<?php
  require 'libs/classes/bitacorausuario.class.php';
  require 'libs/classes/usuarios.class.php';
  require 'source/bitacora/CRUDusuarios.php';

  class BitacoraModel extends Model {

    public $bitacoraUs;
  
    function __construct() {
        parent::__construct();
        $this->bitacoraUs = new bitacoraCRUDusuarios();
  
    }



      
 }



?>