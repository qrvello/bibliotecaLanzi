<?php
	session_start();

	include '../PHP/funciones.php';
	header('Location: ModificaMateria.php');

	try {
		
		$link = conectar();
		
		$numero = $_SESSION['id'];
		$nombre = $_POST['nombre'];
		$logo_ruta='';
		$directorio = "../Logo/";

		if(!is_dir($directorio)){
			mkdir($directorio, 0755, true);
		}
		
		if(move_uploaded_file($_FILES['logo']['tmp_name'], $directorio . $_FILES['logo']['name'])) {
			$logo_ruta = $_FILES['logo']['name'];
		}
		
		$query = "CALL Update_materia('$nombre', '$logo_ruta',$numero);";	

		$resultado = mysqli_query($link, $query);
		if($resultado)
			echo "<center> <h3>Registro actualizado correctamente </h3></center>.";
		
		else
			echo "Registro NO actualizado correctamente.";
		
		return $resultado;

	} catch (Exception $e) {
		echo "ERROR AL EJERCUTAR INSERT.";
	}
?>