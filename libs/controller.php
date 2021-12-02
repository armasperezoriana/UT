
<?php

  class Controller {

    function __construct() {
      $this->view = new View();
    }

    function loadModel($model, $param = null) {

      $url = 'models/' . $model. 'model.php';

      if( file_exists($url) ) {
        require_once $url;
        $modelName = $model .'Model';
        $this->model = new $modelName();

      }
    }

    //ConFigurar usuario y devolver datos a la vista;
    public function setUsuario ($usuario) {
      $query = $this->model->db->connect()->prepare
      ('SELECT * FROM usuarios WHERE usuario = :usuario');
      $query->execute(['usuario' => $usuario]);

      foreach($query as $usuarioActual) {

        $this->view->nombre = $usuarioActual['nombre'];
        $this->view->apellido = $usuarioActual['apellido'];
        $this->view->usuario = $usuarioActual['usuario'];
        $this->view->cedula = $usuarioActual['cedula'];
        $this->view->rol = $usuarioActual['rol'];
      }
      $this->alerta();
    }
     public function alerta () {

     $items = [];
      $hoy = date("Y-m-d");
      try {

          $query = $this->model->db->connect()->query('SELECT * FROM mantenimientos WHERE status = 0');
          $contador = 0;
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

          
          $contador = $contador + 1;
          }
         
        }
        if ($contador >= 1) {
          $GLOBALS["notificacion"] = 'on';
        }else
        {
           $GLOBALS["notificacion"] = 'off';
        }
        return $items;
      } catch (PDOException $e) {
        return false;
      }
    }


   


  }

?>
