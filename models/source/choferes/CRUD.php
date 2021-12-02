<?php

  class choferesCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{
         $query = $this->db->connect()->query('SELECT * FROM choferes');
      
        while($row = $query->fetch()){
          $item = new ChoferesClass();

          if ($row['id_choferes'] >= $mayor) {
            $mayor = $row['id_choferes'];
          }  
        }
          $id = $mayor + 1;
        $query = $this->db->connect()->prepare('INSERT INTO choferes (id_choferes, cedula, nombre, apellido, telefono, placa, status) VALUES(:id_choferes, :cedula, :nombre, :apellido, :telefono, :placa, :status)');

        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'], 'placa'=>$data['placa'], 'id_choferes'=>$id, 'status'=>'0']);

        return true;
      } catch(PDOException $e){
        $this->error = "¡Error! Ya esta cedula existe";
        return false;
      }
    }
     function verificar($modulo){
           $items = [];
          

      try {
      $query = $this->db->connect()->prepare('SELECT * FROM roles WHERE nombre_rol = :nombre_rol');
      $query->execute(['nombre_rol'=>$_SESSION['rol']]);

       while($row = $query->fetch()){
          $permiso_choferes = ($row['permiso_choferes']);
        }
          if ($permiso_choferes == "restringido") {
            return false;
          }else{
            return true;
          }

      } catch (Exception $e) {
      }
      
    }
    

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM choferes WHERE id_choferes = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM choferes ORDER BY id_choferes');

        }

        while($row = $query->fetch()){
          $item = new ChoferesClass();
          $item->setId($row['id_choferes']);
          $item->setCedula($row['cedula']);
          $item->setNombre($row['nombre']);
          $item->setApellido($row['apellido']);
          $item->setTelefono($row['telefono']);
          $item->setPlaca($row['placa']);

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

        if ( isset($id) ) {
          //Lo mas probable es que lo quieren condicionar a que solo se muestre los operativos asi que cambien el query
          $query = $this->db->connect()->prepare('SELECT * FROM vehiculos WHERE id_vehiculo = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM vehiculos WHERE status = 0');

        }

        while($row = $query->fetch()){
          $item = new VehiculosClass();
          $item->setId($row['id_vehiculo']);
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

        $query = $this->db->connect()->prepare('UPDATE choferes  SET  status = :status WHERE id_choferes = :id');
       
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
        $query = $this->db->connect()->prepare('UPDATE choferes SET  nombre = :nombre, apellido = :apellido, telefono = :telefono, placa = :placa WHERE cedula = :cedula');
        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'],'placa'=>$data['placa']]);

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
