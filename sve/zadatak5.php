<?php

/*
    Napisati sučelje Automobil koje ima dvije abstract metode (dohvatiModel,dohvatiTip). 
    Nakon toga, napisati dvije klase koje implementiraju sučelje Automobil (AutomobilS,AutomobilN).
    Potrebno je implementirati factory (TvornicaAutomobila) koja u metodi stvori koja prima parametar(
        ovisno o parametru instanciramo drugaciju klasu S,N
    ).
    Testirati kod.
*/

interface Automobil{
    function dohvatiModel();
    function dohvatiTip();
}

class SportskiOpel implements Automobil{
    protected $model="Speedster GT";
    protected $tip="Sport";

    public function dohvatiModel(){
        return $this->model;
    }
    public function dohvatiTip(){
        return $this->tip;
    }
}

class ObiteljskiOpel implements Automobil{
    protected $model="Zafira";
    protected $tip="Obiteljski";

    /*function __construct($model,$tip){
        $this->model=$model;
        $this->tip=$tip;
    }*/

    public function dohvatiModel(){
        return $this->model;
    }
    public function dohvatiTip(){
        return $this->tip;
    }
}

class TvornicaAutomobila{

    public function stvori($tip){
        if($tip=='Sport'){
            return new SportskiOpel();
        }else{
            return new ObiteljskiOpel();
        }
    }
}

$tvornica = new TvornicaAutomobila();
$sportskiOpel = $tvornica->stvori("Sport");
$obiteljskiOpel = $tvornica->stvori("Obiteljski");

var_dump($sportskiOpel);
echo "<br/>";
var_dump($obiteljskiOpel);


?>