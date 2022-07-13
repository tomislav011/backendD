<?php
// Definiranje varijabli
$a = 10;
$b = 5;
$c = 'Algebra';
$d = 'Backend Developer';
// Ispis rezultata aritmetičkih operatora
echo $a + $b."<br/>";
echo $a - $b."<br/>";
echo $a * $b."<br/>";
echo $a / $b."<br/>";
echo $a % $b."<br/>";
echo $a ** $b."<br/>";
// Konkatenacija
$f = $c.'-'.$d;
echo $f."<br/>";
// Kombinirani operator dodjele
$a += $b;
echo $a."<br/>";
// Uperator usporedbe (veće od)
var_dump($a > $b);
// Operator inkrementa
echo ++$a."<br/>";
// Operator dekrementa
echo --$b."<br/>";

?>