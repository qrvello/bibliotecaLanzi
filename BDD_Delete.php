<?php
require_once('FuncionesGeneralesParaBDD.php');
?>

<html>
<center>
	<form method="post" action="buscar.php">
		DNI <input name="dni" type="text"><br>
		<input type="submit" value="Buscar">
	</form>
	<?php echo "DNI: " . $_SESSION['dni'] . "<br>Apellido y nombre: " . $_SESSION['nombre_apellido'] . "<BR>Edad: " . $_SESSION['edad']; ?>
	<form method="post">
		<input name='BotonDelete' type='submit' value='Baja' />
	</form>
	<?php
	if ($_POST['BotonDelete'])
		borrarRegistro();
	?>
</center>

</html>