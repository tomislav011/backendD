<?php

//inicijalizacija
//=[];
//=array();

$polje = array(2,4,6,8,10);
$polje2 = [2,4,6,8,10];

echo $polje[0]."  ".$polje2[2]."<br/>";


$polje3 = [
    "1" => "String1",
    "2" => "Strig2"
];

$polje4 = array(
    "1" => "String1",
    "2" => "Strig2"
);

//dodavanje elementa u polje
$polje4[]="String3";


echo "<pre>";
print_r($polje4);
echo "</pre>";


//višedimenzionalna polja

$vd1 = array(
    array(2,4,6),
    array(8,10,12),
    array(14,16,18)
);


echo $vd1[0][1]."<br/>";


$vd2 = array(
    "A"=>array(2,4,6),
    "B"=>array(8,10,12),
    "C"=>array(14,16,18)
);

echo $vd2["A"][0]."<br/>";

echo "<pre>";
print_r($vd2);
echo "</pre>";

echo "<br/>";

$poljeMijesano = array(2,"A",4,6,8,10);

echo "<pre>";
print_r($poljeMijesano);
echo "</pre>";

echo "<br/>";

//unset($poljeMijesano[1]);
array_splice($poljeMijesano, 1, 1);

echo "<pre>";
print_r($poljeMijesano);
echo "</pre>";

echo "<br/>";

$poljeMijesano[1]="A";

echo "<pre>";
print_r($poljeMijesano);
echo "</pre>";

echo "<br/>";


?>