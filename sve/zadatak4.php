<?php

    /*
    Napisati klasu Zivotinja koja ima protected String parametar vrsta i metodu kreciSe koja ispisuje 
    “zivotinja se krece”. Klase Konj, Riba i Ptica nasljeđuju klasu Zivotinja i svaka u konstruktoru 
    postavlja parametar vrsta klase Zivotinja na svoju vrstu. Također, svaka klasa override-a metodu 
    kreciSe sa svojom specifičnom porukom (npr. “trcim”, “plivam”, “letim”). 
    U klasi Test napraviti objekte svih klasa i isprobati metode kretanja. BONUS: napraviti niz od 4 
    elementa i napuniti ga s jednim objektom svake od gore navedenih klasa. 
    Napraviti petlju koja će proći kroz niz i pokrenuti metodu kreciSe na svakom od objekata niza.


    Iskopiraj i modificiraj klase iz 2. zadatka tako da osnovna klasa (Zivotinja) ne bude klasa nego 
    interface. Definiraj interface Radni s metodom radi. Klasa Konj neka implementira i taj interface. 
    U main metodi klase Test napraviti objekte svih klasa i isprobati metode.
    
    */

    interface Zivotinja{
        public function kreciSe();
    }

    interface Radni{
        public function radi();
    }

    class Konj implements Zivotinja,Radni{
        private $vrsta;

        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." trči...<br/>";
        }
        public function radi(){
            echo $this->vrsta." preskače prepreke!<br/>";
        }
    }
    class Riba implements Zivotinja{
        private $vrsta;

        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." pliva...<br/>";
        }
    }
    class Ptica implements Zivotinja{
        private $vrsta;

        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." leti...<br/>";
        }
    }

    $konj = new Konj("Vranac");
    $konj->kreciSe();
    $konj->radi();

    $riba = new Riba("Smudj");
    $riba->kreciSe();



?>