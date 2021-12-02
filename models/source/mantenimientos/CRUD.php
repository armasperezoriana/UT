<?php

  class mantenimientosCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO mantenimientos (placa , nombre_tipo, nombre, costo, fecha, tiempo, status) VALUES(:placa, :nombre_tipo,  :nombre, :costo, :fecha, :tiempo, :status)');
        $query->execute(['placa'=>$data['placa'], 'nombre_tipo'=>$data['nombre_tipo'],  'nombre'=>$data['taller'], 'costo'=>$data['costo'], 'fecha'=>$data['fecha'], 'tiempo'=>$data['tiempo'], 'status'=>'0']);
        return true;
      } catch(PDOException $e){
        echo $e;
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

    function get ( $id_mantenimiento = null) {
      $items = [];
      try {

        if ( isset($id_mantenimiento) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM mantenimientos WHERE id_mantenimiento = :id_mantenimiento');

          $query->execute(['id_mantenimiento'=>$id_mantenimiento]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM mantenimientos ORDER BY costo DESC');

        }

        while($row = $query->fetch()){
          $item = new MantenimientosClass();

          $item->setId($row['id_mantenimiento']);
          $item->setNombre_tipo($row['nombre_tipo']);
          $item->setPlaca($row['placa']);
          $item->setNombre($row['nombre']);
          $item->setCosto($row['costo']);
          $item->setFecha($row['fecha']);
          $item->setTiempo($row['tiempo']);
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
        /*********************************************************************************
          GET VEHICULOS
    ********************************************************************************/

    function getVehiculos ( $id = null) {
      $items = [];
      try {

        if ( isset($placa) ) {
          //Lo mas probable es que lo quieren condicionar a que solo se muestre los operativos asi que cambien el query
          $query = $this->db->connect()->prepare('SELECT * FROM vehiculos WHERE placa = :placa');

          $query->execute(['placa'=>$placa]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM vehiculos WHERE status = 0');

        }

        while($row = $query->fetch()){
          $item = new VehiculosClass();
          $item->setPlaca($row['placa']);
          $item->setModelo($row['modelo']);
          $item->setFuncionamiento($row['funcionamiento']);
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
/*********************************************************************************
          GET Talleres
    ********************************************************************************/

    function getTalleres ( $rif = null) {
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
    /*********************************************************************************
          GET Tipos de mantenimientos
    ********************************************************************************/
    function getTipos ( $id = null) {
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

        $query = $this->db->connect()->prepare('UPDATE mantenimientos  SET  status = :status WHERE id_mantenimiento = :id');
       
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
        $query = $this->db->connect()->prepare('UPDATE mantenimientos SET nombre = :nombre, costo = :costo, fecha = :fecha WHERE id_mantenimiento = :id_mantenimiento');
        
        $query->execute(['id_mantenimiento'=>$data['id_mantenimiento'], 'nombre'=>$data['nombre'], 'costo'=>$data['costo'], 'fecha'=>$data['fecha']]);

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
