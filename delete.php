<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>

  <?php




  		// Create connection



      $sql = "SELECT * FROM produkt";
    	$result = $conn->query($sql);

      $id = $_GET['id'];
      echo $id;

      $sql = "DELETE FROM produkt WHERE id_produkt=$id";

      if ($conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
          header("location: pokaz.php");
          	exit;
      } else {
          echo "Error deleting record: " . $conn->error;

      }



  	$conn->close();

  	?>

