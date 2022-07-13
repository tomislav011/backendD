<?php

    function load_clients($class_name){
        $path = 'Klase/'.$class_name.'.php';
        if(file_exists($path)){
            require $path;
        }else{
            //baciti gresku
        }
        //require 'Klase/'.$class_name.'.php';
    }

    function load_clients2($class_name){
        require 'Klase2/'.$class_name.'.php';
    }


    spl_autoload_register('load_clients');
    spl_autoload_register('load_clients2');

?>