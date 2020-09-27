<?php 
    // Clase de usuario para BD

  class PartesClass  {
      private $codigo;
      private $serializable;
      private $estatus;
      private $stockactual;
      private $stockmaximo;
      private $stockminimo;
      private $puntoreorden;
      private $idmodelo;
      

      public function getCodigo() {
        return $this->codigo;
      }
      public function getSerializable() {
        return $this->serializable;
      }
      public function getEstatus() {
        return $this->estatus;
      }
      public function getStockActual() {
        return $this->stockactual;
      }
      public function getStockMaximo() {
        return $this->stockmaximo;
      }
      public function getStockMinimo() {
        return $this->stockminimo;
      }
      public function getPuntoReorden() {
        return $this->puntoreorden;
      }
      public function getIdModelo() {
        return $this->idmodelo;
      }
      

      //SETTERS
       public function setCod($codigo) {
         $this->codigo = $codigo;
      }
      public function setSerializable($serializable) {
       $this->serializable = $serializable;
      }
      public function setEstatus($estatus) {
       $this->estatus = $estatus;
      }
      public function setStockAct($num) {
       $this->stockactual = $num;
      }
      public function setStockMax($num) {
       $this->stockmaximo = $num;
      }
      public function setStockMin($num) {
       $this->stockminimo = $num;
      }
      public function setPuntoRe($punto) {
       $this->puntoreorden = $punto;
      }
      public function setIdModelo($idmodelo) {
       $this->idmodelo = $idmodelo;
      }
  }

?>