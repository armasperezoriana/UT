<?php

  class rutasCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
       $id= 0;
    $mayor = 0;
      try{
         $query = $this->db->connect()->query('SELECT * FROM rutas');
      
        while($row = $query->fetch()){
          $item = new RutasClass();

          if ($row['id_ruta'] >= $mayor) {
            $mayor = $row['id_ruta'];
          }  
        }
          $id = $mayor + 1;
        $query = $this->db->connect()->prepare('INSERT INTO rutas (id_ruta, nombre_ruta, direccion_ruta, hora_salida, placa, status) VALUES(:id_ruta, :nombre_ruta, :direccion_ruta, :hora_salida, :placa, :status)');

        $query->execute(['nombre_ruta'=>$data['nombre_ruta'],  'direccion_ruta'=>$data['direccion_ruta'], 'hora_salida'=>$data['hora_salida'], 'placa'=>$data['placa'], 'id_ruta'=>$id, 'status'=>'0']);

        return true;
      } catch(PDOException $e){
        $this->error = "¡Error! Ya esta ruta existe";
        return false;
      }
    }
       function verificar($modulo){
           $items = [];
          

      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_rutas = ($row['permiso_rutas']);
        }
          
        if ($permiso_rutas == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }

    function get ( $id_ruta = null) {
      $items = [];
      try {

        if ( isset($id_ruta) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM rutas WHERE id_ruta = :id_ruta');

          $query->execute(['id_ruta'=>$id_ruta]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM rutas');

        }

        while($row = $query->fetch()){
          $item = new RutasClass();
          $item->setId($row['id_ruta']);
          $item->setPlaca($row['placa']);
          $item->setNombre($row['nombre_ruta']);
          $item->setdireccion($row['direccion_ruta']);
          $item->setHoraSalida($row['hora_salida']);

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

  

    function drop ($id) {
    $status = 1;
      try {

        $query = $this->db->connect()->prepare('UPDATE rutas  SET  status = :status WHERE id_ruta = :id');
       
        $query->execute(['id'=>$id ,'status'=>$status]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        echo($e);
        return false;
      }

    }

     function update ($data) {

      try {
        $query = $this->db->connect()->prepare('UPDATE rutas SET  nombre_ruta = :nombre_ruta, direccion_ruta = :direccion_ruta, hora_salida = :hora_salida, placa = :placa WHERE id_ruta = :id_ruta');

        $query->execute (['nombre_ruta'=>$data['nombre_ruta'],  'direccion_ruta'=>$data['direccion_ruta'], 'hora_salida'=>$data['hora_salida'],'placa'=>$data['placa'],'id_ruta'=>$data['id_ruta']]);

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
