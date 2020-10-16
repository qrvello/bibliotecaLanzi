<?php
session_start();
require_once('../PHP/funciones.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Modificacion de materias</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Estilos/style.css">
	<script src="../JS/Validar.js"></script>
</head>

<body>
	<img src="../Imagenes/imagenTodo.png" height=576px width=1920px />
	<h1>
		<center> Modificación de Materias </center>
	</h1>
	<br><br>
	<center>
		<table class="highlight">
			<tr>
				<th colspan="2">Datos de la materia</th>
			</tr>
			<tr>
				<form action="buscar.php" method="post">
					<td>Número de la materia</td>
					<td><input id="id" type="number" name="id" method="post" value='<?php echo $_SESSION['id']; ?>' onblur="form.submit();"> </td>
				</form>
			</tr>
			<form enctype="multipart/form-data" action="Update.php" method="post">
				<tr>
					<td>Nombre de la materia</td>
					<td><input id="nombre" type="text" name="nombre" method="post" value='<?php echo $_SESSION['nombre']; ?>' onblur="form.submit();"> </td>
				</tr>
				<tr>
					<td>Logo de la materia</td>
					<td>

						<div class="file-field input-field">
							<div class="btn">
								<span>Subir archivo</span>
								<input id="logo" name="logo" type="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>

					</td>
				</tr>
				<button name="BotonUpdate" type="submit" class="btn waves-effect waves-light" onclick="Main()">
					Modificar datos<i class="material-icons right">send</i>
				</button>
			</form>
		</table>
		<br>
		<button type="reset" class="btn waves-effect waves-light">
			Borrar datos<i class="material-icons right">delete</i>
		</button>
	</center>

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