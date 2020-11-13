<?php

class Database
{
    public static function conectar()
    {
        $db = new mysqli('localhost', 'santiago', 'riverplate', 'biblioteca');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
