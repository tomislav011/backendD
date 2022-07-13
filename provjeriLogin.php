<?php
ini_set('display_errors',1); //određuje da li će se greške prikazivati korisniku
ini_set('display_startup_errors',1);
error_reporting(E_ALL); //E_WARNING,E_NOTICE,E_PARSE,E_ERROR,E_ALL

//pokretanje sesije
session_start();

$pdo=require 'Konekcija.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    try{
        $statement = $pdo->prepare("SELECT * FROM korisnik WHERE username=? AND pass=?");
        $statement->execute([$username,$password]);

        if($statement->rowCount()>0){ //num_rows - mysqli
            $korisnici = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($korisnici as $korisnik){
                $_SESSION['user']=$data['username'];
                header('Location: /pocetna.php');
            }
        }else{
            header('Location: /login.php');
        }
        $pdo = null;
        $statement=null;
    }catch(PDOException $exception){
        var_dump($exception);
        throw $exception;
    }

?>