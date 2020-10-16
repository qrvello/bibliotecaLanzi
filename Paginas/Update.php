<?php
	session_start();

	include '../PHP/funciones.php';


	try {
		
		$link = conectar();
		$numero = $_SESSION['id'];
		$nombre = $_POST['nombre'];
		
		$directorio = "./Logo/";

		if(!is_dir($directorio)){
			mkdir($directorio, 0755, true);
		}
		
		if(move_uploaded_file($_FILES['logo']['tmp_name'], $directorio . $_FILES['logo']['name'])) {
			$logo_ruta = $_FILES['logo']['name'];
		}

		$query = "UPDATE materias
		SET nombre='" . $nombre . "', logo='" . $logo_ruta . "'
		WHERE id=".$numero.";";	

		$resultado = mysqli_query($link, $query);
		if($resultado){

			echo "Registro actualizado correctamente.";
			return $resultado;
		}
		else{
			echo "Registro NO actualizado correctamente.";
			return $resultado;
		}
	} catch (Exception $e) {
		echo "ERROR AL EJERCUTAR UPDATE.";
	}
?>