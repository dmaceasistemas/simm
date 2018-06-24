<?php

session_start();

require 'conexion.php';
$texto=$_POST['txt'];
$firma=$_POST['firma'];
$mensaje=$firma.": ".$texto;
$fecha=date("Y-n-j").' '.date("H:i:s");
$usuario=$_SESSION["usuario"];
$totalfilas = $_POST["totalfilas"];
$ip=$_SERVER['REMOTE_ADDR'];

//IP

	$sql_identificador_mensaje="SELECT identificador FROM mensaje ORDER BY id_mensaje DESC LIMIT 1;";

	$resultado_identificador_mensaje=pg_query($sql_identificador_mensaje) or die ('Falla en la consulta sql_identificador_mensaje' . pg_last_error());

	while ($fila=pg_fetch_array($resultado_identificador_mensaje))
	{
		$identificador=($fila['identificador'] + 1);
	}

	for($i=0; $i <= $totalfilas; $i++)
	{	
		if (array_key_exists('chk'.$i, $_POST))
		{
			$id_grupo = $_POST['id_grupo'.$i];
		
			$sql="SELECT contacto.telefono, contacto.id_contacto FROM contacto, contacto_grupo WHERE contacto.id_contacto=contacto_grupo.id_contacto AND id_grupo=$id_grupo;";
				
			$resultado=pg_query($sql) or die('Falla en la consulta sql' . pg_last_error());
		
			while ($fila = pg_fetch_array($resultado))
			{
				$id_contacto=$fila['id_contacto'];
				$numero=$fila['telefono'];
				$doc = new DOMDocument;
		//		$doc->load("http://172.16.5.196:9090/sendsms?phone=$numero&text=$mensaje"); //tlf prueba
				//$doc->load("http://172.16.5.5:9090/sendsms?phone=$numero&text=$mensaje"); //tlf jose
				$doc->load("http://172.16.5.1:9090/sendsms?phone=$numero&text=$mensaje"); //tableta
			
				$sql_insertar_mensaje="INSERT INTO mensaje (identificador, fecha, id_contacto, id_usuario, mensaje, estado,ip) VALUES
												   ($identificador,'$fecha',$id_contacto,'$usuario','$texto','','$ip')";

				$resultado_insert_mensaje=pg_query($sql_insertar_mensaje) or die('Falla en sql_insertar_mensaje' . pg_last_error());
			
			}
		
		
		}
	
	}

echo "<script language=javascript>";
echo " alert ('Mensaje Enviado!!');";
echo "</script>";

echo '<html>
		<head>
			<meta http-equiv="REFRESH" content="0; url=envio_mensaje.php"
		</head>
	  </html>';


?>



