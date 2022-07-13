<?php


$filename = 'dat.txt';

$handle = fopen($filename,'r');
//$contents = fread($handle,filesize($filename));


//echo $contents;

while (!feof($handle))
{ 
 //$redak = fgets($handle);
 $znak = fgetc($handle);
 echo $znak."<br/>";
} 

fclose($handle);

?>