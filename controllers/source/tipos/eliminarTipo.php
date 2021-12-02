<?php
	if ( $this->model->tipos->drop($param[0]) ) {
		 header('location:'. constant('URL').'tipos');
	} else {
		 $this->view->mensaje = '¡Ha ocurrido un error!';

	}

	$this->view->render('tipos/mensaje');
?>