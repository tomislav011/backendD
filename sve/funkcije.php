<?php

    /*
    //argumente prosljeđujemo po vrijednosti
    function uvecaj($a){
        $a += $a;
        echo "Vrijednost a unutar funkcije: ".$a."<br/>";
        return $a;
    }

    $a = 10;
    echo "Vrijednost a prije poziva funkcije: ".$a."<br/>";
    $a = uvecaj($a);
    echo "Vrijednost a nakon poziva funkcije: ".$a."<br/>";*/

    $a=10;
    //$b=&$a;

    /*echo $a."<br/>";
    $b=100;
    echo $a."<br/>";
    $a=200;
    echo $b."<br/>";*/

    //argumente prosljeđujemo po vrijednosti
    function uvecaj(&$a){
        $a += $a;
        echo "Vrijednost a unutar funkcije: ".$a."<br/>";
    }

    echo "Vrijednost a prije poziva funkcije: ".$a."<br/>";
    uvecaj($a);
    echo "Vrijednost a nakon poziva funkcije: ".$a."<br/>";




    function funkcija_argumenti($a1,$a2=array()){

        //echo "Pozvali smo funkciju s argumentima ".$a1." i ".$a2."";

        echo "<pre>";
        print_r($a2);
        echo "</pre>";
    }

    //funkcija_argumenti(5,[2,4,6,8,10]);
    //funkcija_argumenti(5);


    /*function suma2(){
        $suma=0;
        for($i=0;$i<func_num_args();$i++){
            $suma+=func_get_arg($i);
        }
        return $suma;
    }


    function suma(){
        $parametri = func_get_args();

        $brojac = 0;
        foreach($parametri as $parametar){
            //echo $parametar."<br/>";
            $brojac+=$parametar;
        }
        return $brojac;
    }

    echo suma(2,4,6,8)."<br/>";
    echo suma2(2,4,6,8)."<br/>";*/





    /*function writeHello(){ //nema argumenata
        echo "Hello world <br/>";
    }

    //writeHello();

    function ndan(){ //nema argumenata

        switch(date('N')):

            case 1:
                $dan="Ponedjeljak";
                break;
            case 2:
                $dan = "Utorak";
                break;
            case 3:
                $dan = "Srijeda";
                break;
            case 4:
                $dan = "Četvrtak";
                break;
            case 5:
                $dan = "Petak";
                break;
            case 6:
                $dan = "Subota";
                break;
            case 7:
                $dan = "Nedjelja";
                break;

            endswitch;

        echo $dan;
    }

    //ndan();

    function izlistajStrojeve($polje_strojeva){
        echo '<table border="1">';
        foreach($polje_strojeva as $key => $stroj){
            echo '
                <tr>
                    <td>'.$key.'</td>
                    <td>'.$stroj.'</td>
                </tr>
            ';
        }
        echo '</table>';
    }

    $strojevi = array("Stroj1","Stroj2","Stroj3","Stroj4");
    izlistajStrojeve($strojevi);


    function vraca_rezultat(){
        $a=10;
        $b=5;

        $c = $a+$b;

        return $c;
    }

    echo vraca_rezultat()."<br/>";

    $rezultat_zbrajanja = vraca_rezultat();

    echo $rezultat_zbrajanja."<br/>";*/



    // naziv_funkcije(ar1,ar2...arn);

    /*$timestamp=time(); 
    echo $timestamp."<br/>";

    //strlen
    $var1="Algebra";

    $broj_znakova = strlen($var1);
    echo "Broj znakova: ".$broj_znakova."<br/>";


    $polje=array(2,4,6,8,10);

    if(is_array($polje)){
        //ispisati sadrzaj polja
        foreach($polje as $ime){
            echo $ime."<br/>";
        }
    }

    //explode
    $recenica = "Mi danas ucimo funkcije!";
    $pp = explode(' ',$recenica);

    $brojac=0;
    foreach($pp as $rijec){
        echo $rijec."<br/>";
        $brojac++;
    }

    echo "Recenica '".$recenica."' ima ".$brojac." rijeci <br/>";

    $znakovi = array('!','.',':');

    $recenica = str_replace($znakovi,"",$recenica);

    echo $recenica."<br/>";

    $pp2 = str_repeat("P",10);
    echo $pp2;*/



?>