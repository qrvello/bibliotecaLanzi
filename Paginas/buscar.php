<?php
 
 include '../PHP/funciones.php';

	session_start();
	  
		try{
			$link = conectar();

			$_SESSION['id']=@$_POST['id'];
			$query="select id, nombre, logo from materias where id = ".$_SESSION['id'];
			//echo $sql;
			//EJECUTAR CONSULTA.
			$resultado=mysqli_query($link,$query) or die("Error");
			if($row = mysqli_fetch_array($resultado)){
				$_SESSION['nombre']= $row[1];
				$_SESSION['logo']= $row[2];
								
				}
			else
			  {
				  $_SESSION['id']='';
				  $_SESSION['nombre']='';
				  $_SESSION['logo']='';
			  }
			 
		    }   
		catch(Exception $e){
			echo "ERROR";
			}

include_once'ModificaMateria.php';