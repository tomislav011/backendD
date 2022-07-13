<?php

    if(isset($_POST)){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }else{
        echo "POST nije postavljen!";
    }

    if(!empty($_POST)){//isset ili empty isset($_POST)
        if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
            echo $_POST['ime']."  ".$_POST['prezime']."<br/>";
        }else{
            echo "Nema imena i prezime! <br/>";
        }
    }else{
        echo "Nema podataka za obradu! <br/>";
    }

?>