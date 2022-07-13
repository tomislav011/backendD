<?php

    $jsonFile = file_get_contents("knjige.json");
    print_r($jsonFile);
    echo "<br/><br/><br/>";
    $jniz = json_decode($jsonFile,true);
    print_r($jniz);

    $jniz[] = [
        "title"=>"One hundred yeaars",
        "author"=>"autor",
        "available"=>false,
        "pages"=>100,
        "isbn"=>11111111111
    ];

    //transformacija u json
    $jsonFile = json_encode($jniz);
    //zapisivanje podata
    file_put_contents("knjige.json",$jsonFile);




    $file = "datoteka.txt"; //u nasem direktoriju
    //$file ="/var/www/datoteka.txt"; - u drugom direktoriju na istom posluzitelju
    //$file ="http://www.nesto.hr/datoteka.txt" - na drugom posluzitelju 

    /* mod rada - fopen

        r - otvara datoteku za čitanje. Pokazivač se stavlja na početak.
        r+ - otvara datoteku za čitanje i pisanje. Pokazivač se stavlja na početak.
        w - otvara datoteku za pisanje. Ako datoteka ne postoji pokušava ju napraviti. Pokazivač se stavlja na početak.
        w+ - otvara datoteku za pisanje i čitanje. -||- Pokazivač se stavlja na početak.
        a - otvara datoteku za pisanje. Ako datoteka ne postoji pokušava ju napraviti. Pokazivač se stavlja na kraj.
        a+ - otvara datoteku za pisanje i čoitanje. -||- -||-

    */

    $nd = "/var/www/predavanja.hr/public_html/noviDirektorij";
    rmdir($nd);


    if(is_file($file)){ //is_dir
    
        if (is_writable($file)) {
        
            unlink($file);
            /*$datoteka = fopen($file,'r');
            if($datoteka){
                fwrite($datoteka,"Tekst kojeg upisujem u datoteku\n");
                fwrite($datoteka,"Tekst kojeg upisujem u datoteku\n");
                fwrite($datoteka,"Tekst kojeg upisujem u datoteku\n");
                fwrite($datoteka,"Tekst kojeg upisujem u datoteku\n");
            }else{
                echo "Problem s otvaranjem datoteke! <br/>";
            }*/
        }else{
            echo "Nije moguce pisanje u datoteku!";
        }
    }else{
        echo "Ovo nije datoteka!";
    }

    

    //provjeriti da li je datoteka uspješno otvorena
    /*if($datoteka){
        //nesto radimo s datotekom

        //ispis znak po znak
        while(!feof($datoteka)){
            $znak = fgetc($datoteka);
            echo $znak."<br/>";
        }


        //ispis red po red
        while(!feof($datoteka)){
            $redak = fgets($datoteka);
            echo $redak."<br/>";
        }

        $p = fread($datoteka,filesize($file));
        echo $p;
        //zatvaramo datoteku
        fclose($datoteka);
    }else{
        echo "Problem s otvaranjem datoteke! <br/>";
    }*/


?>