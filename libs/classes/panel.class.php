<?php 
    // Clase de mantenimientos para BD

  class PanelClass  {
      private $usuario;
      private $rol;
      private $permiso;
      private $cedula;
      private $id;
    

      public function getId() {
        return $this->id;
      }
      public function getUsuario() {
        return $this->usuario;
      }
      public function getRol() {
        return $this->rol;
      }
      public function getPermiso() {
        return $this->permiso;
      }
      public function getCedula() {
        return $this->cedula;
      }
     
    

      //SETTERS
      public function setId($id) {
        $this->id = $id;
      }
      public function setUsuario($usuario) {
        $this->usuario = $usuario;
      }
      public function setPermiso($permiso) {
        $this->permiso = $permiso;
      }
       public function setRol($rol) {
        $this->Rol = $permiso;
      }
      public function setCedula($cedula) {
        $this->cedula = $cedula;
      }
     
  }

?>