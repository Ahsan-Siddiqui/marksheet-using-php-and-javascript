<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css" type="text/css"/>
     <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <title>SignUp</title>
</head>
<body>
    <div class="wraper">
        <div class="heading">SignUp</div>
        
        <div class="formbox">   
  <form action="signup.php" method="post">
    <label for="username">Teacher Name</label>
    <input type="text" name="username" placeholder="Enter name" maxlength="30" required>
    </br>
    <label for="email">Email</label>
    <input type="email" name="email" autocomplete="off" placeholder="Email" maxlength="20">
    </br>
    <label for="age">Age</label>
    <input type="text" name="age" autocomplete="off" placeholder="Age" maxlength="2">

    </br>
    
    <p>Select class For teaching</p>
    
    <label class="container">Web Programming
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Design & Analysis of Algorithm
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Computer Communication_Networks
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Theory of Automata
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Object Oriented Sofware Engineering
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
    </br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="password" maxlength="20"> 
    </br>
    <label for="password">Conform Password</label>
    <input type="password" name="cpassword" placeholder="Conform password" maxlength="20"> 
    <!-- <input type="submit" name="submit" value="submit">     -->
    </br>
    <button class="submit" title="Submit">Submit</button>
    </form>
    </div>
    </div>
</body>

</html>