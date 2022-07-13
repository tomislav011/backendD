<?php

    $polazniciJson = file_get_contents("polaznici.json");
    $polaznici = json_decode($polazniciJson,true);

    //dodavanje sadržaja u json
    $polaznici[]=[
        "ime"=>"Mirko",
        "prezime"=>"Mirkovic",
        "godine"=>20,
        "email"=>"mirko.mirkovic@gmail.com",
        "telefon"=>"095723324"
    ];

    $polazniciJson = json_encode($polaznici);
    file_put_contents("polaznici.json",$polazniciJson);
?>

<!-- ispis podataka u tablicu -->
<table border="1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    </tr>
    <?php
        foreach($polaznici as $polaznik){
            echo '<tr>';
            echo '<td>'.$polaznik['ime'].'</td>';
            echo '<td>'.$polaznik['prezime'].'</td>';
            echo '<td>'.$polaznik['godine'].'</td>';
            echo '<td>'.$polaznik['email'].'</td>';
            echo '<td>'.$polaznik['telefon'].'</td>';
            echo '</tr>';
        }
    ?>
</table>
