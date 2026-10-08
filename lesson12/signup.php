<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>;
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>;


       <div class="signup">
    <form class="form-signin" action="register.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">please sign up</h1>

        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control " placeholder="name" name="name" required autofocus>

         <label for="inputSurname" class="sr-only">Surname</label>
        <input type="text" id="inputSurname" class="form-control " placeholder="surname" name="surname" required autofocus>

         <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control " placeholder="email" name="email" required autofocus>

         <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control " placeholder="password" name="password" required autofocus>
         
         <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control " placeholder="username" name="username" required autofocus>
        
        <button class="btn btn-lg btn-primary btn-block " type="submit" name="submit">Sign Up</button>

        <small> already have account? <a href="login.php">Log in</a></small>

</form>


       </div>
</body>
</html>