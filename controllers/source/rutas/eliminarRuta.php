<?php
	if ( $this->model->rutas->drop($param[0]) ) {
		 header('location:'. constant('URL').'rutas');
	} else {
	$this->view->mensaje = '¡Ha ocurrido un error!';

	}

		$this->view->render('rutas/mensaje');
?>