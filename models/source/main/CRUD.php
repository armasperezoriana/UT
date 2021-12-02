<?php
  class mainCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();


    }

    function cantUsuarios(){
      $query = $this->db->connect()->query('SELECT * FROM usuarios WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }
      function cantVehiculos(){
        $query = $this->db->connect()->query('SELECT * FROM vehiculos WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }
     function cantChoferes(){
        $query = $this->db->connect()->query('SELECT * FROM choferes WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }
      function cantRutas(){
        $query = $this->db->connect()->query('SELECT * FROM rutas WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }
     function cantTaller(){
        $query = $this->db->connect()->query('SELECT * FROM taller WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }
      function cantMantenimiento(){
       $query = $this->db->connect()->query('SELECT * FROM mantenimientos WHERE status = 0');
      $cantidad = 0;
      while($row = $query->fetch()){
          $cantidad = $cantidad + 1;
        }
      echo $cantidad;
    }

   

    function update ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE usuarios SET  nombre = :nombre, apellido = :apellido, usuario = :usuario, contrasena = :contrasena, rol = :rol WHERE cedula = :cedula');
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


      


  }

?>
