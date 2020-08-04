function Main()
{
	var numerom = document.getElementById("numerom").value;
	var nombrem = document.getElementById("nombrem").value;
	var logom = document.getElementById("logom").value;

	var frase = numerom;
	var caracteres = frase.length; 
	var num = 3;

	var frase2 = nombrem;
	var caracteres2 = frase2.length;
	var num2 = 50;

	if (numerom == "")
	{
		alert("El campo: número de materia está vacío, complételo para seguir");
	}
	if (caracteres > num)
	{
		alert("El campo: número de materia no es válido, ingrese hasta un máximo de 3 digitos");
	}
	if (nombrem == "")
	{
		alert("EL campo: Nombre de materia esta vacío, complételo para seguir");
	}
	if (caracteres2 > num2)
	{
		alert("El campo: nombre de materia no es válido, ingrese hasta un máximo de 50 caracteres");
	}
	if (logom == "")
	{
		alert("El campo: logo de materia esta vacío, complételo para seguir");
	}
}

function mostrar_cantidad_materias()
{
	var materias = document.getElementById("tabla-materias").rows.length;
	materias = materias - 1;
	alert("Cantidad de materias: "+materias);
}

function mostrar_cantidad_alumnos()
{
	var alumnos = document.getElementById("tabla-alumnos").rows.length;
	alumnos = alumnos - 1;
	alert("Cantidad de alumnos: "+alumnos);
}

function Validar()
{
	
	var nom_materia= document.getElementById("nom_materia").value;
	var num_materia = document.getElementById("num_materia").value;
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var division = document.getElementById("division").value;
	var documento = document.getElementById("documento").value;
	
	var frase3 = num_materia;
	var caracteres3 = frase3.length;
	var num3 = 10;

	if (num_materia == "")
	{
		alert("El campo: El número de materia esta vacio, completelo para seguir");
	}
	if (caracteres > num)
	{
		alert("El campo: número de materia no es valido, ingrese hasta un maximo de 3 digitos");
	}

	if (nom_materia == "")
	{
		alert("El campo: Nombre de materia esta vacio, completelo para seguir");
	}
	if(caracteres2 > num2)
	{
		alert("El campo: Nombre de no es valido, ingrese hasta un maximo de 50 caracteres");
	}

	if (documento == "")
	{
		alert("El campo: Documento esta vacio, completelo para seguir");
	}
	if(caracteres3 > num3)
	{
		alert("El campo: Documento no es valido, ingrese hasta un maximo de 10 caracteres");
	}
	if (nombre == "")
	{
		alert("El campo: Nombre esta vacio, completelo para seguir");
	}
	if (apellido == "")
	{
		alert("El campo: Nombre esta vacio, completelo para seguir");
	}
	if (division == "")
	{
		alert("El campo: Nombre esta vacio, completelo para seguir");
	}
}				
