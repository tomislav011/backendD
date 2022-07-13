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

        $upit = "SELECT * FROM offices WHERE officeCode BETWEEN ? AND ?";
        try{
            $od="1";
            $do="8";
            $statement = $db->prepare($upit);
            $statement->bind_param("ss",$od,$do);
            $statement->execute();

            $rezultat = $statement->get_result();

            /*$p = $rezultat->fetch_all(MYSQLI_ASSOC);
            foreach($p as $t){
                echo $t['officeCode'];
            }*/

            while($redak=$rezultat->fetch_assoc()){
                echo $redak['officeCode']." ".$redak['city']."<br/>";
            }

        }catch(mysqli_sql_exception $exception){
            var_dump($exception);
            throw $exception;
        }

        $statement->close();


        /*
        $rezultat = $db->query("SELECT * FROM offices");
        if($rezultat->num_rows>0){
            while($redak=$rezultat->fetch_assoc()){
                echo $redak['officeCode']." ".$redak['city']."<br/>";
            }
        }else{
            echo "Nema rezultata!<br/>";
        }*/

        $db->close();
    }

?>