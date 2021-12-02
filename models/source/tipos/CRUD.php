<?php
 
  class tiposCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{
        $query = $this->db->connect()->query('SELECT * FROM tipos');

        while($row = $query->fetch()){
          $item = new TiposCLass();

          if ($row['id_tipos'] >= $mayor) {
           $mayor = $row['id_tipos'];
          }  
        }
          $id = $mayor + 1;

        $query = $this->db->connect()->prepare('INSERT INTO tipos (id_tipos, nombre_tipo, descripcion, tiempo, status) VALUES(:id_tipos, :nombre_tipo, :descripcion, :tiempo, :status )');

        $query->execute(['id_tipos'=>$id, 'nombre_tipo'=>$data['nombre_tipo'], 'descripcion'=>$data['descripcion'],  'tiempo'=>$data['tiempo'], 'status'=>'0']);

        return true;
      } catch(PDOException $e){
        $this->error = "¡Error! Este tipo de mantenimiento ya existe";
        return false;
      }
    }
    
    function verificar($modulo){
    $items = [];
          
      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_mantenimiento = ($row['permiso_mantenimiento']);
        }
          
        if ($permiso_mantenimiento == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }

    function get ( $nombre_tipo = null) {
      $items = [];
      try {

        if ( isset($nombre_tipo) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM tipos WHERE nombre_tipo = :nombre_tipo');

          $query->execute(['nombre_tipo'=>$nombre_tipo]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM tipos WHERE status = 0');

        }

        while($row = $query->fetch()){
          $item = new TiposCLass();
          $item->setId($row['id_tipos']);
          $item->setNombre($row['nombre_tipo']);
          $item->setDescripcion($row['descripcion']);
          $item->setTiempo($row['tiempo']);

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

        $query = $this->db->connect()->prepare('UPDATE tipos  SET  status = :status WHERE id_tipos = :id');
       
        $query->execute(['id'=>$id ,'status'=>$status]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        return false;
      }

    }

    function update ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE tipos SET  descripcion = :descripcion, tiempo = :tiempo WHERE nombre_tipo = :nombre_tipo');
        $query->execute(['nombre_tipo'=>$data['nombre_tipo'], 'descripcion'=>$data['descripcion'],  'tiempo'=>$data['tiempo']]);

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
