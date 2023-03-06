<?php
$servername="db";
$username="bookatable";
$password="BookaTable";
$dbname="bookatable";
$conn=new mysqli ($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

?>