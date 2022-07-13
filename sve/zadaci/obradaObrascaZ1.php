<?php 
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $komentar = $_POST['komentar'];

            $datoteka = 'komentari.txt';
            $dat = fopen($datoteka,'a+');

            fwrite($dat,$komentar);

            fclose($dat);

?>