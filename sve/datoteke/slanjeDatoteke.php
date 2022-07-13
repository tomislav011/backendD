<?php

    session_start();
    setcookie('nekiCookie','Galba',time()+5*24*60*60); // 5 dana
    setcookie('cookie2','Neka vrijednost',time()+60); // 5 dana
    
    $poruka='';

    /*if(isset($_FILES)){
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    }*/

    /*
        1. Provjeravamo da li se radi o validnom POST zahtjevu
        if(isset($_POST['upload_btn'] && $_POST['upload_btn']=='Upload'))

        $_FILES - ova varijabla se popunjava informacijama koje se tiču poslane datoteke
            tmp_name
            name
            size
            type
            error - UPLOAD_ERR_OK

        2. Validacija upload-a (provjeravamo da li je upload bio uspješan)
        if(isset($_FILES['datoteka']) && $_FILES['datoteka']['error]===UPLOAD_ERR_OK)

        $fileSize = $_FILES['datoteka']['size'];


        3. Manipulacija imenom datoteka prije nego se trajno spremi na posluzitelj
        4. Spremanje datoteke => move_upload_file

    */

    if(isset($_POST['upload_btn']) && $_POST['upload_btn']=='Upload'){
        if(isset($_FILES['datoteka']) && $_FILES['datoteka']['error']===UPLOAD_ERR_OK){
            //dohvacamo detalje o datoteci
            $datotekaTmpPath=$_FILES['datoteka']['tmp_name'];
            $datotekaName=$_FILES['datoteka']['name'];
            $datotekaSize=$_FILES['datoteka']['size'];
            $datotekaType=$_FILES['datoteka']['type'];

            //$datotekaName => datoteka.txt
            $datotekaArray=explode(".",$datotekaName);
            $datotekaExtension = end($datotekaArray); //.txt

            //ogranicavanje tipova podataka koji se mogu upload-at
            $dozvoljeniTipovi = array('jpg','png','txt');

            if(in_array($datotekaExtension,$dozvoljeniTipovi)){
                //definicija direktorija u koji cemo spremiti upload-anu datoteku
                $direktorij='./';
                $datotekaOnServer="file_".time().".".$datotekaExtension;
                $destinacija=$direktorij.$datotekaOnServer; //putanja sa novim nazivom datoteke

                if(move_uploaded_file($datotekaTmpPath,$destinacija)){
                    //echo "Datoteka uspjesno uploadana! <br/>";
                    $poruka="Datoteka uspjesno uploadana!";
                }else{
                    //echo "Problem s upload-om...provjeriti prava na direktorij!";
                    $poruka="Problem s upload-om...provjeriti prava na direktorij!";
                }
            }else{
                //echo "Problem s upload-om...Nedozvoljeni tip podatka! <br/>";
                $poruka="Problem s upload-om...Nedozvoljeni tip podatka!";
            }
        }else{
            //echo "Error: ".$_FILES['datoteka']['error']."<br/>";
            $poruka="Error: ".$_FILES['datoteka']['error'];
        }
    }

    $_SESSION['poruka']=$poruka;
    header("Location: obrazac.php");


?>