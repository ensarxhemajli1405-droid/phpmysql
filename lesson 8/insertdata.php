<?php
    try{
        $pdpo = new PDO ("mysql:host=localhost;dbname=db4","root","");

    $username = "jack";
    $pass = "test";

    $sql = "INSERT INTO users (username,pass) VALUES ('$username','$pass')";

    $pdo -> exec($sql);

    echo "New record created sucesfully";

    }catch (Exception $e){
        echo $e -> getMessage();
    }


    
    
    
    
    ?>