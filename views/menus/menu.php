<div id="menu">
  <ul>
  	<?php if($array["permiso_usuario"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>usuarios">Usuario</a></li>
    	<?php } ?>
    <?php if($array["permisos_vehiculos"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>vehiculos">Vehiculo</a></li>
      <?php } ?>
	<?php if($array["permiso_choferes"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>choferes">Chofer</a></li>
      <?php } ?>
	<?php if($array["permiso_rutas"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>rutas">Ruta</a></li>
      <?php } ?>
	<?php if($array["permiso_taller"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>talleres">Taller</a></li>
      <?php } ?>
	<?php if($array["permiso_mantenimiento"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>opcion">Mantenimiento</a></li>
      <?php } ?>

     <?php if($array["permiso_seguridad"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>seguridad">Seguridad</a></li>
      <?php } ?>
	<?php if($array["permiso_reportes"] != "restringido"){?>
      <li><a href="<?php echo constant('URL')?>reportes">Reportes</a></li>
      <?php } ?>

      <li><a href="<?php echo constant('URL')?>main/cerrarSession">Cerrar sesion</a></li>
    

  </ul>
</div>

