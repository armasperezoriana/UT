<?php
	if ( $this->model->choferes->drop($param[0]) ) {
				 header('location:'. constant('URL').'choferes');
	} else {
		 $this->view->mensaje = '¡Ha ocurrido un error!';

	}

	$this->view->render('choferes/mensaje');
?>