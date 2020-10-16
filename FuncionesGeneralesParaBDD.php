<?php

error_reporting(0); //ELIMINAR WARNINGS DEL SERVIDOR.
header('Cache-Control: no cache'); //NO ALMACENAR EN CACHÉ LOS DATOS DE LA PÁGINA.
header('Content-Type: text/html; charset=ISO-8859-1'); //PONER ACENTOS EN LA PÁGINA
//mysql_query('SET NAMES "UTF-8"');//REALIZAR BÚSQUEDA CON ACENTOS.
session_start(); //INICIO DE SESIÓN.
session_cache_limiter('private_no_expire'); //CACHÉ SIN EXPIRACIÓN.

#VARIABLES DE SESIÓN.
$_SESSION['dni'];
$_SESSION['nombre_apellido'];
$_SESSION['edad/'];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Mostrar()
{
	//BLOQUE DE CÓDIGO QUE SE EJECUTA CUANDO SE HACE include DE ESTE ARCHIVO.
	if ($_POST['dni']) {
		try {
			$db = Conectar();
			$dni = $_POST['dni'];
			$sql = "select * from alumnos where dni=" . $dni;
			//EJECUTAR CONSULTA.
			$resultado = mysqli_query($db, $sql) or die("Error al ejecutar la consulta");
			if ($row = mysqli_fetch_array($resultado)) {
				$nombre_apellido = $row[1];
				$edad = $row[2];
			}
		} catch (Exception $e) {
			echo "ERROR";
		}

		Desconectar($resultado, $db);
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function insertarRegistro()
{
	try {
		$db = conectar();
		$dni = $_POST['dni'];
		$nombre_apellido = $_POST['nombre_apellido'];
		$edad = $_POST['edad'];
		$query = "insert into alumnos (dni, nombre_apellido, edad) values (" . $dni . ", '" . $nombre_apellido . "'," . $edad . ")";
		$resultado = mysqli_query($db, $query);
		if ($resultado)
			echo "Registro insertado correctamente.";
		else
			echo "Registro NO insertado correctamente.";
	} catch (Exception $e) {
		echo "ERROR AL EJERCUTAR INSERT.";
	}


	Desconectar($resultado, $db);
}

function actualizarRegistro()
{
	try {
		
		$db = conectar();
		$dni = $_SESSION['dni'];
		$nombre_apellido = $_POST['nombre_apellido'];
		$edad = $_POST['edad'];
		LimpiarVarSession();

		$query = "UPDATE alumnos
		SET nombre_apellido='" . $nombre_apellido . "', edad=" . $edad . "
		WHERE dni=".$dni.";";

		$resultado = mysqli_query($db, $query);
		if($resultado){

			echo "Registro actualizado correctamente.";
		}
		else{
			echo "Registro NO actualizado correctamente.";
		}
	} catch (Exception $e) {
		echo "ERROR AL EJERCUTAR INSERT.";
	}

	Desconectar($resultado, $db);
}


function SeleccionarRegistro()
{

	$db = Conectar();

	$sql = "select * from persona where dni=" . $_POST['dni'];

	$resultado = mysqli_query($db, $sql);

	if ($row = mysqli_fetch_array($resultado)) {
		$ayn = $row[1];
		$edad = $row[1];
	}

	Desconectar($resultado, $db);
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function borrarRegistro()
{
	if ($_POST['BotonDelete']) {
		try {
			$db = conectar();

			$sql = "delete from alumnos where dni=" . $_SESSION['dni'];
			$resultado = mysqli_query($db, $sql) or die("Error al ejecutar consulta delete.");
			if ($resultado) {
				echo "Registro eliminado correctamente";
				LimpiarVarSession();	
			} else {
				echo "Registro NO Eliminado correctamente.";
			}
		} catch (Exception $e) {
			echo "ERROR AL EJERCUTAR DELETE.";
		}
	}
}

function conectar()
{
	$link = mysqli_connect('localhost', 'santiago', 'riverplate', 'piswd');

	return $link;
}

function Desconectar($resultado, $db)
{
	if ($db)
		//LIBERAR CONEXIÓN A SERVIDOR.
		mysqli_close($db);
}

function LimpiarVarSession()
{
	$_SESSION['dni'] = '';
	$_SESSION['nombre_apellido'] = '';
	$_SESSION['edad'] = '';
}
