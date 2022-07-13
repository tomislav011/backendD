<?php

function echoIt($string){
    echo $string."<br/>";
}

$func = 'It';

$func('test');

/*if(function_exists($func)){
    $func('test');
}else{
    echo "Funkcija ne postoji!";
}*/


?>