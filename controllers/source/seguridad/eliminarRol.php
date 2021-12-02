<?php
	if ( $this->model->seguridad->drop($param[0]) ) {
		 header('location:'. constant('URL').'seguridad');
	} else {
		$this->view->mensaje = '¡Ha ocurrido un error!';
	}
	$this->view->render('seguridad/mensaje');
?>