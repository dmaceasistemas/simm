<?php
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

require 'conexion.php';

$sql="SELECT * FROM usuario WHERE id_usuario='$usuario' AND clave='$clave';";


$resultado=pg_query($sql) or die('Falla en la consulta' . pg_last_error());

//	while ($fila = pg_fetch_array($resultado, null, PGSQL_ASSOC))
	while ($fila = pg_fetch_array($resultado))
	{
		$usuario_valido=$fila['id_usuario'];
		$clave_valida=$fila['clave'];
		$_SESSION['nombre_usuario']=$fila['nombres']." ".$fila['apellidos'];
	}

	if ((trim($usuario)==trim($usuario_valido)) && (trim($clave)==trim($clave_valida)))
	{
		$_SESSION['usuario']=$usuario;
		
		echo '
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=envio_mensaje.php"
				</head>
			
			</html>
		
		';
	}
	else
	{		
		echo "<script language=javascript>";
		echo 'alert("Usuario o clave de acceso invalido")';
		echo "</script>";
		echo '
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=inicio_sesion.php"
				</head>
			</html>';
	}

?>