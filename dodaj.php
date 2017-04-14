<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>
<?php




		// Create connection


	$sql = "SELECT * FROM pozycja";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    // output data of each row
	$option = "";

    while($row = $result->fetch_assoc()) {
        $option .= '<option value = "'.$row['id_pozycja'].'">'.$row['miejsce'].'</option>';

    }
    echo "</table>";
} else {
    echo "0 results";
}



	$conn->close();

	?>
<div class="container-fluid">
  <div class="container_main">



	<h1>Dodaj produkt</h1>
<div class="container_dodaj">


	<form action="dodaj2.php" method="post">
    <div class="model_row row">
      <p>Model:</p> <input type="text" name="nazwa" required><br>
    </div>
    <div class="ilosc_row row">
      <p>Ilosc:</p> <input type="number" name="ilosc" required><br>
    </div>


    <div class="pozycja_row row">
  	   <p>Pozycja: </p>
       <select name="pozycja" id="pozycja">

			      <?php echo $option ; ?>

        </select>
    </div>
		<input class="button_add btn btn-inverse" type="submit" value="Dodaj">

	</form>
</div>
	<form action="index.php" method="get">
    <input type="submit" class="btn btn-inverse button_powrot" value="Powrot"
         name="Submit" id="frm1_submit" />
  </form>

</div>
</div>
