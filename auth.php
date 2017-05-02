<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();      
    session_destroy();   
	echo "<script type=\"text/javascript\"> alert('Wylogowano'); </script>";
	echo("<script>location.href = '"."login.php';</script>");
}
$_SESSION['LAST_ACTIVITY'] = time();

?>