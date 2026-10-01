<?php  
   include_once('config.php');

   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "insert into users(name,username,email) values('$name','$username','$email')";
    $sqlQuery  = $conn ->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':username',$username);
    $sqlQuery->bindParam(':email',$email);
    $sqlQuery->execute();

    echo "data saved sucsesfully ...<br>";}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">dashboard</a>
    <form action="add.php" method="post">
        <input type="text"  name="name" placeholder="name"><br>
        <input type="text" id="username"  placeholder="username"><br>
        <input type="email" name="email" placeholder="email"><br>
        <button type="submit" name="submit">add</button>
    </form>
</body>
</html>