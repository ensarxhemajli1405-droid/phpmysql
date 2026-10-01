<?

    session_start();

    $user="root";
    $server="localhost";
    $server="localhost";
    $dbname="db4";


    try{
        $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
    }catch(PDOexception $e){
        echo "error failed: " . $e->getMessage();
    }
?>