<?php

use PHPUnit\Framework\TestCase;

class ProbaTest extends TestCase{

    /*
        . - ako je test uspješno završen
        F - test je pao
        E - greška
        I - nepotpun test
        W - warning
        S - prekocen test

    */

    public function testEmpty():array{
        //stvara novu kolekciju
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack):array{
        array_push($stack,'foo');
        $this->assertSame('foo',$stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;

    }


    /**
     * @depends testPush
     */
    public function testPop(array $stack):void{
        $this->assertSame('foo',array_pop($stack));
        $this->assertEmpty($stack);
    }

    //definirati test koji prima podatke iz korisnicki
    //definiranog data provider-a

    //testNesto($a,$b,$ocekivanje) - vrijednosti a,b i ocekivanje dobijamo iz providera

    /**
     * @dataProvider dataP
     */
    public function testAdd(int $a, int $b, int $expected){
        $this->assertSame($expected,$a+$b);
    }


    public function dataP():array{
        return [
            [0,0,0],
            [0,1,1],
            [1,0,1],
            [1,1,3]
        ];
    }

}


?>