<?php

   ini_set('display_errors',1); //određuje da li će se greške prikazivati korisniku
   ini_set('display_startup_errors',1);
   error_reporting(E_ALL); //E_WARNING,E_NOTICE,E_PARSE,E_ERROR,E_ALL
    /*$polje = array(2,4,6,8,10);

    $iterator = new ArrayIterator($polje);

    foreach($polje as $element){
        echo $element."<br/>";
    }*/

    class Skladiste implements IteratorAggregate{
        protected $podaci = array(2,4,6,8,10);

        public function getIterator(){
            echo "Pozivam funkciju getIterator()<br/>";
            return new ArrayIterator($this->podaci);
        }

    }

    $objekt = new Skladiste();

    foreach($objekt as $vrijednost){
        echo $vrijednost."<br/>";
    }


?>