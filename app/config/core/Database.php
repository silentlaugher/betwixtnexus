<?php 
    $user = 'root';
    $dsn = 'mysql:host=localhost; dbname=betwixtnexus; charset=utf8mb4';
    $pass = '';

    try{
        $db = new PDO($dsn, $user, $pass);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "You have successfully connected to the betwixtnexus database";

    }catch(PDOException $ex){
        echo "Database connection failed".$ex->getMessage();
    }
?>