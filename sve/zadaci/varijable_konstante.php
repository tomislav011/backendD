<?php

    //definiranje varijabli
    $cb = 10;
    $db = 1.22;
    $str = "string";
    $b = true;
    //ispis definiranih varijabli
    echo $cb." ".$db." ".$str." ".$b."<br/>";

    //definiranje konstanti
    define('PI',3.14);

    //ispis konstanti
    echo PI."<br/>";

    //reference

    $a=10;
    $b = &$a;
    echo $b."<br/>";
    $a=22;
    echo $b."<br/>";

?>