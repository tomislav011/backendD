<html>
<head>
 <title>Adresar</title>
 <meta http-equiv="Content-Type"content="text/html; charset=windows-1250" />
</head>
<body>
<h2>Spremljena adresa</h2>
<?php
    $ime = $_GET['ime'];
    $adresa = $_GET['adresa'];
    $grad = $_GET['grad'];
    $spol = $_GET['spol'];
    $prijatelj = $_GET['prijatelj'];

    echo "Ime: $ime <br/>";
    echo "Adresa: $adresa <br/>";
    echo "Grad: $grad <br/>";
    echo "Spol: $spol <br/>";
    echo "Prijatelj: $prijatelj <br/>";
?>

</body>
</html>
