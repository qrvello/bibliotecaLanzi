<?php
session_start();

require_once('../PHP/AccesoADatos.php');
$db = new AccesoADatos();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Listado de materias</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Estilos/style.css">
    <script src="../JS/Validar.js"></script>
</head>

<body>
    <img src="../Imagenes/imagenTodo.png" width=100% />
    <div class="container">
        <h1>Materias</h1>
        <br><br>
        <table id="tabla-materias">
            <thead>
                <tr>
                    <th>Número de materia</th>
                    <th>Nombre de materia</th>
                    <th>Año</th>
                    <th>División</th>
                </tr>
            </thead>
            <tbody>
                <?php $db->mostrar_materias() ?>
            </tbody>

        </table>
        <br><br>
        <button type="button" class="waves-effect waves-light btn" onclick="mostrar_cantidad_materias()">
            Contar materias
        </button>
        <br><br>

    </div>

</body>
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

</html>