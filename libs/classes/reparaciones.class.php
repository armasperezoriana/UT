<?php 


  class ReparacionesClass  {
      private $id_reparacion;
      private $id_vehiculo;
      private $descripcion;
      private $costo;
      private $taller;
      private $fecha;
      

      public function getId() {
        return $this->id_reparacion;
      }
      public function getId_vehiculo() {
        return $this->id_vehiculo;
      }
      public function getDescripcion() {
        return $this->descripcion;
      }
      public function getCosto() {
        return $this->costo;
      }
      public function getTaller() {
        return $this->taller;
      }
      public function getFecha() {
        return $this->fecha;
      }
      //SETTERS
      public function setId($id) {
        $this->id_reparacion = $id;
      }
      public function  setId_vehiculo($id_vehiculo) {
        $this->id_vehiculo = $id_vehiculo;
      }
      public function  setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
      }
      public function  setCosto($costo) {
        $this->costo = $costo;
      }
      public function  setTaller($taller) {
        $this->taller = $taller;
      }
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
  }

?>