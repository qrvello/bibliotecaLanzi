<?php
session_start();
require_once('FuncionesGeneralesParaBDD.php');
?>

<html>

<head>

</head>

<body>
	<center>
		<fieldset>
			<legend>Datos</legend>
			<form name="formulario" method="post" action="buscar.php">
				DNI
				<input name="dni" method="post" type="text" value='<?php echo $_SESSION['dni']; ?>' onblur="form.submit();"><br>
			</form>
			<form name="formulario" method="post">
				Nombre y apellido
				<input name="nombre_apellido" type="text" value='<?php echo $_SESSION['nombre_apellido']; ?>'>
				<br>
				Edad <input name="edad" type="text" value='<?php echo $_SESSION['edad']; ?>'>
				<br>
				<input name="BotonUpdate" type="submit" value="Actualizar">
			</form>
		</fieldset>
	</center>
	<?php
	if ($_POST['BotonUpdate']) {
		actualizarRegistro();
	}
	?>
</body>

</html>