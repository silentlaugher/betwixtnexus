<?php 
    //initialize variables to hold connection parameters
    $user = 'root';
    $dsn = 'mysql:host=localhost; dbname=betwixtnexus; charset=utf8mb4';
    $pass = '';

    try{
        //create an instance of the PDO class with the required parameters
        $db = new PDO($dsn, $user, $pass);

        //set pdo error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //display success message
        //echo "You have successfully connected to the betwixtnexus database";

    }catch(PDOException $ex){
        //display error message
        echo "Database connection failed".$ex->getMessage();
    }
?>