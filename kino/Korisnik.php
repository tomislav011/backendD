<?php
    class Korisnik implements SplObserver{
        
        public function update(SplSubject $observable){
            echo "Film je dodan!";
        }


    }
?>