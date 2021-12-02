<?php

  class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }
 
    function usuarioExiste ( $usuario, $contrasena ) {
      $pass = md5($contrasena);
      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena AND status = 0');
        $query->execute(['usuario' => $usuario, 'contrasena' => $pass]);

       while($row = $query->fetch()){
      
          $_SESSION['id_usuario'] = ($row['id_usuario']);
          $_SESSION['cedula'] = ($row['cedula']);
          $_SESSION['usuario'] = ($row['usuario']);
          $_SESSION['nombre'] = ($row['nombre']);
          $_SESSION['apellido'] = ($row['apellido']);
          $_SESSION['rol'] = ($row['rol']);
 

        }


        return $query->rowCount();
      } catch(PDOException $e) {
        return false;
      }

       function codigo_captcha(){
            $k="";
            $parametros="123456789abcdefghijklmnopqrstuvwxyz";
            $maximo=strlen($parametros)-1;

            for($i=0; $i<5; $i++){

              $k.=$parametros{mt_rand()(0,$maximo)};
            }
            return $k;

          }


    }
  }

?>