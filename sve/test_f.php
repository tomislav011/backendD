<?php

$var = 10;

    function sum(){
        $parameters = func_get_args();

        foreach($parameters as $param){
            $sum+=$param;
        }
        return $sum;
    }

    /*$func_name='sum';

    echo $func_name(1,2,3,4,5);*/

    function f1(){
        echo "F1 <br/>";
    }

    function f2(){
        echo "F2 <br/>";
    }

    function fact($n){
        if($n==0){
            return 1;
        }
        return $n*fact($n-1);
    }

    function sumaZnamenki($n){
        static $suma=0;
        if($n==0){
            return $suma;
        }
        $suma+=$n%10;
        return sumaZnamenki($n/10);
    }

    function sumaZnamenki2($n){
        if($n==0){
            return 0;
        }
        return $n%10+sumaZnamenki2($n/10);
    }

    /*echo fact(5);
    echo "<br/>";
    echo sumaZnamenki2(555);*/

    function funkcija(){
        echo $GLOBALS['var'];
    }

    //echo funkcija();

    /*$func_name='f2';

    switch($func_name){
        case 'f2':
            if(function_exists($func_name)){
                $func_name();
            }
            break;

        default:

        break;

    }*/

?>