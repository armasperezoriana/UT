<?php

	require_once '../config/conex.php';

	class EsteganografiaModel extends Conexion {

		private $cedula;
		private $codSeg;
		private $img;

		public function setCedula($cedula){ $this->cedula = $cedula; }
		public function getCedula(){  return $this->cedula;	}
		public function setCodSeg($codSeg){ $this->codSeg = $codSeg; }
		public function getCodSeg(){  return $this->codSeg;	}
		public function setImg($img){ $this->img = $img; }
		public function getImg(){  return $this->img; }
	
		public function crearImagen() {
			
			$x = 200;# coordenada x (pixel de la imagen)
			$y = 200;# coordenada y (pixel de la imagen)

			$gd = imagecreatetruecolor($x, $y); # Crea una nueva imagen de color verdadero

			$esquinas[0] = array('x' => rand(0,200), 'y' => rand(0,200));
			$esquinas[1] = array('x' => rand(0,200), 'y' => rand(0,200));
			$esquinas[2] = array('x' => rand(0,200), 'y' => rand(0,200));
			$esquinas[3] = array('x' => rand(0,200), 'y' => rand(0,200));

			$rojo = imagecolorallocate($gd, rand(0,255), rand(0,255), rand(0,255)); # Asigna un color para una imagen

			for ($i = 0; $i < 100000; $i++) {
				imagesetpixel($gd, round($x),round($y), $rojo); # Establecer un simple píxel 
				#round — Redondea un float
				$a = rand(0, 3);
				$x = ($x + $esquinas[$a]['x']) / 2;
				$y = ($y + $esquinas[$a]['y']) / 2;
			}

			$save='../views/lib/imagenes/esteganografia/'.$this->cedula.'.png'; 
		
			imagepng($gd,$save); # Imprimir una imagen PNG al navegador o a un archivo
			imagedestroy($gd); # libera cualquier memoria asociada con la imagen image.
		} # Fin Funcion crearImagen

		public function cifrarImagen() {

			if ($this->img == null) {

				$rand = rand(00000001, 99999999); # obtiene un valor aleatorio
				$message_to_hide = md5($rand);
				$src = '../views/lib/imagenes/esteganografia/'.$this->cedula.'.png'; #obtiene la ruta de la imagen
			} else {

				$message_to_hide = $this->codSeg; # se obtiene el codigo del controlador y se asigna a la variable
				$src = $this->img;# se obtiene la imagen del controlador y se asigna a la variable
			}

			$binary_message = $this->imgBinaria( $message_to_hide ); # convierte a binario
			$message_length = strlen($binary_message); # Obtiene la longitud de un string

			$im = imagecreatefrompng($src); # Crea una nueva imagen a partir de un fichero
			for($x=0;$x<$message_length;$x++){
				$y = $x;# se le asigna el valor de x a y
				$rgb = imagecolorat($im,$x,$y); #Obtiene el índice del color de un píxel desde las coodenadas X y Y de la imagen
				$r = ($rgb >>16) & 0xFF; #se obtiene el color rojo
				$g = ($rgb >>8) & 0xFF;#se obtiene el color verde
				$b = $rgb & 0xFF;#se obtiene el color azul

				$newR = $r; 
				$newG = $g;
				$newB = $this->imgBinaria($b); #ejecuta la funcion imgBinaria pasando por parametro $b
				$newB[strlen($newB)-1] = $binary_message[$x];
				$newB = $this->imgString($newB);

				$new_color = imagecolorallocate($im,$newR,$newG,$newB); # Asigna un color para una imagen
				imagesetpixel($im,$x,$y,$new_color); # Establecer un simple píxel
			}

			imagepng($im,$src); # Imprimir una imagen PNG al navegador o a un archivo
			imagedestroy($im); # libera cualquier memoria asociada con la imagen image.

			return $rand;
		} # Fin Funcion cifrarImagen

		public function decifrarImagen() {

			$imagenBd = '../views/lib/imagenes/esteganografia/'.$this->cedula.'.png';
			$src = $this->img;
			$message_bd = '';
			$imgBd = imagecreatefrompng($imagenBd);
			$im = imagecreatefrompng($src);
			$real_message = '';
			for($x=0;$x<336;$x++){

				$y = $x;
				$rgbDb = imagecolorat($imgBd,$x,$y);
				$rdb = ($rgbDb >>16) & 0xFF;
				$gdb = ($rgbDb >>8) & 0xFF;
				$bdb = $rgbDb & 0xFF;

				$rgb = imagecolorat($im,$x,$y);
				$r = ($rgb >>16) & 0xFF;
				$g = ($rgb >>8) & 0xFF;
				$b = $rgb & 0xFF;

				$blue = $this->imgBinaria($b);
				$azul = $this->imgBinaria($bdb);
				$real_message .= $blue[strlen($blue)-1];
				$message_bd .= $azul[strlen($azul)-1];
			}
			$real_message = $this->imgString($real_message);
			$message_bd = $this->imgString($message_bd);

			
			$save = '../views/lib/imagenes/esteganografia/'.$this->cedula.'.png';

			if ($real_message == $message_bd) {
			
				unlink($save);
				// elimina la imagen del disco duro);
				return $array = array('success' => true);
			} else {
				// echo "Acceso Denegado";
				return $array = array('success' => false, 'error' => 1);
			}

			die;
		} # Fin Funcion decifrarImagen

		public function imgBinaria($str) {

			$str = (string)$str;
			$l = strlen($str);
			$result = '';
			while($l--){
				$result = str_pad(decbin(ord($str[$l])),8,"0",STR_PAD_LEFT).$result; // 
				#ord — devuelve el valor ASCII de un caracter
				#decbin — Decimal a binario
				#str_pad — Rellena un string hasta una longitud determinada con otro string
				#STR_PAD_LEFT _ coloca el valor cero a la izquierda

			}
			return $result;
		} # Fin Funcion imgBinaria

		public function imgString($str)	{

			$text_array = explode("\r\n", chunk_split($str, 8));
			// chunk_split — Divide una cadena en trozos más pequeños
			// explode — Divide un string en varios string
			$newstring = '';
			
			for ($n = 0; $n < count($text_array) - 1; $n++) {
				$newstring .= chr(base_convert($text_array[$n], 2, 10));
				// base_convert — Convertir un número entre bases arbitrarias
				//chr — Devuelve un caracter específico
			}
			return $newstring; 

		} # Fin Funcion imgString
		public function obtenerCodSeg()	{

			$conex = new Conexion();

			$sql = ("SELECT clave_seguridad FROM tusuarios WHERE tusuarios.cedula =  :cedula");

			$stmt = $conex->conectar()->prepare($sql);
			$stmt->bindparam(":cedula", $this->cedula, PDO::PARAM_INT);

			$stmt->execute();

			$result = $stmt->fetch();

			return $result;

			$conex = null;
		} #Fin Funcion InfoUsuario
	}
?>