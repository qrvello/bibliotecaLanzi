<?php
session_start();
require_once('../PHP/AccesoADatos.php');
$db = new AccesoADatos();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Estilos/style.css">
    <script src="../JS/Validar.js"></script>
</head>

<body>
    <center>
        <img src="../Imagenes/imagenTodo.png" height=576px width=1920px />
        <h1>Lista de usuarios</h1>
        <br><br>
        <table class="centered" id="tabla-alumnos">
            <tr>
                <th>Tipo de Doc.</th>
                <th>Nro. Doc.</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Año</th>
                <th>División</th>
            </tr>

            <?php $db->mostrar_alumnos() ?>

        </table>
        <br><br>
        <input type="button" class="waves-effect waves-light btn" value="Contar alumnos" onclick="Mostrar_cantidad_alumnos()" />
        <br><br>
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