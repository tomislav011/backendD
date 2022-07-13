<?php

    require 'src/TDD/Calculator.php';
    use PHPUnit\Framework\TestCase;

    use TDD\Calculator;


    class CalculatorTest extends TestCase{

        private $calculator;

        protected function setUp():void{
            $this->calculator = new Calculator();
        }

        protected function tearDown():void{
            $this->calculator=NULL;
        }

        //test zbrajanja
        public function testZbrajanje(){
            $calculator2 = new Calculator();
            $rez = $calculator2->zbroji(1,2);
            //$rez = $this->$calculator->zbroji(1,2);
            $this->assertSame(3,$rez);
            //$this->assertEquals(15,$calculator->zbroji(5,10));
        }

        public function testOduzimanje(){
            $calculator2 = new Calculator();
            $rez = $calculator2->oduzmi(3,2);
            //$rez = $this->$calculator->zbroji(1,2);
            $this->assertSame(1,$rez);
            //$this->assertEquals(15,$calculator->zbroji(5,10));
        }

        public function testMnozenje(){
            $calculator2 = new Calculator();
            $rez = $calculator2->mnozi(1,2);
            //$rez = $this->$calculator->zbroji(1,2);
            $this->assertSame(2,$rez);
            //$this->assertEquals(15,$calculator->zbroji(5,10));
        }

        public function testDijeljenje(){
            $calculator2 = new Calculator();
            $rez = $calculator2->dijeli(10,2);
            //$rez = $this->$calculator->zbroji(1,2);
            $this->assertSame(5,$rez);
            //$this->assertEquals(15,$calculator->zbroji(5,10));
        }

        //test oduzimanja

        //test mnozenja

        //test dijeljenja
        
        

    }

?>