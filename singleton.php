<?php

class Konekcija{
    //deklaracija static clana - instanca klase Konekcija
    private static $instanca=null;
    //deklaracija drugih atributa (po potrebi)
    //npr. host, user, pass, naziv_baze itd...
    private $var;

    //private konstruktor
    private function __construct(){
        //inicijalizacija resursa
        $this->$var=100;
        echo "Konstruktor...<br/>";
    }

    public static function dohvatiInstancu(){
        echo "Ulazim u metodu dohvatiInstancu()<br/>";
        if(!self::$instanca){
            echo "Stvaram novu instancu...<br/>";
            self::$instanca = new Konekcija();
        }
        return self::$instanca;
    }

    public function getVar(){
        return $this->var;
    }
    public function setVar($var){
        $this->var = $var;
        return $this;
    }
}

$objekt1 = Konekcija::dohvatiInstancu();
$objekt2 = Konekcija::dohvatiInstancu();

var_dump($objekt1);
var_dump($objekt2);
$objekt1->setVar(1000);
var_dump($objekt1);
var_dump($objekt2);
//echo $objekt1->getVar()."   ".$objekt2->getVar()."<br/>";
//$objekt1->setVar(1000);
//echo $objekt1->getVar()."   ".$objekt2->getVar()."<br/>";


?>