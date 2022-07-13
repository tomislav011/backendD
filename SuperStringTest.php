<?php

    require 'src/TDD/SuperString.php';
    use PHPUnit\Framework\TestCase;

    use TDD\SuperString;


    class SuperStringTest extends TestCase{
        
        public function testBlankStringCausesIsEmptyToReturnTrue():void{
            $ss_object = new SuperString(''); //stvaramo objekt SuperString
            $this->assertTrue($ss_object->isEmpty()); //radimo test - provjera da li je string prazan
        }

        public function testValidStringCausesIsEmptyToReturnFalse():void{
            $ss_object = new SuperString('Test'); //stvaramo objekt SuperString
            $this->assertFalse($ss_object->isEmpty());
        }

        public function testBlankStringCausesIsNotEmptyToReturnFalse():void{
            $ss_object = new SuperString(''); //stvaramo objekt SuperString
            $this->assertFalse($ss_object->isNotEmpty());
        }

    }

?>