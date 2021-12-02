<?php 

  class RolesClass  {
      private $id_rol;
      private $nombre_rol;
      private $descripcion;
      private $permiso_usuario;
      private $permisos_vehiculos;
      private $permiso_choferes;
      private $permiso_rutas;
      private $permiso_taller;
      private $permiso_mantenimiento;
      private $permiso_bitacora;
      private $permiso_seguridad;
      private $permiso_reportes;
      private $status;
      

      public function getId() {
        return $this->id_rol;
      }
      public function getNombre_rol() {
        return $this->nombre_rol;
      }
      public function getDescripcion() {
        return $this->descripcion;
      }
      public function getPermiso_usuario() {
        return $this->permiso_usuario;
      }
      public function getPermisos_vehiculos() {
        return $this->permisos_vehiculos;
      }
      public function getPermiso_choferes() {
        return $this->permiso_choferes;
      }
      public function getPermiso_rutas() {
        return $this->permiso_rutas;
      }
      public function getPermiso_taller() {
        return $this->permiso_taller;
      }
      public function getPermiso_mantenimiento() {
        return $this->permiso_mantenimiento;
      }
      public function getPermiso_bitacora() {
        return $this->permiso_bitacora;
      }
      public function getPermiso_seguridad() {
        return $this->permiso_seguridad;
      }
      public function getPermiso_reportes() {
        return $this->permiso_reportes;
      }
      public function getStatus() {
        return $this->status;
      }

      //SETTERS
      public function setId($id_rol) {
        $this->id_rol = $id_rol;
      }
     public function setNombre_rol($nombre_rol) {
        $this->nombre_rol = $nombre_rol;
      }
      public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
      }
      public function setPermiso_usuario($permiso_usuario) {
        $this->permiso_usuario = $permiso_usuario;
      }
      public function setPermisos_vehiculos($permisos_vehiculos) {
        $this->permisos_vehiculos = $permisos_vehiculos;
      }
           public function setPermiso_choferes($permiso_choferes) {
        $this->permiso_choferes = $permiso_choferes;
      }
     public function setPermiso_rutas($permiso_rutas) {
        $this->permiso_rutas = $permiso_rutas;
      }
      public function setPermiso_taller($permiso_taller) {
        $this->permiso_taller = $permiso_taller;
      }
      public function setPermiso_mantenimiento($permiso_mantenimiento) {
        $this->permiso_mantenimiento = $permiso_mantenimiento;
      }
      public function setPermiso_bitacora($permiso_bitacora) {
        $this->permiso_bitacora = $permiso_bitacora;
      }
       public function setPermiso_seguridad($permiso_seguridad) {
        $this->permiso_seguridad = $permiso_seguridad;
      }
      public function setPermiso_reportes($permiso_reportes) {
        $this->permiso_reportes = $permiso_reportes;
      }
      public function setStatus($status) {
        $this->status = $status;
      }

  }

?>