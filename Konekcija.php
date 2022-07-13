<?php
    require_once 'config.php';

    class Konekcija{
        public static function dohvatiKonekciju($host,$dbname,$user,$pass){
            $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
            try{
                return new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    return Konekcija::dohvatiKonekciju($host,$dbname,$user,$pass);
?>