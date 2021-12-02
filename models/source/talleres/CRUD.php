<?php

  class talleresCRUD extends Model{

    public $error;
 
    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try {
        $cantidad = 0;
        $query = $this->db->connect()->prepare('SELECT * FROM taller WHERE rif = :rif');
        $query->execute(['rif'=>$data['rif']]);
        while($row = $query->fetch()){
          $cantidad = $cantidad +1;
        }
        if ($cantidad < 1) {
          $id= 0;
          $mayor = 0;
            try{
              $query = $this->db->connect()->query('SELECT * FROM taller');
              while($row = $query->fetch()){
                $item = new TalleresClass();
                if ($row['id_taller'] >= $mayor) {
                  $mayor = $row['id_taller'];
                }  
              }
              $id = $mayor + 1;
              $query = $this->db->connect()->prepare('INSERT INTO taller (id_taller, rif, nombre, direccion, informacion_contacto, status) VALUES(:id_taller, :rif, :nombre, :direccion,:informacion_contacto, :status)');

              $query->execute(['id_taller' => $id, 'rif'=>$data['rif'], 'nombre'=>$data['nombre'], 'direccion'=>$data['direccion'], 'informacion_contacto'=>$data['informacion_contacto'], 'status'=>'0']);
               return true;
            } catch(PDOException $e){
              $this->error = "¡Error! ya existe ese nombre";
            return false;
            }
        }else{
        $this->error = "¡Error! ya existe este rif";
        }
        
      } catch (Exception $e) {
        return false;
      }


    }

     function verificar($modulo){
           $items = [];
          

      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_taller = ($row['permiso_taller']);
        }
          
        if ($permiso_taller == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }


    function get ( $rif = null) {
      $items = [];
      try {

        if ( isset($rif) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM taller WHERE rif = :rif');

          $query->execute(['rif'=>$rif]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM taller WHERE status = 0');

        }

        while($row = $query->fetch()){
          $item = new TalleresClass();
          $item->setId($row['id_taller']);
          $item->setRif($row['rif']);
          $item->setNombre($row['nombre']);
          $item->setDireccion($row['direccion']);
          $item->setInformacion_c($row['informacion_contacto']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }


    function drop ($id) {
    $status = 1;
      try {

        $query = $this->db->connect()->prepare('UPDATE taller  SET  status = :status WHERE id_taller = :id');
       
        $query->execute(['id'=>$id ,'status'=>$status]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        echo($e);
        return false;
      }

    }

    function update ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE taller SET  nombre = :nombre, direccion = :direccion, informacion_contacto = :informacion_contacto WHERE rif = :rif');

        $query->execute(['rif'=>$data['rif'], 'nombre'=>$data['nombre'],  'direccion'=>$data['direccion'], 'informacion_contacto'=>$data['informacion_contacto']]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch (PDOException $e) {
        return false;
      }
    }

    public function getError () {
      return $this->error;
    }
  }

?>
