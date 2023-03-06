<?php
session_start();
include("db_connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$md5_password = md5($password);
$query=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$md5_password'");
if(mysqli_num_rows($query)!==0)
{
    $_SESSION['user']=['nick'=>$email];
    header("Location: login.php");
}
else{
echo "Invalid login and/or password";
}