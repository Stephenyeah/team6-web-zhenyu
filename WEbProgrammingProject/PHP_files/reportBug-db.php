<?php
$servername="db";
$username="reportBug";
$password="password";
$dbname="reportBug";
$conn=new mysqli ($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

?>