<?php
  class BitacoraClassUsuarios extends Model {

    public $id_usuarioB;
    public $nombre;
    public $nombre_n;
    public $apellido;
    public $apellido_n;
    public $cedula;
    public $cedula_n;
    public $contrasena;
    public $contrasena_n;
    public $rol;
    public $rol_n;
    public $host;
    public $usuario; 
    public $usuario_n;
    public $fecha;
    public $operacion;
    public $hora;
    public $tabla;

    function __construct() {
        parent::__construct();
  
    }


      public function getIdusuariosB() {
        return $this->id_usuariosB;
      }
      public function getNombre() {
        return $this->nombre;
      }
         public function getNombre_n() {
        return $this->nombre_n;
      }
         public function getApellido() {
        return $this->apellido;
      }
          public function getApellido_n() {
        return $this->apellido_n;
      }
       public function getCedula() {
        return $this->cedula;
      }
      public function getCedula_n() {
        return $this->cedula;
      }
      public function getContrasena() {
        return $this->contrasena;
      }
       public function getRol() {
        return $this->rol;
      }
       public function getRol_n() {
        return $this->rol_n;
      }

       public function getHost() {
        return $this->host;
      }
       public function getUsuario() {
        return $this->usuario;
      }
        public function getUsuarios_n() {
        return $this->usuario_n;
      }
       public function getFecha() {
        return $this->fecha;
      }
       public function getOperacion() {
        return $this->operacion;
      }
      public function getHora() {
        return $this->hora;
      }
      public function getTabla() {
        return $this->tabla;
      }


     //SETTERS
      public function setIdusuariosB($id_usuariosB) {
        $this->id_usuariosB = $id_usuariosB;
      }
         public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
         public function setNombre_n($nombre_n) {
        $this->nombre_n = $nombre_n;
      }
         public function setApellido($apellido) {
        $this->apellido = $apellido;
      }
       public function setApellido_n($apellido_n) {
        $this->apellido_n = $apellido_n;
      }
       public function setCedula($cedula) {
        $this->cedula = $cedula;
      }
       public function setCedula($cedula_n) {
        $this->cedula_n = $cedula_n;
      }
       public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
      }
       public function setContrasena_n($contrasena_n) {
        $this->contrasena_n = $contrasena_n;
      }
       public function setHost($host) {
        $this->host = $host;
      }
         public function setRol($rol) {
        $this->rol = $rol;
      }
         public function setUsuario($usuario) {
        $this->usuario = $usuario;
      }
          public function setUsuario_n($usuario_n) {
        $this->usuari_n = $usuario_n;
      }
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
        public function setoperacion($operacion) {
        $this->operacion = $operacion;
      }
      public function setHora($hora) {
        $this->hora = $hora;
      }
      public function setTabla($tabla) {
        $this->tabla = $tabla;
      }
      
      
 }



?>