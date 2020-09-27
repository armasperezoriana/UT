<?php 
    // Clase de usuario para BD

  class PartesEquiposClass  {
      private $codequipo;
      private $codpartes;
      private $cantidadparteequipo;
      

      public function getCodEquipo() {
        return $this->codequipo;
      }
      public function getCodPartes() {
        return $this->codpartes;
      }
      public function getCantidadPartes() {
        return $this->cantidadparteequipo;
      }
     
      //SETTERS
       public function setCod($codequipo) {
         $this->codequipo = $codequipo;
      }
       public function setCodParte($codpartes) {
         $this->codpartes = $codpartes;
      }
       public function setCantidadPartes($cantidadparteequipo) {
         $this->cantidadparteequipo = $cantidadparteequipo;
      }
      
  }

?>