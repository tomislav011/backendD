<?php

/*
    Napraviti Singleton klasu koja simulira ConnectionPool. Kao atribut treba imati polje podataka. 
    Potrebno je definirati funkciju koja će omogućiti dohvat jednug podatka iz polja, a sljedeći poziv bi 
    trebao biti drugi podatak osim ako prethodni nije vraćen nazad.
*/

class Konekcija{
    //deklaracija static clana - instanca klase Konekcija
    private static $instanca=null;
    //deklaracija drugih atributa (po potrebi)
    //npr. host, user, pass, naziv_baze itd...
    private static $poljeKonekcija;
    private static $index=0; //označava zadnju vraćenu konekciju

    //private konstruktor
    private function __construct(){
        //inicijalizacija resursa
        self::$poljeKonekcija=array("K1","K2","K3","K4");
    }

    //metoda za dohvat instance
    public static function dohvatiInstancu(){
        if(!self::$instanca){
            self::$instanca = new Konekcija();
        }
        return self::$instanca;
    }

    public function dohvatiKonekciju(){
            $konekcija=self::$poljeKonekcija[self::$index];
            self::$index+=1;
            return $konekcija;
    }
    public function vratiKonekciju(){
        self::$index-=1;
    }
}

$objekt1 = Konekcija::dohvatiInstancu();
$objekt2 = Konekcija::dohvatiInstancu();

echo $objekt1->dohvatiKonekciju()."<br/>"; //K1
echo $objekt1->dohvatiKonekciju()."<br/>"; //K2
echo $objekt2->dohvatiKonekciju()."<br/>"; //K3
$objekt1->vratiKonekciju(); //
echo $objekt1->dohvatiKonekciju()."<br/>"; //K3

//echo $objekt1->getVar()."   ".$objekt2->getVar()."<br/>";
//$objekt1->setVar(1000);
//echo $objekt1->getVar()."   ".$objekt2->getVar()."<br/>";


?>