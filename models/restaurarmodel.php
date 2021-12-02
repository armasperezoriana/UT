<?php

  require 'libs/classes/usuarios.class.php';
  require 'phpmailer/Exception.php';
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';


 
  class RestaurarModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function usuarioExiste (/*$nombre, $apellido, $cedula*/$correo) {
 
      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE /*nombre = :nombre AND apellido = :apellido AND cedula = :cedula*/correo = :correo');

         $query->execute([/*'nombre' => $nombre,'apellido' => $apellido,  'cedula' => $cedula*/'correo' => $correo]);

         if ( $query->rowCount() ) {
          return true;

         } else {
          return false;
         }

      } catch (PDOException $e) {
        return false;
      }
    }
    function cambiar($contrasena){
       try {
        $query = $this->db->connect()->prepare(' UPDATE usuarios SET contrasena = :contrasena WHERE correo = :correo');
        
        $query->execute(['contrasena' => $contrasena, 'correo' => $_SESSION['restaurarUsuario']]);

        return true;
      } catch (PDOException $e) {
        echo "Error en: ".$e;
        return false;
      }

    }

    function recuperar($correo, $fechaRecuperacion, $codigo){
       try {
        $query = $this->db->connect()->prepare(' UPDATE usuarios SET fechaRecuperacion = :fechaRecuperacion, codigo = :codigo WHERE correo = :correo');
        
        $query->execute(['fechaRecuperacion' => $fechaRecuperacion, 'codigo' => $codigo,  'correo' => $correo]);

        return true;
      } catch (PDOException $e) {
        echo "Error en: ".$e;
        return false;
      }

    }
}

?>