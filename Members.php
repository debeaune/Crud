<?php

require_once('Connexion.php');

class Members extends Connexion
{

    public function getMembers()
    {
        $statement = $this->getDataBaseConnexion()->query('SELECT * FROM member');
    
        return $statement->fetchAll();
    }
    
    public function createMember($name): string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            try {
                $name = $_POST['name'];
                $statement =  $this->getDataBaseConnexion()->query("INSERT INTO member (name) VALUES ('$name')");    
                return "Le nom est bien inséré en base de données";
            } catch (\Throwable $th) {
                return "Oups, une erreur s'est produite";
            }
        }
    }
}