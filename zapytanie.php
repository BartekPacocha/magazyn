<?php 
require_once('db.php'); 
//include_once('inc/header.php'); 
?>


<?php

if(!empty($_POST["username"])) {
	
	
	$result = mysqli_query($conn, "SELECT count(*) FROM `users` WHERE username='" . $_POST["username"] . "'");
	$row = mysqli_fetch_row($result);
	$user_count = $row[0];
		if($user_count>0) 
			echo "true";
			
			else echo "false";
			
}

?>