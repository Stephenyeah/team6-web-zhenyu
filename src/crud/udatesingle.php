
<?php
$title = "Update your info";
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"Select * from reviews
where message_id = '$a' "); 
$row = mysqli_fetch_array($result);

?>




