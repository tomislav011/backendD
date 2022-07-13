<?php

    require 'KlasaProba.php';
    use PHPUnit\Framework\TestCase;

    class KlasaProbaTest extends TestCase{

        private $objekt; //objekt klase KlasaProba

        //poziva se prije svakog testa
        protected function setUp():void{
            $this->objekt = new KlasaProba();
        }
        //poziva se po zavrsetku testa
        protected function tearDown():void{
            //oslobadjanje resursa
            $this->objekt = NULL;
        }

        /**
         * @dataProvider dataP
         */
        public function testAdd(int $a, int $b, int $expected){
            $rez = $this->objekt->add($a,$b);
            $this->assertEquals($expected,$rez);
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