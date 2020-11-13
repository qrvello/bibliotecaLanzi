<?php

session_start();

	include '../PHP/funciones.php';

	try {
		
		$link = conectar();
		$numero = $_POST['id_materias'];
		$nombre_ma = $_POST['nombre_ma'];
		$nombre_alu = $_POST['nombre_alu'];
		$apellido = $_POST['apellido'];
		$año = $_POST['año'];
		$division = $_POST['division'];
		$tipo_dni = $_POST['tipo_doc'];
		$dni = $_POST['numero_doc'];

		$query_ma = "CALL alta_materia('$numero', '$nombre_ma', '$año', '$division');";
		$query_alu = "CALL alta_usuario('$nombre_alu', '$apellido', '$año', '$division', '$tipo_dni', '$dni');";
		$resultado = mysqli_query($link, $query_ma);
		$resultado2 = mysqli_query($link, $query_alu);
		
		if($resultado&&$resultado2) echo "<center> Materia creada correctamente </center>.";
		
		else echo "Alumno NO registrado correctamente.";
			
		
		return $resultado2; 
		return $resultado;

	} catch (Exception $e) {
		echo "ERROR AL EJERCUTAR INSERT.";
	}
?>