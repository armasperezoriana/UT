<?php
 
  class reportesCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

      function verificar($modulo){
           $items = [];
          

      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_reportes = ($row['permiso_reportes']);
        }
          
        if ($permiso_reportes == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }

   
  }

?>
