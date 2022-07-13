<?php

//proceduralni nacin spajanja
//$db = mysql_connect('localhost','tomislav','1234','classicmodels');

//objektno orijentirani nacin
$db = new mysqli('localhost','tomislav','1234','classicmodels'); //3306 port

//PDO (PHP Data Objects) ekstenzija 
//$db = new PDO("mysql:host=localhost;dbname=classicmodels","tomislav","1234");

if($db->connect_error){ //proceduralni stil mysqli_connect_error()

    echo "Pogreska prilikom spajanja na bazu podataka! <br/>";

}else{
    echo "Uspjesno spajanje na bazu!";

    $rezultat = $db->query("SELECT * FROM customers");

    //provjera ima li rezultata
    if($rezultat->num_rows>0){
        while($redak=$rezultat->fetch_assoc()){
            echo $redak['customerNumber']."  ".$redak['customerName']."<br/>";
        }
    }
    
} 

$db->close();


/*
public __construct(
    string $hostname = ini_get("mysqli.default_host"),
    string $username = ini_get("mysqli.default_user"),
    string $password = ini_get("mysqli.default_pw"),
    string $database = "",
    int $port = ini_get("mysqli.default_port"),
    string $socket = ini_get("mysqli.default_socket")
)
*/



?>