<?php

  class seguridadCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{
        $query = $this->db->connect()->query('SELECT * FROM roles');
        while($row = $query->fetch()){
          $item = new RolesClass();
          if ($row['id_rol'] >= $mayor) {
            $mayor = $row['id_rol'];
          }  
        }
        $id = $mayor + 1;
        $query = $this->db->connect()->prepare('INSERT INTO roles (
          id_rol,
          nombre_rol, 
          descripcion, 
          permiso_usuario, 
          permisos_vehiculos,
          permiso_choferes,
          permiso_rutas,
          permiso_taller,
          permiso_mantenimiento,
          permiso_bitacora,
          permiso_seguridad,
          permiso_reportes,
          status) 
          VALUES(
          :id_rol,
          :nombre_rol, 
          :descripcion, 
          :permiso_usuario, 
          :permisos_vehiculos, 
          :permiso_choferes, 
          :permiso_rutas,
          :permiso_taller, 
          :permiso_mantenimiento, 
          :permiso_bitacora,
          :permiso_seguridad, 
          :permiso_reportes,
          :status)');

        $query->execute([
          'nombre_rol'=>$data['nombre_rol'],  
          'descripcion'=>$data['descripcion'], 
          'permiso_usuario'=>$data['permiso_usuario'], 
          'permisos_vehiculos'=>$data['permisos_vehiculos'],  
          'permiso_choferes'=>$data['permiso_choferes'], 
          'permiso_rutas'=>$data['permiso_rutas'], 
          'permiso_taller'=>$data['permiso_taller'], 
          'permiso_mantenimiento'=>$data['permiso_mantenimiento'],  
          'permiso_bitacora'=>$data['permiso_bitacora'], 
          'permiso_seguridad'=>$data['permiso_seguridad'],
          'permiso_reportes'=>$data['permiso_reportes'],
          'status'=>$data['status'],
          'id_rol'=>$id]);

        return true;
      } catch(PDOException $e){
        $this->error = "¡Error! Ya existe este rol";
        return false;
      }
    }
   function verificar($modulo){
    $items = [];
          
      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_seguridad = ($row['permiso_seguridad']);
        }
          
        if ($permiso_seguridad == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }
    function get ( $id_rol = null) {
      $items = [];
      try {

        if ( isset($id_rol) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE id_rol = :id_rol');

          $query->execute(['id_rol'=>$id_rol]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM roles WHERE status = 0');

        }

        while($row = $query->fetch()){
          $item = new RolesClass();
          $item->setId($row['id_rol']);
          $item->setNombre_rol($row['nombre_rol']);
          $item->setDescripcion($row['descripcion']);
          $item->setPermiso_usuario($row['permiso_usuario']);
          $item->setPermisos_vehiculos($row['permisos_vehiculos']);
          $item->setPermiso_choferes($row['permiso_choferes']);
          $item->setPermiso_rutas($row['permiso_rutas']);
          $item->setPermiso_taller($row['permiso_taller']);
          $item->setPermiso_mantenimiento($row['permiso_mantenimiento']);
          $item->setPermiso_bitacora($row['permiso_bitacora']);
          $item->setPermiso_seguridad($row['permiso_seguridad']);
          $item->setPermiso_reportes($row['permiso_reportes']);
          $item->setStatus($row['status']);

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

        $query = $this->db->connect()->prepare('UPDATE roles  SET  status = :status WHERE id_rol = :id');
       
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
        $query = $this->db->connect()->prepare('UPDATE roles SET nombre_rol = :nombre_rol, descripcion = :descripcion  WHERE id_rol = :id_rol');

        $query->execute (['id_rol'=>$data['id_rol'],  'nombre_rol'=>$data['nombre_rol'], 'descripcion'=>$data['descripcion']]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch (PDOException $e) {
        echo $e;
        return false;
      }
    }
   function permisos ($data) {

      try {
        $query = $this->db->connect()->prepare('UPDATE roles SET 
          permiso_usuario = :permiso_usuario, 
          permisos_vehiculos = :permisos_vehiculos,  
          permiso_choferes = :permiso_choferes, 
          permiso_rutas = :permiso_rutas, 
          permiso_taller = :permiso_taller, 
          permiso_mantenimiento = :permiso_mantenimiento, 
          permiso_bitacora = :permiso_bitacora, 
          permiso_seguridad = :permiso_seguridad, 
          permiso_reportes = :permiso_reportes 
          WHERE id_rol = :id_rol');

        $query->execute ([
          'id_rol'=>$data['id_rol'],  
          'permiso_usuario'=>$data['permiso_usuario'], 
          'permisos_vehiculos'=>$data['permisos_vehiculos'],
          'permiso_choferes'=>$data['permiso_choferes'],  
          'permiso_rutas'=>$data['permiso_rutas'], 
          'permiso_taller'=>$data['permiso_taller'],
          'permiso_mantenimiento'=>$data['permiso_mantenimiento'],  
          'permiso_bitacora'=>$data['permiso_bitacora'], 
          'permiso_seguridad'=>$data['permiso_seguridad'],
          'permiso_reportes'=>$data['permiso_reportes']]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch (PDOException $e) {
        echo $e;
        return false;
      }
    }

    public function getError () {
      return $this->error;
    }
  }

?>
