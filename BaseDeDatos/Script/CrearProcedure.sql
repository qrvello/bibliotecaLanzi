use biblioteca;

DELIMITER //

DROP PROCEDURE IF EXISTS Update_materia
//
CREATE PROCEDURE Update_materia (in p_nombre varchar (100), in logo_ruta varchar (200),numero int (10) )

BEGIN
	UPDATE materias 
	SET nombre = p_nombre, logo=logo_ruta 
	WHERE id = numero;

END//

DROP PROCEDURE IF EXISTS Search
//
CREATE PROCEDURE Search (numero int (10) )

BEGIN
	
	SELECT nombre, logo
	FROM materias
	WHERE id = numero;

END//

DROP PROCEDURE IF EXISTS MostrarUsuarios
//
CREATE PROCEDURE MostrarUsuarios ( )

BEGIN
	SELECT * FROM alumnos;

END//

DROP PROCEDURE IF EXISTS MostrarMaterias
//
CREATE PROCEDURE MostrarMaterias ( )

BEGIN
	SELECT * FROM materias;

END//

DROP PROCEDURE IF EXISTS alta_usuario
//
CREATE PROCEDURE alta_usuario (in nombre_alu_p varchar (100), in apellido_p varchar(100), in año_p int(10), in division_p int(10), in tipo_dni_p varchar(4), in dni int(10) )

BEGIN
INSERT INTO alumnos(numero_doc, tipo_doc, nombre, apellido, año, division)

VALUES (dni, tipo_dni_p, nombre_alu_p, apellido_p, año_p, division_p);

END//

DROP PROCEDURE IF EXISTS alta_materia
//
CREATE PROCEDURE alta_materia (in numero_p int(10), in nombre_ma_p varchar (100), in año_p int(10), in division_p int(10) )

BEGIN
	INSERT INTO materias(id, nombre, año, division, logo)

	 VALUES (numero_p, nombre_ma_p, año_p, division_p, null);

END//

delimiter ;