<?php

require_once('Connexion.php');

class Members extends Connexion
{

    public function getMembers(): array
    {
        return $this->query('SELECT * FROM member');
    }
    
    public function createMembers(string $name): void
    {
        $this->insert($name);
        header('Location:index.php');
    }
}