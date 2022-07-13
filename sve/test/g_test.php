<?php



function t1(){
    global $var1;
    $var1=2;
    unset($var1);
  }
  function t2(){
    $GLOBALS['var1']=3;
    unset($GLOBALS['var1']);
  }
  $var1=1;
  t1();
  print $var1."\n";
  t2();
  print $var1."\n";

  




/*$foo="Example content";
test();
function test(){
  $foo="local variable";
  echo '$foo in current scope: '.$foo."<br>";
  echo '$foo in global scope: '.$GLOBALS["foo"]."<br>";
}*/


?>

