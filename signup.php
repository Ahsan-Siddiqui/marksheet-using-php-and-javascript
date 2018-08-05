<?php 
// echo 'Current PHP version: ' . phpversion();
echo "<style type='text/css'>
.username
        {
         text-align: center;
         margin: 0;
         font-size: 30px;
         text-shadow: 1px 2px 2px #808080, 0 0 20px #ffffff, 0 0 5px;
         font-family: sans-serif;
         font-weight: bold;
        } 
p
 {
    font-size: 25px;
    color: #000;
    padding-left: 10px;
    line-height: 30px;
    font-weight: bold;
    text-align: center;
 }
   </style>";

require_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

if(!empty($username) && !empty($email) && !empty($password) && !empty($age) && !empty($cpassword)){
    
    if($password == $cpassword)
    {
        
     $sql = "INSERT INTO `users` set `username` = '".$username."' , `email` = '".$email."', `password`= '".$password."', `age`= '".$age."' ";
   
    $chck= mysqli_query($dbc,$sql);
    
    if($chck){
        echo "<p class='username'>Welcome: $username </p>";
        echo  "<p>Wait for a second we will redirect you the page..</p>";
        header("Refresh:3;url=faculty.php");
    }
    } else{
        echo "<p>Password not match,Please fill it again";
        header("Refresh:3;url=reg.php");
    }
    // $registered = mysqli_affected_rows($dbc);
    // echo $registered." row is affected,everything work fine!";
}
else
{
    echo "<p>You left some values</p>";
    header("Refresh:3;url=reg.php");
}
}
?>









