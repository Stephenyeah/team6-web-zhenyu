<?php
session_start();
include("db_connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$md5_password = md5($password);
$query=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($query)==0)
{
    $_SESSION['user']=['nick'=>$name];
    mysqli_query($db,"INSERT INTO `users` (`email`, `password`, `name`)
    VALUES('$email','$md5_password','$name')");
    header("Location: login.php");
}
else
{
   echo "This Email is taken by another user.";
}
?>