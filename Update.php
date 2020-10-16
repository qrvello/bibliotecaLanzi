<?php
session_start();

try{
			
			$servername = "localhost";
			$username = "santiago";
			$password = "riverplate";
			$dbname = "basededatos";
			
			//CREAR CONEXIÓN.
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			//VERIFICAR CONEXIÓN.
			if ($conn->connect_error) 
				die("Connection failed: " . $conn->connect_error);
			
			$dni= $_SESSION['dnis'];
			$ayn=@$_POST['nombreapellido'];
			$edad=@$_POST['edad'];
			
			$ayn="'".$ayn."'";
					 
				
			$sql = "UPDATE alumnos SET nombreapellido = ".$ayn.",edad=".$edad." WHERE dni = ".$dni;
			echo $sql;
			if($conn->query($sql))
			   echo "Registro Acutalizado correctamente.";
			else
               	echo "Registro NO Acutalizado correctamente.";	
            
			$conn->close();
			
			#RESETEAR VARIABLES DE SESIÓN.	
			$_SESSION['dnis']='';
			$_SESSION['ayns']='';
			$_SESSION['edads']='';
			
	}
	
	catch(Exception $e){
			echo "ERROR AL EJERCUTAR UPDATE.";
		   }
	header("Location: " . $_SERVER['HTTP_REFERER']);
	
	
?>