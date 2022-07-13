<?php

/*echo "Prije uvjeta...<br/>";

if(4 > 3){ //rezultat provjere 4 > 3 je true
    echo "Cetiri je vece od tri!<br/>";
}else{
    //4 manje od 3
    // 4 jednako 3
    echo "Cetiri nije vece od tri!<br/>";
}

echo "Nakon uvjeta...";*/

$a=5;
$b=10;
$odabir = 4;

switch($odabir){
    //zbrajanje
    case 1:
        echo "Rezultat zbrajanja je: ".($a+$b)."<br/>";
        break;
    //oduzimanje
    case 2:
        echo "Rezultat oduzianja je: ".($a-$b)."<br/>";
        break;
    //mnozenje
    case 3:
        echo "Rezultat mnozenja je: ".($a*$b)."<br/>";
        break;
    //dijeljenje
    case 4:
        echo "Rezultat dijeljenja je: ".($a/$b)."<br/>";
        break;
    default:
        echo "Neispravan unos!";
        break;
}


/*
$rezultat = 1000;

if($rezultat>=0 && $rezultat<=100){
    if($rezultat>=85){
        echo "5";
    }else if($rezultat>=75){
        echo "4";
    }else if($rezultat>=65){
        echo "3";
    }else if($rezultat>=50){
        echo "2";
    }else{
        echo "1";
    }
}else{
    echo "Neispravan unos!";
}*/


/*if($rezultat>=0 && $rezultat<=100){
    if($rezultat>=85){
        echo "5";
    }else{
        if($rezultat>=75){
            echo "4";
        }else{
            if($rezultat>=65){
                echo "3";
            }else{
                if($rezultat>=50){
                    echo "2";
                }else{
                    echo "1";
                }
            }
        }
    }
}else{
    echo "Neispravan unos!";
}*/


?>