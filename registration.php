<?php 
require( 'db.php'); 
include('inc/reg_view.php');
?>




<?php
	if (isset($_REQUEST['username'])){
		
		
		$username = stripcslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn,$username);
		
		if(!empty($_POST["username"])) {
	$result = 'SELECT username FROM `users` where username = "'.$_POST['username'].'"';
		}
		
		
		
		
		$email = stripcslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($conn, $email);
		$password = stripcslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);
		$reg_date = date("Y-m-d H:i:s");
	
		$query = "INSERT into `users` (username, password, email, reg_date) VALUES ('$username', '".md5($password)."', '$email', '$reg_date')";
		
		
		$result = mysqli_query($conn, $query);
		
		if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
	}
	else{
			?>
			
			<div class="form">
				<h2>REJESTRACJA</h2>
				<form name="registration" action="" method="post">
				
				<div class="input_username_container">
				<input type="text" id="username" name="username" placeholder="Uzytkownik" required onBlur="checkAvailability()">
				<p id="printCheck"></p></div>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Hasło" required>
				
				<input type="submit" id="regButton" name="submit" value="Register">
				</form>
			</div>
		<?php } ?>