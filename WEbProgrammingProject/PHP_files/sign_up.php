<?php 
$title = "Sign up";
include "header.php";?>
<?php
if(isset($_SESSION['user'])==''):
?>
<div class="log_sign">

    <form action="registration.php" onsubmit="return crud_sign()" name="form2" method="post">
    
        <label for="Email1">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required><br>
        
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required><br>
        
        <label for="Password1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required><br>
        <button class="btn btn-success" type="submit">Sign up</button>
        <!-- <p class="btn btn-success"><input class="button" name="login"type= "submit" value="Log In"></p> -->

   </form>
    
    
    </form>
</div>
<?php else:?>
<p>Wellcome <?=$_SESSION['user']['nick']?>. Press <a href="exit.php">log out</a> to exit. </p>
<?php endif;?>
<?php include "footer.php" ?>