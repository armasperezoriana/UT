<?php

  class usuariosCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();

    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{

        $query = $this->db->connect()->query('SELECT * FROM usuarios');
        while($row = $query->fetch()){
          $item = new UsuariosClass();
          if ($row['id_usuario'] >= $mayor) {
           $mayor = $row['id_usuario'];
          }  
        }
        $id = $mayor + 1;
        $query = $this->db->connect()->prepare('INSERT INTO usuarios (id_usuario, cedula, nombre, apellido, usuario, contrasena, rol, status) VALUES(:id_usuario, :cedula, :nombre, :apellido, :usuario, md5(:contrasena), :rol, :status)');

        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'], 'rol'=>$data['rol'], 'id_usuario'=>$id, 'status'=>'0']);

        return true;
      } catch(PDOException $e){
        $this->error = "¡Error! ya existe este usuario";
        return false;
      }
    }
    function verificar($modulo){
           $items = [];

      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
      
          $permiso_usuario = ($row['permiso_usuario']);
          $permisos_vehiculos = ($row['permisos_vehiculos']);
          $permiso_choferes= ($row['permiso_choferes']);
          $permiso_rutas= ($row['permiso_rutas']);
          $permiso_taller = ($row['permiso_taller']);
          $permiso_mantenimiento = ($row['permiso_mantenimiento']);
          $permiso_bitacora =($row['permiso_bitacora']);
          $permiso_seguridad = ($row['permiso_seguridad']);
          $permiso_reportes = ($row['permiso_reportes']);
        }

        if ($permiso_usuario == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }
function getAlerta () {
     $items = [];
 $hoy = date("Y-m-d");
      try {

          $query = $this->db->connect()->query('SELECT * FROM mantenimientos');

        while($row = $query->fetch()){

          $id_mantenimiento = ($row['id_mantenimiento']);
          $nombre_tipo = ($row['nombre_tipo']);
          $placa = ($row['placa']);
          $fecha = ($row['fecha']);
          $meses = ($row['tiempo']);

          $diasRequerido = $meses * 30;

          $fecha1= new DateTime($fecha);
          $fecha2= new DateTime($hoy);
  

          $diff = $fecha1->diff($fecha2);
          $diff->days . ' dias'.'/';
          if ( $diff->days > $diasRequerido) {
              $diasPasado = $diff->days - $diasRequerido;
              $mostrarPlaca = $placa;
              $mostrarTipo = $nombre_tipo;
              $mostrarFecha = $fecha;

            $item = array(
            "id_mantenimiento" => $id_mantenimiento,
            "diasPasado" => $diasPasado, 
            "mostrarPlaca" => $mostrarPlaca, 
            "mostrarTipo" => $mostrarTipo, 
            "mostrarFecha" => $mostrarFecha);
              array_push($items, $item);

              
      
          }else{
          }
       

         
        }
        return $items;
      } catch (PDOException $e) {
        return false;
      }
    }

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE id_usuario = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM usuarios ORDER BY id_usuario');

        }

        while($row = $query->fetch()){
          $item = new UsuariosClass();

          $item->setId($row['id_usuario']);
          $item->setCedula($row['cedula']);
          $item->setNombre($row['nombre']);
          $item->setApellido($row['apellido']);
          $item->setUsuario($row['usuario']);
          $item->setContrasena($row['contrasena']);
          $item->setRol($row['rol']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
    function getRoles ( $id_rol = null) {
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

        $query = $this->db->connect()->prepare('UPDATE usuarios  SET  status = :status WHERE id_usuario = :id');
       
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
        $query = $this->db->connect()->prepare('UPDATE usuarios SET  nombre = :nombre, apellido = :apellido, usuario = :usuario, contrasena = md5(:contrasena), rol = :rol WHERE cedula = :cedula');
        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'], 'rol'=>$data['rol']]);

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
