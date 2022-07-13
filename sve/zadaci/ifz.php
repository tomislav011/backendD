<?php

/*$a=5;
$b=10;
$c=15;

if(($b>$a && $b<$c) || ($b<$a && $b>$c)){
    echo "Vrijednost b je između a i c";
}else{
    echo "Vrijednost b nije između a i c";
}*/


echo date('d')."<br/>"; //dan u mjesecu
echo date('D')."<br/>"; //tekstualna reprezentacija dana
echo date('N')."<br/>"; //dan u tjednu
echo date('F')."<br/>"; //tekstualna reprezentacija mjeseca


// Provjera i ispis rezultata
switch(date('N')){ //date('N') vraća broj - taj broj je naš odabir
    case 1:
        echo 'Danas je ponedjeljak.';
        break;
    case 2:
        echo 'Danas je utorak.';
        break;
    case 3:
        echo 'Danas je srijeda.';
        break;
    case 4:
        echo 'Danas je četvrtak.';
        break;
    case 5:
        echo 'Danas je petak.';
        break;
    case 6:
        echo 'Danas je subota.';
        break;
    case 7:
        echo 'Danas je nedjelja.';
        break;
    default:
        echo 'Nepostojeći dan.';
        break;
}


?>