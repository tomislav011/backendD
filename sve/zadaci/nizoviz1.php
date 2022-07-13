<?php

$prosti_brojevi = [2,3,5,7,11];
//provjera postoji li treci element
var_dump(isset($prosti_brojevi[2]));
//ispis trećeg elementa
echo $prosti_brojevi[2]."<br/>";
//dodavanje na kraj
$prosti_brojevi[]=13;
//prebrojavanje elemenata niza
echo count($prosti_brojevi)."<br/>";
//ispis cijelog niza
echo "<pre>";
print_r($prosti_brojevi);
echo "</pre>";
echo "<br/>";
//silazno sortiranje
rsort($prosti_brojevi);

echo "<pre>";
print_r($prosti_brojevi);
echo "</pre>";
echo "<br/>";

?>