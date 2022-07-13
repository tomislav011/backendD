<html>
    <head>
        <title> Test Apstraktne klase </title>
    </head>
    <body>
        <h1>Apstraktne klase</h1>
        <?php

            /*abstract class Klasa1{
                abstract public function af1();
            }

            abstract class Klasa2 extends Klasa1{
                abstract public function af2();
            }

            class Klasa3 extends Klasa2{
                public function af1(){

                }
                public function af2(){

                }
            }*/

           interface Radni{
               public function radi();
           }
           
           abstract class Zivotinja{
               protected $ime;

               function __construct($ime){
                   $this->ime=$ime;
               }

               abstract public function glasaj();

           }

           class Pas extends Zivotinja implements Radni{
               public function glasaj(){
                   echo "Pas ".$this->ime." se glasa!...<br/>";
               }
               public function radi(){
                   echo "Ja sam pas koji radi! <br/>";
               }
           }

           $pas = new Pas("Pero");
           $pas->glasaj();
           
            
        ?>
    </body>
</html>