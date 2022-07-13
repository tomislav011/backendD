<html>
    <head>
        <title> Zadaci </title>
    </head>
    <body>
        <h1>Zadaci</h1>
        <?php

            class Zarulja{
                private $stanje;

                function __construct(){
                    $this->stanje=false;
                }

                public function getStanje(){
                    return $this->stanje;
                }
                public function setStanje($stanje){
                    $this->stanje=$stanje;
                }

                public function pritisniPrekidac(){
                    if($this->stanje){
                        $this->stanje=false;
                    }else{
                        $this->stanje=true;
                    }
                }

                public function provjeri(){
                    if($this->stanje){
                        echo "Svjetli!<br/>";
                    }else{
                        echo "Mrak<br/>";
                    }
                }
            }

            $osram = new Zarulja();
            $osram->pritisniPrekidac();
            $osram->provjeri();
            $osram->pritisniPrekidac();
            $osram->provjeri();
            $osram->pritisniPrekidac();
            $osram->provjeri();
            $osram->pritisniPrekidac();
            $osram->provjeri();
            $osram->pritisniPrekidac();
            $osram->provjeri();
            

            /*
                Napisati klasu Zarulja koja ima jedan privatni clan Stanje tipa bool. Konstruktor
                postavlja stanje u false. Dodati pristupne metode za clan Stanje. Dodati metodu
                PristisniPrekidac koja ce paliti i gasiti zarulju te metodu Provjeri koja ce ispisivati
                Svijetli ili Mrak je ovisno o trenutnom stanju (0-mrak, 1-svjetli). Stvoriti objekt
                osram klase Zarulja te upaliti i ugasiti zarulju nekoliko puta.
            */

            /*
                Napisati klasu Zaposlenik koja ima privatne clanove staz, starost i placa. Napisati
                konstruktor koji ce postaviti clanove na prosljedjene vrijednosti. Napisati pristupne
                metode kojima se mogu promjeniti/dohvatiti vrijednosti clanova. Napisati metodu
                koja racuna koliko je do sada zaradio zaposlenik. (mjeseci * broj godina staza * placa). 
                Dodatno: Napisati staticnu metodu koja kao prethodna metoda racuna koliko je do sada
                zaradio zaposlenik uz razliku sto kao parametar treba primiti objekt klase Zaposlenik i 
                za taj prosljeđeni objekt napraviti izračun.
            */ 
            
           
            
        ?>
    </body>
</html>