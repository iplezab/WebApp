<?php
    define("DSN","mysql:dbname=workshop6_2;host=localhost");
    define("DBUSER","iplezab");
    define("DBPASS","iplezab");
    try{
        $con=new PDO(DSN,DBUSER,DBPASS);
    }catch (PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
    }
?>