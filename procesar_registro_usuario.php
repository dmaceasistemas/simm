<?php
session_start();

require 'conexion.php';

$usuario=$_POST['usuario'];
$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$clave=$_POST['clave'];
//$cedula=$_POST['cedula'];
$unidad_administrativa=$_POST['unidad_administrativa'];
$correo=$_POST['correo'];


$sql="INSERT INTO usuario VALUES ('$usuario','$cedula','$nombres','$apellidos','$unidad_administrativa','$correo','$clave')";

$resultado=pg_query($sql) or die('Falla en la consulta' . pg_last_error());

	while ($fila=pg_fetch_array($resultado))
	{
		$usuario=$fila['usuario'];
		$cedula=$fila['cedula'];
		$nombres=$fila['nombres'];
		$apellidos=$fila['apellidos'];
		$unidad_administrativa=$fila['unidad_administrativa'];
		$correo=$fila['correo'];
		$clave=$fila['clave'];
		
		$valido=true;
	}
	
	if ($valido=true)
	{
		echo "<script language=javascript>";
		echo 'alert("Usuario guardado exitosamente")';
		echo "</script>";
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
		echo 'alert("Error al intentar guardar usuario")';
		echo "</script>";
		echo '
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=registro_usuario.php"
				</head>
			</html>
		
		';
	}

?>