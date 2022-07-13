<?php

//ArrayIterator

/*$polje = [2,5,1,8,22,10,100];

$iterator = new ArrayIterator($polje);

$iterator->append(200);
//$iterator->asort();

echo $iterator->current()."<br/>";
$iterator->seek(4);
echo $iterator->current();*/

/*
    for($i=0;$i<10;$i++){
        $polje[i]=?;
    }

    1.korak -> postavljanje početne vrijednosti -- rewind()
    2.korak -> provjera uvjeta -- valid()
    3.korak -> inkrement/dekrement -- next()
    4.korak -> pristup vrijednosti $varijabla = $i -- key() 
    5.korak -> dohvat vrijednosti $varijabla= $polje[$i] -- current()
*/

class Klasa implements Iterator{

    protected $index=0;
    protected $polje = [2,4,6,8,10];

    public function rewind(){
        echo "Rewind...<br/>";
        $this->index=0;
    }

    public function valid(){
        echo "Valid...<br/>";
        return isset($this->polje[$this->index]);
    }

    public function next(){
        echo "Next...<br/>";
        ++$this->index;
    }

    public function key(){
        echo "Key...<br/>";
        return $this->index;
    }

    public function current(){
        echo "Current...<br/>";
        return $this->polje[$this->index];
    }

}

$proba = new Klasa();

foreach($proba as $value){
    echo $value."<br/>";
}




?>