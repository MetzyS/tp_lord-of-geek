<?php

class AccesDonnees
{
    private static $dsn = "mysql:host=localhost;dbname=lord_of_geek;charset=utf8";
    private static $username = "root";
    private static $password = "";

    private static $pdo;

    public static function getPdo()
    {
        if (AccesDonnees::$pdo == null) {
            AccesDonnees::$pdo = new PDO(AccesDonnees::$dsn, AccesDonnees::$username, AccesDonnees::$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return AccesDonnees::$pdo;
    }

    public static function query(string $requete_sql)
    {
        return AccesDonnees::getPdo()->query($requete_sql);
    }

    public static function exec(string $requete_sql)
    {
        return AccesDonnees::getPdo()->exec($requete_sql);
    }
}
