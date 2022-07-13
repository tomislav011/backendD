<?php
    class Kino implements SplSubject{

        private SplObjectStorage $pretplatnici;
        private $filmovi = [];

        private static $instanca=null;


        //########################## Singleton dio ####################
        private function __construct(){
            $this->pretplatnici = new SplObjectStorage();
        }

        public static function dohvatiInstancu(){
            if(!self::$instanca){
                self::$instanca = new self; //ili new Kino();
            }
            return self::$instanca;
        }
        //##############################################################

        public function dodajFilm(Film $film){
            $this->filmovi[]=$film;
            $this->notify();
        }

        //attach, detach i notify
        public function attach(SplObserver $pretplatnik){
            $this->pretplatnici->attach($pretplatnik);
        }

        public function detach(SplObserver $pretplatnik){
            $this->pretplatnici->detach($pretplatnik);
        }

        public function notify(){
            foreach($this->pretplatnici as $pretplatnik){
                $pretplatnik->update($this);
            }
        }


    }
?>