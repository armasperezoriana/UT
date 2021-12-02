<?php

  class panelCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO rol (cedula, usuario, permiso, rol) VALUES(:cedula, :usuario, :permiso, :rol)');
        $query->execute(['cedula'=>$data['cedula'], 'usuario'=>$data['usuario'],  'rol'=>$data['rol'], 'permiso'=>$data['permiso']]);
        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id_mantenimiento) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM rol WHERE id = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM rol');

        }

        while($row = $query->fetch()){
          $item = new MantenimientosClass();

          $item->setId($row['id']);
          $item->setUsuario($row['usuario']);
           $item->setCedula($row['cedula']);
          $item->setPermiso($row['permiso']);
          $item->setRol($row['rol']);
   

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
  }
?>
