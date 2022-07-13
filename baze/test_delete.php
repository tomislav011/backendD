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

        $upit = "DELETE FROM offices WHERE officeCode=?";
        try{
            $od="7";
            $statement = $db->prepare($upit);
            $statement->bind_param("s",$od);
            $statement->execute();

        }catch(mysqli_sql_exception $exception){
            var_dump($exception);
            throw $exception;
        }

        $statement->close();

        $db->close();
    }

?>