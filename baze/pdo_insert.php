<?php
    $pdo=require 'Konekcija.php';

    /*$ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];


    $podaci=[
        'ime'=>$ime,
        'prezime'=>$prezime,
        'username'=>$username,
        'pass'=>$pass,
    ];*/


    //$stmt = $pdo->prepare("INSERT INTO korisnik(ime,prezime,username,pass) VALUES(:ime,:prezime,:username,:pass)");
    //$stmt->execute($podaci);
    /*$stmt->execute([
        ':ime'=>$ime,
        ':prezime'=>$prezime, ...
    ]);*/
    
    //$stmt = $pdo->prepare("INSERT INTO korisnik(ime,prezime,username,pass) VALUES(?,?,?,?)");
    //$stmt->execute([$ime,$prezime,$username,$pass]);

    $podaci=[
        ['Ime','Prezime','iprezime','pass'],
        ['Marinko','Marinkovic','mmarinkovic','1111'],
    ];
    
    try{
        //pokrecemo transakciju
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO korisnik(ime,prezime,username,pass) VALUES(?,?,?,?)");
        foreach($podaci as $podatak){
            $stmt->execute($podatak);
        }
        //commit transakcije -  promjene postaju trajne za sve korisnike
        $pdo->commit();
    }catch(PDOException $e){
        $pdo->rollBack();
        echo $e->getMessage();
    }
?>