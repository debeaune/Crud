<?php

    function getDataBaseConnexion(){
        try{
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

    /*function getAllMembers(){
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM member";
        $ps = $con->query($requete);
        return $ps;
    }

    function readMember($id){
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM member where id= '$id'";
        $stmt = $con->query($requete);
        $ps = $stmt->fetchAll();
        if(!empty($ps)) {
            return $ps[0];
        }
    }

    function createMember($name)
    {
        try
        {
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO member (name)
                    VALUES ('$name')";
            $con->exec($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }*/
?>