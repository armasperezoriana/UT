<?php 
    // Clase de usuario para BD

  class VehiculosClass  {
      private $id_vehiculo;
      private $placa;
      private $modelo;
      private $funcionamiento;
      

      public function getId() {
        return $this->id_vehiculo;
      }
      public function getPlaca() {
        return $this->placa;
      }
      public function getModelo() {
        return $this->modelo;
      }
      public function getFuncionamiento() {
        return $this->funcionamiento;
      }


      //SETTERS
      public function setId($id) {
        $this->id_vehiculo = $id;
      }
      public function setPlaca($placa) {
        $this->placa = $placa;
      }
      public function setModelo($modelo) {
        $this->modelo = $modelo;
      }
      public function setFuncionamiento($funcionamiento) {
        $this->funcionamiento = $funcionamiento;
      }
}    
?>