<?php 

    session_start();

    $user="root";
    $server="localhost";
    $server="localhost";
    $dbname="db4";
    try {
        $conn = new PDO("mysql:host $server;dbname=$dbname",$user,$pass);

    } catch (PDOException $e){
    echo "error" , $e->getMessage();}+

?>