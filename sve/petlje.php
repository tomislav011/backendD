<?php

    /*$i=100;
    while($i>10): //dokle god vrijedi uvjet u zagradi izvršavaj blok koda unutar {}
        //blok koda
        echo $i."<br/>";
        $i++; //ili $i+=1;
    endwhile;*/

    //izvršavaj do blok naredbi dokle god vrijedi while uvjet


    /*
    $i=11;
    
    while($i<10){
        echo "Izvršavam while...<br/>";
    }
    
    
    do{
        echo "Izvršavam do blok ....<br/>";
    }while($i<10);*/



    /*for(kontrolna_varijabla (odakle petlja kreće);uvjet izvršavanja petlje;promjena kontrolne varijable(inkrement/dekrement)){
        //blok koda koji se izvršava
    }*/

    /*$names = ['k1'=>'Harry','k2'=>'Ron','k3'=>'Hermione'];

    echo "Ispis putem for-a <br/>";
    for($i=0;$i<3;$i++){
        echo $names[$i]."<br/>";
    }
    echo "Ispis putem foreach-a bez kljuceva <br/>";
    foreach($names as $name){
        echo $name."<br/>";
    }

    echo "Ispis putem foreach-a uz kljuceve <br/>";
    foreach($names as $key=>$name){
        echo $key." => ".$name."<br/>";
    }*/


    $matrica = [
        [2,4,6],
        [8,10,12],
        [14,16,18]
    ];

    echo "Ispis podataka matrice uz pomoc foreach petlje <br/>";
    foreach($matrica as $element){
        foreach($element as $vrijednost){
            echo $vrijednost." ";
        }
        echo "<br/>";
    }

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $matrica[$i][$j]." ";
        }
        echo "<br/>";
    }


    //sporedna dijagonala je 6 10 14

    /*$j=2;
    for($i=0;$i<3;$i++){ //petlja i prolazi kroz redove matrice
        echo $matrica[$i][$j]." ";
        $j--;
    }*/

    /*$suma=0;
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            if(($j+1)%2!=0){
                $suma+=$matrica[$i][$j];
            }
        }
    }
    echo "Suma neparnih redova je: ".$suma."<br/>";


    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            if(($i+$j)==2){
                echo $matrica[$i][$j]."<br/>";
            }
        }
    }*/

    $studenti=array(
        '1'=>array('ime'=>'Pero','prezime'=>'Peric'),
        '2'=>array('ime'=>'Marko','prezime'=>'Markovic'),
        '3'=>array('ime'=>'John','prezime'=>'Smith')
    );


    foreach($studenti as $br_studenta=>$podaci){
        foreach($podaci as $naziv_podatka=>$vrijednost_podatka){
            echo $br_studenta.'-'.$naziv_podatka.'-'.$vrijednost_podatka;
        }
    }




?>