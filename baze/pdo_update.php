<?php
    $pdo=require 'Konekcija.php';
    






    //$stmt = $pdo->prepare("UPDATE korisnik SET ime=? WHERE id=?");
    //$stmt->execute(['Petar',5]);

    $pdo->prepare("UPDATE korisnik SET prezime=? WHERE id=?")->execute(['Petrovic',5]);
    /*foreach($podaci as $podatak){
        $stmt->execute($podatak);
    }*/
?>