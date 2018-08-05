<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <title>Login</title>
</head>
<body> 
    <div class="wraper">
    <div class= "mainbox">
    <div class="heading">login</div>  
    <div class="formbox">
  <form action="login.php" method="post">
    <label for="username">User Name</label>
    <input type="text" name="username" placeholder="Enter name" maxlength="30" required>
</br>
    <!-- <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" maxlenght="20" >
    </br> -->
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter password" maxlength="20" > 
    </br>
    <button class="signIn" title="login">SignIn</button>
    <button class="signUp" title="Create account"><a href="reg.php">SignUp</a></button>
    </form>
    </div>
    </div>
    </div>
</body>
</html>