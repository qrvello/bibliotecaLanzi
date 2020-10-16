<?php

function conectar()
{
    $host = 'localhost';
    $user = 'santiago';
    $password = 'riverplate';
    $database = 'biblioteca';
    $link = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        echo "La conexión a la base de datos falló: " . mysqli_connect_error();
    } else {
        return $link;
    }
}

function mostrar()
{
    $link = conectar();
    $query = mysqli_query($link, 'SELECT * FROM materias');
    $materias = mysqli_fetch_assoc($query);
    return $materias;
}
