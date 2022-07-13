<?php

require 'src/TDD/Student.php';
require 'src/TDD/ObradaStudenta.php';
use PHPUnit\Framework\TestCase;

use TDD\Student;
use TDD\ObradaStudenta;

class ObradaStudentaTest extends TestCase{

    public function testTest(){
        $mock = $this->createMock(Student::class);
        $mock->expects($this->any())->method("dohvatiIme")->will($this->returnValue('Marko'));

        $test = new ObradaStudenta();
        $rezultat = $test->obrada($mock);
        $this->assertSame('Perica',$rezultat);
    }

}

    

?>