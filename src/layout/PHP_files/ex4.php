<?php include "header.php";?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
<h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h3>
<?php
$d = date("F");
if($d=="August"){
echo "<br>". "It's August, so it's still holiday.";
}
else{
    echo "<br>". "Not August, this is Month-name so I don't have any holidays";
}
?>
<h3>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement):</h3>
<?php
$color = "red";
if($color=="red"){
    echo "<br>" . "The color is red. ";    
}
else {
    echo "<br>" . "The color is not red. ";
}
?>
<h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. </h3>
<?php
$grade = 75;
switch($grade){
    case $grade > 80:
        echo  "<br>". "Excellent";
    break;
    case $grade > 70 && $grade < 80:
        echo  "<br>". "Great ";
    break;
    case $grade > 60 && $grade < 70:
        echo  "<br>". "Good  ";
    break;
    case $grade > 50 && $grade < 60:
        echo  "<br>". "Pass   ";
    break;
    case $grade < 50:
        echo  "<br>". "Fail    ";
    break;   
}
?>

<h3>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting </h3>
<form action="action2.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" placeholder="First Name" name="fname" class="form-control" required>
        </div>
        <div class="col">
            <input type="number" placeholder="age" name="age" class="form-control" required>          
        </div>
    </div>           
    <input type="submit" value="submit">      
</form>

<h3>5.In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name.Use Switch statement with strops function to print the name of the browser as below</h3>
<?php
$user_agent= $_SERVER['HTTP_USER_AGENT'];
switch($user_agent){
    case strpos($user_agent, 'Edg') == true:
        echo  "<br>". "You are useing Microsoft Edge";
    break;
    case strpos($user_agent, 'Firefox') == true:
        echo  "<br>". "You are useing Mozila Firefox";
    break;
    case strpos($user_agent, 'Chrome') == true:
        echo  "<br>". "You are useing Google chrome";
    break;
    
}
 ?>

<?php include "footer.php" ?>