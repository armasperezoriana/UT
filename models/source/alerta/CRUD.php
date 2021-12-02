<?php

  class alertaCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
     


    }

 
   function getAlerta () {
     $items = [];
 $hoy = date("Y-m-d");
      try {

          $query = $this->db->connect()->query('SELECT * FROM mantenimientos WHERE status = 0');

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


    

    public function getError () {
      return $this->error;
    }
  }

?>
