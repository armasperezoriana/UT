<?php
	if ( $this->model->mantenimientos->drop($param[0]) ) {
		 header('location:'. constant('URL').'mantenimientos');
	} else {
	$this->view->mensaje = '¡Ha ocurrido un error!';

	}

	$this->view->render('mantenimientos/mensaje');
?>