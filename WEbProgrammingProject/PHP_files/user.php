<?php
session_start();
if(isset($_SESSION['user']))
{
    echo "Wellcome ". $_SESSION['user']['nick'] ;
}
else{
    echo " You are not logged in. " ;
}
?>