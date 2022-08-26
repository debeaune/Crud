<?php

abstract class Connexion
{

    public function getDataBaseConnexion()
    {
        try
        {
            $user = "root";
            $password = "";
            $pdo = new PDO('mysql:host=localhost;dbname=defiwild',$user,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e){
            print "Erreur !:" . $e->getMessage(). "<br/>";
            die();
        }
    }
}