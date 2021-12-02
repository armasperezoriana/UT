<?php
class Login extends Controller {
  
    public function __construct(){
        parent::__construct();

        if ( isset( $_POST['usuario'] ) && $_POST['usuario'] !== ""){

          $usuario = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
          $contrasena = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL;
    
          $pass = md5($contrasena);

          $this->loadModel('login');

        
        
              if($this->verificacion($usuario, $contrasena)){
              header('location:'. constant('URL'));
            
        }

        

      
    }
  }

    public function render () {
        $this->view->render('login/index');
    }

    //Chequear si existe el usuario;
    public function verificacion( $usuario, $contrasena) {
      if ( $this->model->usuarioExiste($usuario, $contrasena) ) {
        //if (!isset($_POST['token'])) { //Verificar que se genero el token
        //    $this->view->mensaje = 'Error al validar el Captcha';
        //    return false;
        //}
        //Validar el captcha con el token y la clave secreta
        //$token = $_POST['token'];
           
        //$recaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lenol0aAAAAAHbeJmFPNCv5cNmuktZKzobm5P6e&response=".$token); 
        //$recaptcha = json_decode($recaptcha);
        
        //$recaptcha = (array) $recaptcha;
        // var_dump($recaptcha);
        //if(!isset($recaptcha['success']) || !$recaptcha['success'] || $recaptcha['score'] < 0.4)
        //{
        //  $this->view->mensaje = 'Error al validar el Captcha';
        //  return false;
        //}

        $this->setUsuarioActual( $_POST['usuario'] );
        return true;
      } else {
         $this->view->mensaje = 'Datos incorrectos';
        return false;
      }

    }

   public function captcha(){

       if (!empty($_POST)){
                $response = '';
                
                $captcha = $_POST['g-recaptcha'];
                $secret='6LeZAUYaAAAAAP6LJ8JW1eI6fBgyimoxlieSB1jC';


                     if(!$captcha){

                      $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=$secret&$response=$captcha');


                       $arr = json_decode($response, TRUE); //esto es para ver la respuesta de google e interpretarla

                     $this->view->render('login/index');
                     }
                     else{
                      $this->view->mensaje ="Error al comprobar captcha";
                      return false; 
       }
     }
   }
    

      //asignar valores a la variable de sesion;
    public function setUsuarioActual($usuario) {

        $_SESSION['usuario'] = $usuario;

      }
    }

?>
