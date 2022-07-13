<html>
    <head>
        <title> Osobe </title>
    </head>
    <body>
        <h1>Osobe</h1>
        <?php

            class Osoba{
                protected $ime,$prezime,$spol;

                function __construct($ime,$prezime,$spol){
                    echo "Pozivam konstruktor klase Osoba...<br/>";
                    $this->ime=$ime;
                    $this->prezime=$prezime;
                    $this->spol=$spol;
                }

                function __destruct(){
                    echo "Pozivam destruktor klase Osoba <br/>";
                }
            }

            class Student extends Osoba{
                protected $jmbag;

                function __construct($ime,$prezime,$spol,$jmbag){

                    parent::__construct($ime,$prezime,$spol); //pozivamo konstruktor nadklase

                    $this->jmbag=$jmbag;
                    echo "Pozivam konstruktor klase Student...<br/>";
                }

                function __destruct(){
                    echo "Pozivam destruktor klase Student <br/>";
                }

                public function dohvatiPodatke(){
                    //
                    echo $this->ime." ".$this->prezime." ".$this->spol." ".$this->jmbag."<br/>";
                }
            }

            $student1=new Student('Pero','Peric','M','222333444555'); //stvaramo objekt klase Student i prosljeđujemo 3
            //parametra. Obzirom da klasa Student nasljeđuje klase Osoba čiji konstruktor prima 3 parametra
            //a klasa Student nema svoj konstruktor, poziva se konstruktor klase Osoba i prosljeđuje se
            //navedena tri parametra (objekt Student klase je zaparavo i objekt Osoba klase jer klasa Student)
            //nasljeđuje klasu Osoba!
            $student1->dohvatiPodatke();
           
           
            
        ?>
    </body>
</html>