<?php
  class BitacoraClass extends Model {

    public $id_bitacora;
    public $id_usuario;
    public $id_vehiculo;
    public $id_chofer;
    public $id_ruta;
    public $id_mantenimiento;
    public $id_reparaciones;
    public $id_taller;
    public $nombre;
    public $apellido;
    public $apellido_n;
    public $contrasena;
    public $contrasena_n;
    public $rol;
    public $rol_n;
    public $cedula;
    public $cedula_n;
    public $host;
    public $usuario; 
    public $usuario_n;
    public $fecha;
    public $operacion;
    public $hora;
    public $tabla;
    public $campo_nuevo;
    public $campo_anterior;
  


    function __construct() {
        parent::__construct();
  
    }


      public function getIdBitacora() {
        return $this->id_bitacora;
      }
      public function getIdUsuario() {
        return $this->id_usuario;
      }
         public function getIdVehiculo() {
        return $this->id_vehiculo;
      }
         public function getIdChofer() {
        return $this->id_chofer;
      }
         public function getIdRuta() {
        return $this->id_ruta;
      }
         public function getIdMantenimiento() {
        return $this->id_mantenimiento;
      }
        public function getIdReparaciones() {
        return $this->id_reparaciones;
      }
      public function getIdTaller() {
        return $this->id_taller;
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
        return $this->cedula_n;
      }
      public function getContrasena() {
        return $this->contrasena;
      }
      public function getContrasena_n() {
        return $this->contrasena_n;
      }
       public function getHost() {
        return $this->host;
      }
      public function getRol() {
        return $this->rol;
      }
       public function getUsuario() {
        return $this->usuario;
      }
       public function getUsuario_n() {
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
          public function getCampoNuevo() {
        return $this->campo_nuevo;
      }
          public function getCampoAnterior() {
        return $this->campo_anterior;
      }


     //SETTERS
      public function setIdBitacora($id_bitacora) {
        $this->id_bitacora = $id_bitacora;
      }
         public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
      }
      public function setIdVehiculo($id_vehiculo) {
        $this->id_vehiculo = $id_vehiculo;
      }
      public function setIdChofer($id_chofer) {
        $this->id_chofer = $id_chofer;
      }
      public function setIdRuta($id_Ruta) {
        $this->id_ruta = $id_ruta;
      }
        public function setIdMantenimiento($id_mantenimiento) {
        $this->id_mantenimiento = $id_mantenimiento;
      }
      public function setIdTaller($id_taller) {
        $this->id_taller = $id_taller;
      }
      public function setidReparaciones($id_reparaciones) {
        $this->id_reparaciones = $id_reparaciones;
      }
           public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
        public function setNombre_n($nombre_n) {
        $this->nombre_n = $nombre_n;
      }
      public function setCedula($cedula) {
        $this->cedula = $cedula;
      }
         public function setCedula_n($cedula_n) {
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
        $this->usuario_n = $usuario_n;
      } 
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
        public function setOperacion($operacion) {
        $this->operacion = $operacion;
      }
      public function setHora($hora) {
        $this->hora = $hora;
      }
      public function setTabla($tabla) {
        $this->tabla = $tabla;
      }
      public function setCampo_nuevo($campo_nuevo) {
        $this->campo_nuevo = $campo_nuevo;
      }
        public function setCampo_anterior($campo_anterior) {
        $this->campo_anterior= $campo_anterior;
      }
      
 }


?>