<?php

    /*
        Napravi klasu Sisavac sa dva privatna parametra: dob i tezina. Klasa treba imati konstruktor koji 
        postavlja oba parametra na 0 i metode za dohvatiti i postaviti parametre (tzv. gettere i settere).  
        Treba napraviti klase Pas i Macka koje obje nasljeđuju klasu Sisavac i imaju još dodatni privatni 
        parametar: vrsta u koji se zapisuje pasmina psa ili mačke. Obje klase imaju metode za postaviti i 
        dohvatiti vrstu, a imaju i metodu za opisivanje koja ispisuje koliko je teška, koliko je stara, 
        koje je vrste i koje je pasmine.  Napravite klasu Test, kreirajte objekte sisavca, psa i mačke, 
        postavite im parametre i pozovite metode za opis psa i mačke.



    */


    class Sisavac{
        protected $dob,$tezina;

        function __construct(){
            $this->dob=0;
            $this->tezina=0;
        }

        public function getDob(){
                return $this->dob;
        }
        public function setDob($dob){
                $this->dob = $dob;
                return $this;
        }
        public function getTezina(){
                return $this->tezina;
        }
        public function setTezina($tezina){
                $this->tezina = $tezina;
                return $this;
        }
    }

    class Pas extends Sisavac{
        private $vrsta;

        public function getVrsta(){
                return $this->vrsta;
        }
        public function setVrsta($vrsta){
                $this->vrsta = $vrsta;
                return $this;
        }
        public function opis(){
            echo "Pas ".$this->vrsta." je star ".$this->dob." godina i ima masu od ".$this->tezina." kg<br/>";
        }
    }

    class Macka extends Sisavac{
        private $vrsta;

        public function getVrsta(){
                return $this->vrsta;
        }
        public function setVrsta($vrsta){
                $this->vrsta = $vrsta;
                return $this;
        }
        public function opis(){
            echo "Macka ".$this->vrsta." je stara ".$this->dob." godina i ima masu od ".$this->tezina." kg<br/>";
        }
    }
?>