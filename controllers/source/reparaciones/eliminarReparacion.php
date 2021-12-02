<?php
	if ( $this->model->reparaciones->drop($param[0]) ) {
		header('location:'. constant('URL').'reparaciones');
	} else {
		 $this->view->mensaje = '¡Ha ocurrido un error!';

	}

	$this->view->render('reparaciones/mensaje');
?>