<?php

require_once('Connexion.php');

class Members extends Connexion
{
    public function members(): array
    {
        $statement = $this->getDataBaseConnexion()->query('SELECT * FROM members');
    
        return $statement->fetchAll();
    }
    
    public function createMember($name)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $name = $_POST['name'];
            $statement =  $this->getDataBaseConnexion()->query("INSERT INTO member (name) VALUES ('$name')");    
            
            return $statement->fetchAll();
        }
    }
}