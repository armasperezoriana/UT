<?php 


    require_once 'vendor/autoload.php';

/**
 * 
 */
class EsteganografiaController
{   
    // Todas las propiedades las declaré en los métodos

    // Recibir la imágen y la palabra o frase, procesarla y guardarla en carpeta del sistema
    static public function encriptarImg()
    {
        // Si existen las variables post, asignarlas a variables.
        if (isset($_POST['guardar'])) {
              $temporal = $_FILES["nuevaImagen"]["tmp_name"];
              $palabraS = $_POST["palabraSecreta"];
              $nombre = $_FILES["nuevaImagen"]["name"];
            }

        
        // Directorio para guardar la imágen
        $directorio = 'public/img/seguridad/imagenSeguridad/';
        // Renombrar las imágenes con números aleatorios desde el 100 hasta 999
        $aleatorio = mt_rand(100, 999);

        // procesar la imágen
        // creo un nuevo objeto de la clase que se instaló con composer 
        $procesar = new KzykHys\Steganography\Processor();
        if (isset($temporal) && isset($palabraS)) {
            $imgProcesada = $procesar->encode( $temporal, $palabraS);
            // var_dump($imgProcesada);    
            $imgProcesada->write($directorio.$aleatorio.".png");
            echo '<script>
                        swal({
                                type: "success",
                                title: "¡Imágen de seguridad elegida correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"

                             }).then(function(result){
                                if(result.value){                                                   
                                    window.location = "?url=seguridad&opcion=imagenSeguridad";
                                }

                             }); 

                 </script>';
        }
    }

    // listar las imágenes guardadas con o sin palabra o frase secreta.
    static public function listarImg()
    {

        $ruta = "views/public/img/seguridad/"; // Indicar la ruta
                $filehandle = opendir($ruta); // Abrir archivos de la carpeta
                while ($file = readdir($filehandle)) {
                    if ($file != "." && $file != "..") {
                        // var_dump($ruta.$file);
                        // $tamanyo = GetImageSize($ruta . $file);
                            echo "<div class='row card'><img src='$ruta$file' width='100' class='materialbox responsive-img card'><p style='font-weight: bold;'><label><input class='with-gap' name='imagenes' type='radio' value='$file' required /><span>Seleccione su imágen</span></label></p></div>";
                        } 
                } 
                    closedir($filehandle); // Fin lectura archivos
    }


    static public function desencriptarImg()
    {    
        // Si existen las variables post, asignarlas a variables.    
        if (isset($_POST["acceder"])) {
              $imagen = $_POST["imagenes"];
              $palabraSecreta = $_POST["palabra"];
              // var_dump($imagen);
              // var_dump($palabraSecreta);
        }

        // Directorio de las imagenes
        $directorio = 'views/public/img/seguridad/';
        // Instanciar la clase
        $procesar = new KzykHys\Steganography\Processor();

        // Se usa try porque hay una excepción que bloquea el programa, aparece al elegir una
        // imágen sin palabra secreta
        try{
            // Decodificar la imágen
            if (isset($imagen)) {
               // echo $imagen;
               $mensaje = $procesar->decode($directorio.$imagen);           
               // var_dump($procesar);
               // echo $mensaje;
               // var_dump($mensaje);            
                    if(isset($mensaje) && $palabra == $mensaje){
                    // echo $palabraSecreta.'</br>';
                    // echo $mensaje;
                        echo '<script>
                                swal({
                                    type: "success",
                                    title: "¡Imágen y palabra secreta guardada correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"},

                                function(isConfirm){   
                                    if (isConfirm) {    
                                        window.location="?url=seguridad&opcion=inicioAdminUsuarios";
                                    }
                                 });
                         </script>';
                    }elseif($mensaje != $palabra){
                        echo'<script>
                            swal({
                                  type: "error",
                                  title: "¡No coincide su imágen o palabra de seguridad!",
                                  showConfirmButton: true,
                                  confirmButtonText: "Cerrar"
                                  }).then(function(result){
                                    if (result.value) {

                                   window.location = "?url=seguridad&opcion=imagenSeguridad";

                                    }
                                })

                        </script>';
                    }
                    else{
                        throw new OutOfBoundsException("La imágen no contiene palabra o frase secreta");
                    }            
                }
        }catch(OutOfBoundsException $ex){
            echo '<script>
                    swal({
                          type: "error",
                          title: "La imágen no contiene palabra de seguridad!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
                          }).then(function(result){
                            if (result.value) {

                           window.location = "?url=seguridad&opcion=imagenSeguridad";

                            }
                        })

                    </script>';
        }

    }
    
}


