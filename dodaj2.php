<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>

<?php

	$nazwa = $_POST['nazwa'];
	$ilosc = $_POST['ilosc'];
	$pozycja = $_POST['pozycja'];


	$sql = "INSERT INTO produkt(nazwa, ilosc, id_pozycja) VALUES ('$nazwa', '$ilosc', '$pozycja')";

if ($conn->query($sql) === TRUE) {
    //$message = "New record created successfully";
		echo("<script>location.href = '"."pokaz.php';</script>");
			exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







?>




