<html>
    <head>
        <title> Zaprimanje kvara </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <h2> Obrazac o kvaru </h2>
        <?php 
            /*if(isset($_POST["submit_btn"])){
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
            }*/
            /*$ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $adresa = $_POST['adresa'];
            $model = $_POST['model'];
            $grad = $_POST['grad'];
            $opis = $_POST['opis'];
            $pretplata = $_POST['pretplata'];
            $gdpr = $_POST['gdpr'];*/

            $ime = $_GET['ime'];
            $prezime = $_GET['prezime'];
            $adresa = $_GET['adresa'];
            $model = $_GET['model'];
            $grad = $_GET['grad'];
            $opis = $_GET['opis'];
            $pretplata = $_GET['pretplata'];
            $gdpr = $_GET['gdpr'];

            echo "Ime: ".$ime." <br/>";
            echo "Prezime: ".$prezime." <br/>";
            echo "Adresa: ".$adresa." <br/>";
            echo "Model: ".$model." <br/>";
            echo "Grad: ".$grad." <br/>";
            echo "Opis kvara: ".$opis." <br/>";
            echo "Pretplata: ".$pretplata." <br/>";
            echo "Gdpr suglasnost: ".$gdpr." <br/>";

        ?>
    </body>
</html>