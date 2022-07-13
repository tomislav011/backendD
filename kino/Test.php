<?php
    require ('Kino.php');
    require ('Korisnik.php');
    require ('Film.php');

    $kino = Kino::dohvatiInstancu();

    $korisnik1=new Korisnik();
    $korisnik2=new Korisnik();
    $korisnik3=new Korisnik();
    $korisnik4=new Korisnik();

    $kino->attach($korisnik1);
    $kino->attach($korisnik2);
    $kino->attach($korisnik3);
    $kino->attach($korisnik4);

    $film = new Film('Novi film',125);
    $kino->dodajFilm($film);


?>