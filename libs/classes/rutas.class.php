<?php 


  class RutasClass  {
      private $id_ruta;
      private $vechiculo;
      private $nombre;
      private $direccion;
      private $hora_salida;
      

      public function getId() {
        return $this->id_ruta;
      }
      public function getVehiculo() {
        return $this->vechiculo;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getDireccion() {
        return $this->direccion;
      }
      public function getHoraSalida() {
        return $this->hora_salida;
      }

      //SETTERS
      public function setId($id) {
        $this->id_ruta = $id;
      }
      public function setVehiculo($vechiculo) {
        $this->vechiculo = $vechiculo;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setDireccion($direccion) {
        $this->direccion = $direccion;
      }
      public function setHoraSalida($hora_salida) {
        $this->hora_salida = $hora_salida;
      }

  }

?>