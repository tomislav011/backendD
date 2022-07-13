<?php

    /*
    Napisati klasu Zivotinja koja ima protected String parametar vrsta i metodu kreciSe koja ispisuje 
    “zivotinja se krece”. Klase Konj, Riba i Ptica nasljeđuju klasu Zivotinja i svaka u konstruktoru 
    postavlja parametar vrsta klase Zivotinja na svoju vrstu. Također, svaka klasa override-a metodu 
    kreciSe sa svojom specifičnom porukom (npr. “trcim”, “plivam”, “letim”). 
    U klasi Test napraviti objekte svih klasa i isprobati metode kretanja. BONUS: napraviti niz od 4 
    elementa i napuniti ga s jednim objektom svake od gore navedenih klasa. 
    Napraviti petlju koja će proći kroz niz i pokrenuti metodu kreciSe na svakom od objekata niza.
    
    */

    class Zivotinja{
        protected $vrsta;

        public function kreciSe(){
            echo "Zivotinja se krece<br/>";
        }
    }

    class Konj extends Zivotinja{
        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." trči...<br/>";
        }
    }
    class Riba extends Zivotinja{
        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." pliva...<br/>";
        }
    }
    class Ptica extends Zivotinja{
        function __construct($vrsta){
            $this->vrsta = $vrsta;
        }

        public function kreciSe(){
            echo $this->vrsta." leti...<br/>";
        }
    }

?>