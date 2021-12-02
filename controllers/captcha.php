<?php

  class Captcha extends Controller{

    function_construct(){

      parent::_contruct();

 if ( isset( $_POST['captcha_t'] ) && $_POST['captcha_t'] !== ""){

          $captcha = ($_POST['captcha_t'] !== "") ? $_POST['captcha_t'] : NULL;

          $this->captcha('captcha_t');

          if($this->codigo_captcha()) {
          }
        }

    }

  public  function codigo_captcha(){
            $k="";
            $parametros="123456789ABCDFGHIJKLMNOPQRSTUVWXZ";
            $maximo=strlen($parametros)-1;

            for($i=0; $i<5; $i++){

              $k.=$parametros{mt_rand(0,$maximo)};
            }

            return $k;

      }


      public function captcha($captcha){
      if (isset($_POST['captcha_t'])) { //aqui quiero ver si marcaron el captcha
        $captcha_t ($_POST['captcha_t'] !=="")
        {
          echo "Debes llenar el captcha";
          return false;
        }

   else if{

    $this->loadModel('login');

   } 
       
      }
    }

  }
        
?>