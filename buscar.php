<?php
 
 include 'FuncionesGeneralesParaBDD.php';

	session_start();
	  
		try{
			$db = conectar();

			$_SESSION['dni']=@$_POST['dni'];
			$query="select dni, nombre_apellido, edad from alumnos where dni = ".$_SESSION['dni'];
			//echo $sql;
			//EJECUTAR CONSULTA.
			$resultado=mysqli_query($db,$query) or die("Error");
			if($row = mysqli_fetch_array($resultado)){
				$_SESSION['nombre_apellido']= $row[1];
				$_SESSION['edad']= $row[2];
				//echo "dddd";				
				}
			else
			  {
				  $_SESSION['dni']='';
				  $_SESSION['nombre_apellido']='';
				  $_SESSION['edad']='';
			  }
			 
		    }   
		catch(Exception $e){
			echo "ERROR";
			}
		
		Desconectar($resultado,$db);
		header("location:".$_SERVER['HTTP_REFERER']);
