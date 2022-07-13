<?php

    //inicijalizacija polja
    $polje1 = [2,4,6,8,10]; //prvi nacin

    /*echo "Ispis polja 1 <br/>";
    echo "<pre>";
    print_r($polje1);
    echo "</pre>";
    echo "<br/>";*/

    //unset($polje1[2]);
    array_splice($polje1,2,1);

    /*echo "Ispis polja 1 nakon brisanja elementa na trećem mjestu (indeks 2)<br/>";
    echo "<pre>";
    print_r($polje1);
    echo "</pre>";
    echo "<br/>";*/

    $polje1[]=100;

    /*echo "Ispis polja 1 nakon dodavanja elementa 100<br/>";
    echo "<pre>";
    print_r($polje1);
    echo "</pre>";
    echo "<br/>";*/


    $polje2 = array("s1","s2","s3","s4","s5"); //drugi

    /*echo "Ispis polja 2 <br/>";
    echo "<pre>";
    print_r($polje2);
    echo "</pre>";
    echo "<br/>";*/

    $polje3 = [2];

    //ako se ne navede eksplicitno ključ/indeks, krenut će od broja 0 automatski i
    //uvećavati za 1 za svaki novododani element.
    $polje3[]=4;
    $polje3[]=6;
    $polje3[]=8;

    /*echo "Ispis polja 3 <br/>";
    echo "<pre>";
    print_r($polje3);
    echo "</pre>";
    echo "<br/>";*/

    //echo "Ispis polja 4 <br/>";
    $polje4=array('5'=>2,'6'=>4,'7'=>6);
    $polje4[]=8;
    $polje4[5]=100;

    array_push($polje4,200,300);

    /*echo "<pre>";
    print_r($polje4);
    echo "</pre>";
    echo "<br/>";*/

    /*echo $polje4[5];
    echo "<br/>";*/


    //asocijativna polja

    $aPolje = array('tekst1'=>'rijec1','tekst2'=>2,'tekst3'=>3.22);

    /*echo "Ispis aPolje <br/>";
    echo "<pre>";
    print_r($aPolje);
    echo "</pre>";
    echo "<br/>";*/

    $aPolje2 = array();
    $aPolje2['tekst1']='rijec1';
    $aPolje2['tekst2']='rijec2';
    $aPolje2['tekst3']='rijec3';

    /*echo $aPolje2['tekst1'];
    echo "<br/>";

    echo "Ispis aPolje2 <br/>";
    echo "<pre>";
    print_r($aPolje2);
    echo "</pre>";
    echo "<br/>";*/


    $vdp1 = array(
        array(2,4,6), //red1
        array(8,10,12), //red2 
        array(14,16,18)  //red3
    );

    /*echo "<pre>";
    print_r($vdp1);
    echo "</pre>";
    echo "<br/>";*/

    echo $vdp1[1][1];
    echo "<br/>";

    $vdp2 = array(
        'A'=>array('a'=>2,'b'=>4,'c'=>6),
        'B'=>array('a'=>8,'b'=>10,'c'=>12),
        'C'=>array('a'=>14,'b'=>16,'c'=>18)
    );

    /*echo "<pre>";
    print_r($vdp2);
    echo "</pre>";
    echo "<br/>";

    echo $vdp2['B']['b'];*/

    $praznoPolje=[];
    $imena=['Pero',1,'1','Luka'];

    //var_dump(empty($praznoPolje));
    //var_dump(empty($imena));

    //var_dump(isset($praznoPolje[0]));
    //var_dump(isset($imena[1]));
    //var_dump(isset($imena[10]));

    //in_array
    //var_dump(in_array('Marko',$imena));

    //$status = in_array('Perica',$imena);
    //var_dump($status);

    //var_dump(array_search('1',$imena));
    //var_dump(array_search('Perica',$imena));

    /*
    $ps = [4,1,8,22,100,30];
    echo "<pre>";
    print_r($ps);
    echo "</pre>";
    echo "<br/>";

    rsort($ps);

    echo "<pre>";
    print_r($ps);
    echo "</pre>";
    echo "<br/>";*/


    $aPolje22 = array();
    $aPolje22['A']='Tomislav';
    $aPolje22['B']='Perica';
    $aPolje22['C']='Andrej';
    $aPolje22['D']='Anita';

    krsort($aPolje22);

    echo "<pre>";
    print_r($aPolje22);
    echo "</pre>";
    echo "<br/>";

    $velicina_polja = count($aPolje22);
    echo "Velicina polja je: ".$velicina_polja."<br/>";


    $mergePolja = array_merge($aPolje2,$aPolje22);

    echo "<pre>";
    print_r($mergePolja);
    echo "</pre>";
    echo "<br/>";


?>