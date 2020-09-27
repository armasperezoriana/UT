<?php 


  class TiposClass  {
      private $id_taller;
      private $rif;
      private $nombre;
      private $direccion;      

      public function getId() {
        return $this->id_taller;
      }
      public function getRif() {
        return $this->rif;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getDireccion() {
        return $this->direccion;
      }
  

      //SETTERS
      public function setId($id) {
        $this->id_taller = $id;
      }
      public function setRif($rif) {
        $this->rif = $rif;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setDireccion($direccion) {
        $this->direccion = $direccion;
      }
 } 

?>