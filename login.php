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
if( isset($_POST['username']) && isset($_POST['password']) ) {
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $ret=mysqli_query( $dbc, "SELECT * FROM users WHERE username='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
    $row = mysqli_fetch_array($ret);
    if($row) {
        echo "<p class='username'>Welcome: $user </p>";
        echo  "<p>Wait for a second we will redirect you the page..</p>";
        header("Refresh:3;url=faculty.php");
        // header("Location: faculty.php");
    }
    else {
        session_start();
        $_SESSION['username']=$user;
        header('location: teacher.php');
    }
}

?>

<!-- //  if(isset($check)){
//         echo "<p class='username'>Welcome: $username </p>";
//         echo  "<p>Wait for a second we will redirect you the page..</p>";
//         header("Refresh:3;url=faculty.php");
//      }
//     else
// {
//     echo "<p>You left some values</p>";
//     header("Refresh:3;url=index.php");
// }
//     } else{
//         echo "<p>Password not match,Please fill it again";
//         header("Refresh:3;url=signup.php");
//     } -->
    