<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>

<?php




	$nazwa = $_POST['nazwa'];
	$ilosc = $_POST['ilosc'];
	$pozycja = $_POST['pozycja'];

	echo $nazwa;
	echo $ilosc;
	echo $pozycja;






	$sql = "INSERT INTO produkt(nazwa, ilosc, id_pozycja) VALUES ('$nazwa', '$ilosc', '$pozycja')";

if ($conn->query($sql) === TRUE) {
    $message = "New record created successfully";
		header("location: pokaz.php");
			exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







?>




