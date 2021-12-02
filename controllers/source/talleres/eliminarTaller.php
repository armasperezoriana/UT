<?php
	if ( $this->model->talleres->drop($param[0]) ) {
		 header('location:'. constant('URL').'talleres');
	} else {
 $this->view->mensaje = '¡Ha ocurrido un error!';
	}

		$this->view->render('talleres/mensaje');
?>