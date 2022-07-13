<?php

    $i=1;
    while($i<=10){
        echo $i." ";
        $i++;
    }
    echo "<br/>";
    for($i=1;$i<=100;$i++){
        if($i%2==0){
            echo $i." ";
        }
    }
    echo "<br/>";

    $names = ['Pero','Marko','Tomislav','Ivan'];

    foreach($names as $key=>$value){
        echo $key." - ".$value."<br/>";
    }

    //Napisati program koji ima definirane dvije varijable a i b.
    //Varijablama a i b dodjeliti proizvoljnu vrijednost.
    //Ako je a veće od b onda uvećati vrijednost a za 1, a ako je
    //b veći onda umanjiti za 1 koristeći se operatorima za
    //automatsko uvećavanje i smanjivanje. Ispisati na kraju
    //vrijednost varijabli.

    $a=2;
    $b=5;

    if($a>$b){
        $a++;
    }else{
        $a--;
    }
    echo $a." - ".$b;



?>