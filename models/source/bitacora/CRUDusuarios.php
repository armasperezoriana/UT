<?php

  class bitacoraCRUDusuarios extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }


    public function consultarBitacora(){

      $tabla ="SELECT * FROM bitacora_respaldo_usuario";

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
        $query = $this->db->connect()->prepare('INSERT INTO bitacora_respaldo_usuario ( nombre, apellido,cedula, contrasena,fecha,hora,host,id_usuarioB,usuario, rol, operacion, tabla, usuario_n,nombre_n, apellido_n,cedula_n, contrasena_n, usuario_n, rol_n) VALUES(:nombre,:apellido, :cedula, :contrasena,:fecha,:hora,:host,:id_usuarioB,: :usuario,:rol, :operacion, :tabla,:nombre_n, :apellido_n,:cedula_n,:contrasena_n,:usuario_n,:rol_n)');

        $query->execute(['nombre'=>$data['nombre'],'apellido'=>$data['apellido'],'cedula'=>$data['cedula'], 'contrasena'=>$data['contrasena'],'fecha'=>$data['fecha'], 'hora'=>$data['hora'],  'host'=>$data['host'], 'id_usuarioB'=>$data['id_usuarioB'], 'usuario'=>$data['usuario']['rol'=>$data['rol'], 'operacion'=>$data['operacion'], 'tabla'=>$data['tabla'], 'nombre_n'=>$data['nombre_n'],'apellido_n'=>$data['apellido_n'],'cedula_n'=>$data['cedula_n'],'contrasena_n'=>$data['contrasena_n'],'usuario_n'=>$data['usuario_n'],'rol_n'=>$data['rol_n']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ($id_usuarioB = null) {
      $items = [];
      try {

        if ( isset($id_usuarioB) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM bitacora_respaldo_usuario WHERE id_usuarioB = :id_usuarioB');

          $query->execute(['id_usuarioB'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM bitacora_respaldo_usuario');

        }

        while($row = $query->fetch()){
          $item = new BitacoraClassUsuarios();

          $item->setIdUsuariosB($row['id_usuariosB']);
           $item->setNombre($row['nombre']);
           $item->setNombre_n($row['nombre_n']);
           $item->setApellido($row['apellido']);
           $item->setApellido_n($row['apellido_n']);
          $item->setCedula($row['cedula']);
          $item->setCedula_n($row['cedula_n']);
          $item->setContrasena($row['contrasena']);
          $item->setContrasena_n($row['contrasena_n']);
          $item->setHost($row['host']);
          $item->setHost($row['rol']);
          $item->setUsuario_n($row['usuario_n']);
          $item->setUsuario($row['usuario']);   
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

    function drop (id_usuarioB)

    ($id_usuarioB){

      try {

        $query = $this->db->connect()->prepare('DELETE FROM bitacora_respaldo_usuario WHERE id_usuarioB= :id_usuarioB');
        $query->execute(['id_usuarioB'=>$id_usuarioB]);

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
        $query = $this->db->connect()->prepare('UPDATE bitacora_respaldo_usuario SET  hora = :hora WHERE id_usuarioB= :id_usuarioB');

             $query->execute(['nombre'=>$data['nombre'],['apellido'=>$data['apellido'],['cedula'=>$data['cedula'], ['contrasena'=>$data['contrasena'],'fecha'=>$data['fecha'], 'hora'=>$data['hora'],  'host'=>$data['host'], 'id_usuarioB'=>$data['id_usuarioB'], 'usuario'=>$data['usuario']['rol'=>$data['rol'], 'operacion'=>$data['operacion'], 'tabla'=>$data['tabla'], ['nombre_n'=>$data['nombre_n'],['apellido_n'=>$data['apellido_n'],['cedula_n'=>$data['cedula_n'], ['contrasena_n'=>$data['contrasena_n'],'usuario_n'=>$data['usuario_n'],['rol_n'=>$data['rol_n']]);

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
