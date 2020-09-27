<?php

  class choferesCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO choferes (cedula, nombre, apellido, telefono, id_vehiculo) VALUES(:cedula, :nombre, :apellido, :telefono, :id_vehiculo)');

        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'], 'id_vehiculo'=>$data['id_vehiculo']]);

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

          $query = $this->db->connect()->prepare('SELECT * FROM choferes WHERE id_chofer = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM choferes');

        }

        while($row = $query->fetch()){
          $item = new ChoferesClass();

          $item->setId($row['id_usuario']);
          $item->setCedula($row['cedula']);
          $item->setNombre($row['nombre']);
          $item->setApellido($row['apellido']);
          $item->setTelefono($row['telefono']);
          $item->setIdUnidad($row['id_vehiculo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM usuarios WHERE id_usuario = :id');
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
        $query = $this->db->connect()->prepare('UPDATE choferes SET  nombre = :nombre, apellido = :apellido, telefono = :telefono, id_vehiculo = :id_vehiculo WHERE cedula = :cedula');
        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'], 'id_vehiculo'=>$data['id_vehiculo']]);

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
