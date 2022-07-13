<?php
    $pdo=require 'Konekcija.php';
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $password = $_POST['pass'];

    //provjera ima li podataka

    try{
        $statement = $pdo->prepare("INSERT INTO korisnik (ime,prezime,username,pass)".
        " VALUES (?,?,?,?)");
        //$statement->bind_param("ssss",$ime,$prezime,$username,$password);
        $statement->execute([$ime,$prezime,$username,$password]);
        //$statement->close();
        header('Location: /login.php'); //preusmjeravamo se na login
    }catch(PDOException $exception){
        var_dump($exception);
        throw $exception;
    }

?>