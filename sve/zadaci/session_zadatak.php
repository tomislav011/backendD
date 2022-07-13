<?php

    //stvaranje kolačića
    setcookie('naziv','vrijednost1',time()+120);
    //ispis podataka iz kolacica
    echo $_COOKIE['naziv'];
    //brisanje
    setcookie('naziv',"",time()-3600);
    //ispis
    print_r($_COOKIE);




    //pokretanje sesije
    session_start();
    //zapisivanje podatka
    $_SESSION['podatak']='podatak';
    //ispis podataka
    echo $_SESSION['podatak']."<br/>";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //zatvaranje session-a
    session_destroy();

    //ponovni ispis
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

?>