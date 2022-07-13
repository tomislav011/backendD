<?php

mysqli_report(MYSQLI_REPORT_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/*
+------------+---------------+-----------------+-------------------+--------------+-------+---------+------------+-----------+
| officeCode | city          | phone           | addressLine1      | addressLine2 | state | country | postalCode | territory |
+------------+---------------+-----------------+-------------------+--------------+-------+---------+------------+-----------+
| 1          | San Francisco | +1 650 219 4782 | 100 Market Street | Suite 300    | CA    | USA     | 94080      | NA        |
| 2          | Boston        | +1 215 837 0825 | 1550 Court Place  | Suite 102    | MA    | USA     | 02107      | NA        |
+------------+---------------+-----------------+-------------------+--------------+-------+---------+------------+-----------+
*/

    require 'config.php';


    $db = new mysqli($host,$user,$pass,$dbname); //3306 port

    if($db->connect_error){
        echo "Pogreska prilikom spajanja na bazu podataka! <br/>";
    }else{
        //nije bilo greske i mozemo nastaviti dalje
        //upit se moze pisati u zasebnu varijablu
        //upit se moze pisati direktno u funkciju
        //upit se moze pisati na tzv. pripremljen nacin (eng. prepared statement)
        
        //$officeCode=$_POST['officeCode']; //podatak iz forme
        //$officeCode=$mysqli->real_escape_string($_POST['officeCode']);
        $officeCode="9";
        $city="Osijek";
        $phone="+38531222333";
        $address="Vukovarska 1000";
        $country="Hrvatska";
        $postalCode="31000";
        $territory="EU";

        //$upit = "INSERT INTO offices (officeCode,city,phone,addressLine1,country,postalCode,territory)". 
        //" VALUES ('8','Osijek','+38531222333','Vukovarska 1000','Hrvatska','31000','EU')";

        //$upit = "INSERT INTO offices (officeCode,city,phone,addressLine1,country,postalCode,territory)". 
        //" VALUES ('$officeCode','$city','$phone','$address','$country','$postalCode','$territory')";

        $statement = $db->prepare("INSERT INTO offices (officeCode,city,phone,addressLine1,country,postalCode,territory)".
        " VALUES (?,?,?,?,?,?,?)");

        /* binding -> bind_param(tipovi,valrijable odvojene zarezom);
        tipovi:
            i - integer
            d - double
            s - string
            b -blob
        */
        $statement->bind_param("sssssss",$officeCode,$city,$phone,$address,$country,$postalCode,$territory);
        //u novijim verzijama php-a binding se moze preskociti
        //$statement->execute([$officeCode,$city,$phone,$address,$country,$postalCode,$territory]);
        $statement->execute();
        $statement->close();

        $db->close();

        /*try{
        $db->query($upit);

        if($db->errno){
            echo "Nije moguc INSERT zbog greske<br/>";
        }
        $db->close();
        }catch(mysqli_sql_exception $exception){
            var_dump($exception);
            throw $exception;
        }*/
    }

?>