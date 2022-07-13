<?php
/*
Potrebno je imati klasu Student koja ima atribute maticni broj, ime, prezime, broj godina i 
polozeni ispiti. Napisati konstruktor koji postavlja te parametre. Napisati metode koje će ispisati ime, 
prezime, godine, polozene ispite ili ispite po nekom rednom broju, dodavanje polozenog ispita i brisanje 
polozenog ispita. Koristiti TDD.
*/

namespace TDD;

class Student{
    public int $maticni_broj,$broj_godina;
    public string $ime,$prezime;
    public array $polozeni_ispiti=[]; //array()

    public function __construct(int $maticni_broj,string $ime, string $prezime, int $broj_godina){
        $this->maticni_broj=$maticni_broj;
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->broj_godina=$broj_godina;
    }

    public function dohvatiIme(){
        return $this->ime;
    }

    public function dodajPolozeniIspit(string $polozeni_ispit){

        try{
            $this->polozeni_ispiti[]=$polozeni_ispit;
            return true;
        }catch(Exception $e){
            $e->getMessage();
            return false;
        }
    }

    public function obrisiIspit($polozeni_ispit){
        unset($this->polozeni_ispiti[array_search($polozeni_ispit,$this->polozeni_ispiti)]);
        return true;
    }


}

?>