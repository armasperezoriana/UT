
<?php
  class Database {
      
      private $host;
      private $db;
      private $user;
      private $pass;
      private $charset;
    
      function __construct () {
        $this->host = 'localhost';
        $this->db = 'ut';
        $this->user = 'admin';
        $this->pass = 'admin';
        $this->charset = 'utf8';
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
   
  }


?>