<?php

abstract class Connexion
{
    private $dbconnect = null;
    private $db_user;
    private $db_password;

    public function __construct($db_user='root',$db_password='') {
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    private function getPDO(){
        if($this->dbconnect === null){
            $pdo= new PDO('mysql:host=localhost;dbname=defiwild',
            $this->db_user,
            $this->db_password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
            $this->dbconnect = $pdo;
        }
        return $this->dbconnect;
    }

    public function query( string $statement): array{

        return $this->getPDO()->query($statement)->fetchAll();
    }

    public function insert(string $name){

        $request = 'INSERT into member (name) VALUES (:name)';
        $statement = $this->getPDO()->prepare($request);
        $statement->bindvalue(':name',$name);
        $statement->execute();
    }
    
}