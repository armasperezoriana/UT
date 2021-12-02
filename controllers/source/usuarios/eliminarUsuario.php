<?php
	if ($param[0] == 0) {
		 $this->view->mensaje = '¡No se puede eliminar al usuario root!';
	}else{
			if ( $this->model->usuarios->drop($param[0]) ) {
		 header('location:'. constant('URL').'usuarios');
	} else {
		 $this->view->mensaje = '¡Ha ocurrido un error!';

	}
	}


$this->view->render('usuarios/mensaje');
?>