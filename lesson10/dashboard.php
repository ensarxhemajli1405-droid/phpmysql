<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    table,td,th{
    border:1px solid black;
    border-collapse:collapse;}

    </style>


</body>
</html>


<?php

use PSpell\Config;

include_once('Config.php');
$sql = "SELECT* FROM users";
$getUsers = $conn->prepare($sql);
$getUsers ->execute();
$users=$getUsers->fetchAll();

?>

<br><br>

<table>

    <thead>
       <th>ID</th>
       <th>Name</th>
       <th>username</th>
       <th>Email</th>
    </thead>
    <tbody>
    <?php
     foreach ($users as $user){
        ?>
        <tr>
            <td><?=   $user['id'] ?></td>
            <td><?=   $user['name'] ?></td>
            <td><?=   $user['username'] ?></td>
            <td><?=$user['email'] ?></td>
        </tr>
        <?php 
}       
?>
    </tbody>
    



</table>
<a href="add.php">add user</a>

</body>
</html>




