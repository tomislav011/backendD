<html>
    <head>
        <title> PHP </title>
    </head>
    <body>
        <h1>PHP</h1>
        <?php

            /*class Klasa{


                function __call($naziv, $parametri){
                    if($naziv=='metoda'){
                        switch(count($parametri)){
                            case 0:
                                echo "Metoda bez parametara <br/>";
                                break;
                            case 1:
                                echo "Metoda s jednim parametrom ".$parametri[0]."<br/>";
                                break;
                            case 2:
                                echo "Metoda s dva parametra ".$parametri[0]." ".$parametri[1]."<br/>";
                                break;
                            default:
                                echo "Metoda s više od dva parametra...<br/>";
                                break;
                        }
                    }
                }
            }

            $objekt = new Klasa();
            $objekt->metoda();
            $objekt->metoda(2);
            $objekt->metoda(2,4);
            $objekt->metoda(2,4,8);*/
           

           class Zivotinja{

            //private $var1;
            private $var2;

            //konstruktor
            function __construct(){
                
                $parametri = func_get_args();
                $broj_parametara = func_num_args();
                
                /*
                    // Call the $foo->bar() method with 2 arguments
                    $foo = new foo;
                    call_user_func_array(array($foo, "bar"), array("three", "four"));
                */
                call_user_func_array(array($this,'__construct'.$broj_parametara),$parametri);

            }

            //definiramo normalne funkcije
            public function __construct1($parametar){
                echo "Konstruktor s jednim parametrom...<br/>";
            }

            public function __construct2($parametar1,$parametar2){
                echo "Konstruktor s dva parametra...<br/>";
            }


            public function glasajSe(){
                echo "Zivotinja se glasa...!<br/>";
            }

            //geter metoda
            public function getVar(){
                return $this->var1;
            }
            //seter metoda
            public function setVar($var){
                $this->var=$var;
            }
           }

           class Pas extends Zivotinja{
                //nadilazimo metodu nadklase
                public function glasajSe(){
                    echo "Wau-wau<br/>";
                    //parent::glasajSe();
                }
           }

           $zivotinja1=new Zivotinja(1000);
           $zivotinja2=new Zivotinja(1000,2000);
           //echo $zivotinja->getVar()."<br/>";

           /*$zivotinja->glasajSe(); //zivotnja se glasa
           $zivotinja->setVar(100);
           echo $zivotinja->getVar()."<br/>";

           $pas1=new Pas();
           //$pas1->var=10;
           $pas1->glasajSe(); //wau-wau ; zivotinja se glasa*/
           
            
        ?>
    </body>
</html>