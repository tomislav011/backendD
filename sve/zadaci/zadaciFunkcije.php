<?php

    function ime_prezime($name,$surrname){
        $imePrezime = $name." ".$surrname;
        return strtoupper($imePrezime);
    }

    $v = ime_prezime("Pero","Peric");
    //echo $v;


    /*
        Napisati funkcije za zbrajanje, razliku, umnožak i kvocijent dva broja. Zatim napisati funkciju
        koja će pozivati sve te funkcije odjednom.
    */

    function zbrajanje($a,$b){
        return $a+$b;
    }
    function oduzimanje($a,$b){
        return $a-$b;
    }
    function mnozenje($a,$b){
        return $a*$b;
    }
    function dijeljenje($a,$b){
        return $a/$b;
    }

    function racunske_operacije($a,$b){
        echo "Zbroj: ".zbrajanje($a,$b)." Oduzimanje: ".oduzimanje($a,$b)." Mnozenje: ".mnozenje($a,$b)." Dijeljenje: ".dijeljenje($a,$b)."<br/>";
    }

    
    //racunske_operacije(5,10);


    /*
        Napisati funkciju koja prima varijabilni broj argumenata. Parametri su kombinirani brojevi i stringovi.
        Za svaki parametar ispisati kojeg je tipa.
    */

    function funkcija(){

        $parametri = func_get_args();

        foreach($parametri as $parametar){
            if(is_int($parametar)){
                echo $parametar." je broj <br/>";
            }else{
                echo $parametar." je string <br/>";
            }
        }
    }

    //funkcija(2,4,"Pero",10,"Marica","A");

    function dodavanje($number){
        static $lokalna = 0;
        $lokalna+=$number;
        return $lokalna;
    }

    $v = 'dodavanje';

    echo $v(rand(1,10))."<br/>";
    echo $v(rand(1,10))."<br/>";
    echo $v(rand(1,10))."<br/>";
    echo $v(rand(1,10))."<br/>";
    echo $v(rand(1,10))."<br/>";

?>