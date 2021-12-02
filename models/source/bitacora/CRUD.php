<?php

  class bitacoraCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }


    public function consultarBitacora(){

      $tabla ="SELECT * FROM bitacora";

      $respuestaArreglo ='';
      try{

        $datos = $this->conexion->prepare($tabla);
        $datos->execute();
        $datos->setFetchMode(PDO::FETCH_ASSOC);
        $respuestaArreglo = $datos->fetchAll(PDO::FETCH_ASSOC);
        return $respuestaArreglo;
      }catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
  }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO bitacora (usuario, cedula, operacion,host, fecha, hora, tabla) VALUES (:usuario,:cedula,:operacion,:host,:fecha, :hora, : tabla)');
            
          $query->execute(['usuario'=>$data['usuario'], 'cedula'=>$data['cedula'], 'operacion'=>$data['operacion'], 'host'=>$data['host'], 'fecha'=>$data['fecha'],'hora'=>$data['hora'], 'tabla'=>$data['tabla']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }
    function verificar($modulo){
    $items = [];
          
      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_bitacora = ($row['permiso_bitacora']);
        }
          
        if ($permiso_bitacora == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }

    function get ( $id_bitacora = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM bitacora WHERE id_bitacora = :id_bitacora');

          $query->execute(['id_bitacora'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM bitacora');

        }

        while($row = $query->fetch()){
          $item = new BitacoraClass();

          $item->setIdBitacora($row['id_bitacora']);
          $item->setHost($row['host']);
          $item->setUsuario($row['usuario']);  
          $item->setCedula($row['cedula']);
          $item->setHost($row['host']);
          $item->setFecha($row['fecha']);
          $item->setHora($row['hora']);
          $item->setTabla($row['tabla']);
          $item->setOperacion($row['operacion']);
        
        
        

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id_bitacora) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM bitacora WHERE id_bitacora = :id_bitacora');
        $query->execute(['id_bitacora'=>$id_bitacora]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        return false;
      }

    }

    function registroSalida ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE bitacora SET  hora = :hora WHERE id_bitacora = :id_bitacora');

             $query->execute(['usuario'=>$data['usuario'], 'cedula'=>$data['cedula'], 'operacion'=>$data['operacion'], 'host'=>$data['host'], 'fecha'=>$data['fecha'],'hora'=>$data['hora'], 'tabla'=>$data['tabla']]);
             
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
