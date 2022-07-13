<?php

namespace TDD;

class SuperString{
    private $string = null;

    public function __construct(string $string){
        $this->string=$string;
    }

    public function isEmpty():bool{
        return strlen($this->string)==0;
        /*
        -
        -
        -
        -
        -
        -
        */
    }

    public function isNotEmpty():bool{
        //return strlen($this->string)!=0;
        return !$this->isEmpty();

        /*
        -
        -
        -
        -
        -
        -
        */

        /*



        */
    }
}


?>