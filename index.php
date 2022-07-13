<?php

   /*require 'src/D1/Klasa.php';
   require 'src/D2/Klasa.php';
   use D2\Klasa as D2;
   use D1\Klasa as D1;

   new D2();*/

   
   ini_set('display_errors',1); //određuje da li će se greške prikazivati korisniku
   ini_set('display_startup_errors',1);
   error_reporting(E_ALL); //E_WARNING,E_NOTICE,E_PARSE,E_ERROR,E_ALL

   //pokretanje sesije
   session_start();

   //ako je varijabla user postavljena znači da je korisnik već prijavljen
   if (isset($_SESSION['user'])) {
      header('Location: /pocetna.php'); //preusmjeravanje na pocetna.php
   }else{
      header('Location: /login.php');
   } 
?>