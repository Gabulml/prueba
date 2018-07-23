<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=pruebamysql.mysql.database.azure.com;dbname=alumnos;charset=utf8', 'GabyCuaspud@pruebamysql', 'Cat221995');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
