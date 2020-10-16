<?php
    require_once('FuncionesGeneralesParaBDD.php');
?>

<html>
	<body>
		<center>
			<form method="post" >
				DNI <input name='dni' type='text' ><br>	
				Nombre y apellido <input name='nombre_apellido' type='text' ><br>
				Edad <input name='edad' type='text' ><br>
				<input name='BotonInsert' type='submit' value='Alta' /> 
			</form>
			<?php 
				if($_POST['BotonInsert'])
				  {
					  insertarRegistro();
				  }	 
			?>
		</center>
	</body>
</html>