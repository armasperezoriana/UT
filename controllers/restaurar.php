<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
class restaurar extends Controller {

    public function __construct() {
        parent::__construct();
          
       if ( isset( $_POST['ingresar'] ) ){

          //$nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
          //$apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
          //$cedula = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

          $correo = ($_POST['correo'] !== "") ? $_POST['correo'] : NULL;

          $this->loadModel('restaurar');

          if($this->verificacion( /*$nombre, $apellido, $cedula,*/ $correo )) {
            session_start();
            $_SESSION['restaurarUsuario'] = $correo;
            header('location:'. constant('URL').'restaurar/recuperar');
          }
        }

    } 

    public function load ($metodo, $param = null) {

    $ruta = 'source/restaurar/'.$metodo.'.php';

    require_once $ruta;
  }


    public function recuperar () {

      $this->view->render('restaurar/restaurar');
    }

    public function render () {
        $this->view->render('restaurar/index');
    }

    public function template()
    {
        $this->view->render('restaurar/template');
    }

    //Chequear si existe el usuario;
   // public function verificacion(/* $nombre, $apellido, $cedula,*/ $correo ) {

     // if ( $this->model->usuarioExiste(/* $nombre, $apellido, $cedula,*/ $correo ) ) {
 
       /* return true;
      } else {
         $this->view->mensaje = 'Datos incorrectos';
        return false; 
      }
    }*/

    public function actualizar() { 
       if(isset($_POST['btn'])){
      $contrasena = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL ;
      if($this->model->cambiar($contrasena)){

        session_unset();
        session_destroy();

        $this->view->mensaje = 'Cambio de contraseña efectuado con exito.';
        $this->view->render('login/index');

      }
      else{
        $this->view->mensaje = 'No se pudo realizar el cambio de contraseña.';
        $this->view->render('login/index');
      }


      }
    }



    public function verificacion()
    {
        if (isset($_POST["correo"]) && trim($_POST["correo"] != '')) {
            $correo = $_POST['correo'];
            $codigo = $this->createRandomCode();
            $fechaRecuperacion = date("Y-m-d H:i:s", strtotime('+24 hours'));

            if ( $this->model->usuarioExiste(/* $nombre, $apellido, $cedula,*/ $correo ) ){
              $respuesta = $this->model->recuperar($correo, $fechaRecuperacion, $codigo);
            } 

            else{
              $this->view->mensaje = 'No se ha encontrado ningún usuario con ese correo';
              return false;
            } 

            if ($respuesta) {
             
              if ( $this->sendMail($correo, $codigo)) {
                 $this->view->mensaje = 'Se ha enviado un correo electrónico con las instrucciones para el cambio de tu contraseña. Por favor verifica la información enviada.';
              }else{
                 $this->view->mensaje = 'No se ha podido enviar el correo.';
              }
            
            } 
              else {
                $this->view->mensaje = 'No se pudo recuperar la cuenta. Si los errores persisten comuniquese con el administrador del sitio.';
              }
        } 
    }

public function createRandomCode()
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return time().$pass;
    }




    public function sendMail($correo, $codigo) {

      $template = file_get_contents(constant('URL').'view/restaurar/template.php');
      $template = str_replace("{{name}}","NombreX", $template);
      $template = str_replace("{{action_url_2}}", '<b>http:'.constant('URL').'restaurar/actualizar/'.$codigo.'</b>', $template);
      $template = str_replace("{{action_url_1}}", 'http:'.constant('URL').'restaurar/actualizar/'.$codigo, $template);

      $mail = new PHPMailer(true);
      try {
          //Server settings
          $mail->SMTPDebug = 0;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = '01ricardoortiz01@gmail.com';                     //SMTP username
          $mail->Password   = 'rtz23112000';                               //SMTP password
          $mail->SMTPSecure = TLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

          //Recipients
          $mail->setFrom('01ricardoortiz01@gmail.com', 'geovanny');
          $mail->addAddress('$correo');     //Add a recipient

          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Recuperar contraseña';
          $mail->Body    = '$template';
          $mail->send();
          return true;
      } catch (Exception $e) {
    return false;
      }
    }


    

    






  }

?>