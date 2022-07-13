<?php

//definiranje 2d polja
$users = array(
    array('ime'=>'Pero','prezime'=>'Peric','godine'=>30,'spol'=>'M'), //red == korisnik
    array('ime'=>'Ivana','prezime'=>'Ivanic','godine'=>40,'spol'=>'Z')
);

for($i=0;$i<count($users);$i++){

    echo $users[$i]['ime'];

    /*for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j]."  ";
    }*/
    echo "<br/>";
}

/*cho "<pre>";
print_r($users);
echo "</pre>";
echo "<br/>";*/

/*$users = [
    [],
    [],
    []
];*/

//brisanje ključa spol
unset($users[0]['spol']);
unset($users[1]['spol']);

/*echo "<pre>";
print_r($users);
echo "</pre>";
echo "<br/>";*/

$users[] = ['ime'=>'Marko','prezime'=>'Markovic','godine'=>25];

/*echo "<pre>";
print_r($users);
echo "</pre>";
echo "<br/>";*/

?>