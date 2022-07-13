<?php

    require 'src/TDD/Student.php';
    use PHPUnit\Framework\TestCase;

    use TDD\Student;


    class StudentTest extends TestCase{

        private $student;

        protected function setUp():void{
            $this->student = new Student(1234,"Pero","Peric",34);
        }

        protected function tearDown():void{
            $this->student=NULL;
        }
        
        //test konstruktora
        public function testConstructor(){
            //$student = new Student(1234,"Pero","Peric",34);

            $this->assertSame(1234,$this->student->maticni_broj);
            $this->assertSame("Pero",$this->student->ime);
            $this->assertSame("Peric",$this->student->prezime);
            $this->assertSame(34,$this->student->broj_godina);
            $this->assertEmpty($this->student->polozeni_ispiti);
        }

        public function testDohvatiIme(){
            //$student = new Student(1234,"Pero","Peric",34);

            $this->assertSame("Pero",$this->student->ime);
            $this->assertIsString($this->student->dohvatiIme());
            $this->assertSame("Pero",$this->student->dohvatiIme());
            
        }

        //testovi za prezime i broj godina slicni

        public function testDodajPolozeniIspit(){
            //$student = new Student(1234,"Pero","Peric",34);

            $this->assertTrue($this->student->dodajPolozeniIspit("Matematika"));
            $this->assertContains("Matematika",$this->student->polozeni_ispiti);
        }

        public function testObrisiPolozeniIspit(){
            //$student = new Student(1234,"Pero","Peric",34);

            $this->assertTrue($this->student->dodajPolozeniIspit("Matematika"));
            $this->assertTrue($this->student->dodajPolozeniIspit("Fizika"));
            $this->assertTrue($this->student->dodajPolozeniIspit("Kemija"));

            $this->assertCount(3,$this->student->polozeni_ispiti);
            $this->assertTrue($this->student->obrisiIspit("Matematika"));
            $this->assertCount(2,$this->student->polozeni_ispiti);
            $this->assertNotContains("Matematika",$this->student->polozeni_ispiti);
        }

        /*public function testDohvatiMaticniBroj(){

        }*/

    }

?>