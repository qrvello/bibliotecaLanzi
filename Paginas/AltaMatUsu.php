<?php

session_start();
require_once('../PHP/AccesoADatos.php');
$db = new AccesoADatos();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ALTA DE MATERIA CON USUARIO</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Estilos/style.css">
	<script src="../JS/Validar.js"></script>
</head>

<body>
	<img src="../Imagenes/imagenTodo.png" height=576px width=1920px />
	<form method="post" name="formulario" id="formulario" action="<?php $db->alta() ?>">
		<table class="highlight">
			<tr>
				<th colspan="2">Datos de la materia</th>
			</tr>
			<tr>
				<td>Numero de Materia</td>
				<td><input type="number" id="nom_materia" name="id_materias"></td>
			</tr>
			<tr>
				<td>Nombre de la Materia</td>
				<td><input type="text" id="nom_materia" name="nombre_ma"></td>
			</tr>
			<tr>
				<th colspan="2">Datos del usuario.</th>
			</tr>
			<tr>
				<td>Tipo del documento</td>
				<td>
					<select class="browser-default" name="tipo_doc">
						<option value="" disabled selected>Tipos de documento</option>
						<option value="DNI">DNI</option>
						<option value="LC">LC</option>
						<option value="LE">LE</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Documento</td>
				<td><input type="text" id="documento" name="numero_doc"></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" id="nombre" name="nombre_alu"></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" id="apellido" name="apellido"></td>
			</tr>
			<tr>
				<td>Año</td>
				<td><input type="text" id="division" name="año"></td>
			</tr>
			<tr>
				<td>Division</td>
				<td><input type="text" id="division" name="division"></td>
			</tr>
		</table>
		<center>
			<input type="submit" class="waves-effect waves-light btn" value="Dar de alta">
			<button type="reset" class="waves-effect waves-light btn" name="reset">
				Borrar datos<i class="material-icons right">delete</i>
			</button>
		</center>
	</form>
	<hr size="2" width="100%" />
	<br>
	<footer class="page-footer black">
		<p>Division 7° 4° año 2020
			<br>
			Proyecto de implementación de sitios web dinámicos
			<br>
			Autores:
			<br>Curvello
			<br>Ferreiros
			<br>Segura
			<br>Benavidez
		</p>
		<br>
	</footer>
</body>

</html>
