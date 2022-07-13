<?php
//require 'config.php';

    //fetch

    $pdo=require 'Konekcija.php';
    

    /*$r = $pdo->query("SELECT * FROM korisnik");

    while($redak=$r->fetch())){
        echo $redak['ime']." ".$redak['prezime']."<br/>";
    }*/


    //fetchAll

    /*$r = $pdo->query("SELECT * FROM korisnik");

    $korisnici = $r->fetchAll(PDO::FETCH_ASSOC);

    foreach($korisnici as $korisnik){
        echo $korisnik['ime']." ".$korisnik['prezime']."<br/>";
    }*/

    //prepared statement
    //$r = $pdo->prepare("SELECT * FROM korisnik WHERE ime=:ime");
    //$r->execute([':ime'=>'Pero']);

    $r=$pdo->prepare("SELECT * FROM korisnik WHERE ime=?");
    $r->execute(['Ivo']);

    $korisnici = $r->fetchAll(PDO::FETCH_ASSOC);
    foreach($korisnici as $korisnik){
        echo $korisnik['ime']." ".$korisnik['prezime']."<br/>";
    }



    //fetchColumn


?>