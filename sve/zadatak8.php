<?php

    /*
        Napisati klasu Poredak koja implementira sučelje Iterator. Klasa za atribut ima kolekciju podataka
        $collection. Potrebno je implementirati sve metode sučelja Iterator na način da bude moguć ispist podataka
        iz kolekcije $collection u oba smjera. (npr. ako u kolekciji imamo riječi "jedan","dva","tri" mogući ispisi
        su jedva dva tri i tri dva jedan).

        Zatim napisati klasu Riječi koja implementira sučelje IteratorAggregate i ona za atribut ima kolekcij
        $kolekcija i dvije pomoćne metode dohvatiSadrzaj i dodaj koje upravljaju kolekcijom $kolekcija.
        Isto tako, potrebno je implementirati metodu getIterator koja će vratiti naš korisnički definirani iterator
        (Poredak). Po potrebi implementirati još metoda.

        Napraviti test napisanog.

        class Poredak implements Iterator{
            ---
        }

        class Rijeci implements IteratorAggregate{
            ---
        }
    */

    class Poredak implements Iterator{
        private $kolekcija; //[2,4,6,8,10]
        private $obrni=0;

        private $index=0;

        public function __construct($kolekcija,$obrni=0){
            $this->kolekcija=$kolekcija;
            $this->obrni=$obrni;
        }

        public function rewind(){
            //izraz?e1:e2
            $this->index=$this->obrni?count($this->kolekcija->dohvatiSadrzaj())-1:0;
        }
    
        public function valid(){
            return isset($this->kolekcija->dohvatiSadrzaj()[$this->index]);
        }
    
        public function next(){
            $this->index=$this->index+($this->obrni?-1:1);
        }
    
        public function key(){
            return $this->index;
        }
    
        public function current(){
            return $this->kolekcija->dohvatiSadrzaj()[$this->index];
        }

    }

    class Rijeci implements IteratorAggregate{
        protected $podaci = [];

        public function dohvatiSadrzaj(){
            return $this->podaci;
        }

        public function dodaj($v){
            $this->podaci[]=$v;
        }

        public function getIterator(){
            //return new ArrayIterator($this->podaci);
            echo "Pozivam getIterator()<br/>";
            return new Poredak($this,0);
        }

        public function getIteratorObrnuto(){
            echo "Pozivam getIteratorObrnuto()<br/>";
            return new Poredak($this,1);
        }


    }

    $objekt = new Rijeci();
    $objekt->dodaj(2);
    $objekt->dodaj(4);
    $objekt->dodaj(6);
    $objekt->dodaj(8);

    foreach($objekt->getIteratorObrnuto() as $value){
        echo $value."<br/>";
    }


?>