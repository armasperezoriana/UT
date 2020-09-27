<?php

  class talleresCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO taller (rif, nombre, direccion) VALUES(:rif, :nombre, :direccion)');

        $query->execute(['rif'=>$data['rif'], 'nombre'=>$data['nombre'],  'direccion'=>$data['direccion']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM taller WHERE id_taller = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM taller');

        }

        while($row = $query->fetch()){
          $item = new TalleresClass();

          $item->setId($row['id_taller']);
          $item->setRif($row['rif']);
          $item->setNombre($row['nombre']);
          $item->setDireccion($row['direccion']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM taller WHERE id_taller = :id');
        $query->execute(['id'=>$id]);

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
        $query = $this->db->connect()->prepare('UPDATE taller SET  nombre = :nombre, direccion = :direccion WHERE rif = :rif');
        $query->execute(['rif'=>$data['rif'], 'nombre'=>$data['nombre'],  'direccion'=>$data['direccion']]);

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
