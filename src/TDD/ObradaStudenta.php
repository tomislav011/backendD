<?php

    namespace TDD;

    use TDD\Student;

    class ObradaStudenta{
        public function obrada(Student $student){
            return $student->dohvatiIme();
        }
    }

?>