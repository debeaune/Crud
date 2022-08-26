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
            var_dump($_POST);
        
            /*try
            {
                $con = getDatabaseConnexion();
                $sql = "INSERT INTO member (name)
                VALUES ('$name')";
                $con->exec($sql);
            }
            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }*/
        }
    }
}