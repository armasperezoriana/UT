<?php



class Menu extends Controller{

  function __construct ($rol) {
    parent::__construct();
    $this->host = constant('HOST');
    $this->db = constant('DBNAME');
    $this->user = constant('USER');
    $this->pass = constant('PASS');
    $this->charset = constant('CHARSET');
    $array = $this->get($rol);
    $this->view->roles = $array;
    require 'views/menus/menu.php';

  }
   function connect () {
          try {

            $conexion = 'mysql:host='. $this->host .';dbname='. $this->db;
            $opciones = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
            $pdo = new PDO($conexion, $this->user, $this->pass, $opciones);

            return $pdo;

          } catch (PDOException $e){
           print_r('Error de conexion: '. $e->getMessage()); 
          }
      }
      
  

    function get ( $rol = null) {
      $items = [];
      try {

        if ( isset($rol) ) {

          $query = $this->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');

          $query->execute(['nombre_rol'=>$rol]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM roles');

        }

        while($row = $query->fetch()){
          $item = new RolesClass();
          $id = $row['id_rol'];
          $nombre_rol = ($row['nombre_rol']);
          $descripcion = ($row['descripcion']);
          $permiso_usuario = ($row['permiso_usuario']);
          $permisos_vehiculos = ($row['permisos_vehiculos']);
          $permiso_choferes = ($row['permiso_choferes']);
          $permiso_rutas = ($row['permiso_rutas']);
          $permiso_taller = ($row['permiso_taller']);
          $permiso_mantenimiento = ($row['permiso_mantenimiento']);
          $permiso_bitacora =($row['permiso_bitacora']);
          $permiso_seguridad = ($row['permiso_seguridad']);
          $permiso_reportes = ($row['permiso_reportes']);
          $status = ($row['status']);


           $array = array(
            "permiso_usuario" => $permiso_usuario, 
            "permisos_vehiculos" => $permisos_vehiculos, 
            "permiso_choferes" => $permiso_choferes, 
            "permiso_rutas" => $permiso_rutas, 
            "permiso_taller" => $permiso_taller,
            "permiso_mantenimiento" => $permiso_mantenimiento, 
            "permiso_bitacora" => $permiso_bitacora,
            "permiso_seguridad" => $permiso_seguridad,
            "permiso_reportes" => $permiso_reportes);


        }

    
        return $array;
      } catch (PDOException $e) {
        return [];
      }
      
    }



}
?>