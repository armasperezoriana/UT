<?php
	if ( $this->model->vehiculos->drop($param[0]) ) {
		 header('location:'. constant('URL').'vehiculos');
	} else {
		 $this->view->mensaje = '¡Ha ocurrido un error!';

	}

	$this->view->render('vehiculos/mensaje');
?>