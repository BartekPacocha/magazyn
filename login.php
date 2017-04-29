<?php 
require( 'db.php'); 
include('inc/reg_view.php');
session_start();
?>
<?php
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
	
	$username = mysqli_real_escape_string($conn,$username);
	
	$password = stripslashes($_REQUEST['password']);
	
	$password = mysqli_real_escape_string($conn,$password);
	
	
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";

	$result = mysqli_query($conn,$query) or die(mysqli_error());
	
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
        
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Nie masz konta? <a href='registration.php' class="login_reg_question">Zarejestruj się</a></p>
</div>
<?php } ?>
</body>
</html>