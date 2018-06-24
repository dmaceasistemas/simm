<?php
session_start();

$conexion = pg_connect("host=172.16.0.25 dbname=db_simm user=dba password=d84@54");

//or die('No se ha podido conectar: ' . pg_last_error());

		
		if (!$conexion)
		{
			die('No se puede conectar a la Base de Datos' . pg_last_error());						
		}
/*		else
		{
			echo "conecto";		
		}

*/	
		//pg_close($conexion);