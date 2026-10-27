<?php

include_once('config.php');

if(isset($_POST['submit']))

    {
        $name = $_POST['name']
         $surname = $_POST['surname']
          $email = $_POST['email']

          $sql = "insert into user (name,surname,email) values (:name,:surname,:email)";
       
          $sqlQuery = $conn->prepare($sql);

          $sqlQuery->bindParam(':name', $name);
           $sqlQuery->bindParam(':name', $surname);
            $sqlQuery->bindParam(':name', $email);

            $sqlQuery->execute();

            echo "Data saved successfully ..<br>";

            
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="index.php">Dashboard</a>
     <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name"><br>
                        <input type="text" name="name" placeholder="surname">
                                <input type="text" name="name" placeholder="email">
                                <button type="submit" name="submit">add<button>
</form>
        

</body>
</html>