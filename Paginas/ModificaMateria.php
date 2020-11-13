<?php
session_start();
require_once('../PHP/AccesoADatos.php');
$db = new AccesoADatos();
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
		<img src="../Imagenes/imagenTodo.png" width="100%" />
		<div class="container">

			<h1><center> Modificación de Materias </center></h1>
			<br><br>
			<center>
				<table class="highlight">
					<tr>
						<th colspan="2">Datos de la materia</th>
					</tr>
					<tr>
						<form action="<?php $db->buscar() ?>" method="post">
							<td>Número de la materia</td>
							<td><input id="id" type="number" name="id" method="post" value='<?php echo $_SESSION['id'] ; ?>'  onblur="form.submit();"> </td>
						</form>
					</tr>
					<form enctype="multipart/form-data" action="" method="post">
					<tr>
						<td>Nombre de la materia</td>
						<td><input id="nombre" type="text" name="nombre" method="post" value='<?php echo $_SESSION['nombre'] ; ?>'  onblur="form.submit();"> </td>
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
								<input class="file-path validate" type="text" value='<?php echo $_SESSION['logo'] ; ?>' onblur="form.submit();">
								</div>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<button type="reset" class="btn waves-effect waves-light">
					Limpiar<i class="material-icons right">delete</i>
				</button>

				<button name="BotonUpdate" type="submit" class="btn waves-effect waves-light" onclick="validar_modificar_materia()">
					Modificar datos<i class="material-icons right">send</i>
				</button>
				</form>
				
			</center>
			
		</div>
	</body>
		<hr size="2" width="100%"/>
		<footer class="page-footer black">
			<p>Division 7° 4° año 2020</p>
			<p>Proyecto de implementación de sitios web dinámicos<p>
			<p>Autores:</p>
			<p>Curvello</p>
			<p>Ferreiros</p>
			<p>Segura</p>
			<p>Benavidez</p>
		</footer>
</html>