<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>
<?php
  $new_ilosc = 0;
  $name = $_GET['name'];
  $count =$_GET['ilosc'];
  $id = $_GET['id'];
 ?>




  <div class="container-fluid">
    <div class="container_main">

<h1>Edycja elementu</h1>
<div class="row">
  <p>Nazwa produktu: <?php echo $name ?></p>
</div>
<div class="row">
  <p>Poprzednia ilosc: <?php echo $count ?></p>
</div>



<div class="row">
  <form action="" method="post">
<p>Nowa ilosc: </p>
    <input type="number"  name="new_ilosc" required><br>
    <input type="submit" class="button_add btn btn-inverse button_edit" value="Update" name="Update">
  </form>
</div>



<?php

if(isset($_POST['Update'])){ //check if form was submitted

$new_ilosc = $_POST['new_ilosc']; //get input text
//$message = "Success! You entered: ".$new_ilosc;
}

if($new_ilosc != 0){
$sql = "UPDATE produkt SET ilosc = $new_ilosc WHERE id_produkt = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	echo("<script>location.href = '"."pokaz.php';</script>");
} else {
    echo "Error updating record: " . $conn->error;
}


}



  	$conn->close();

 ?>


  <form action="pokaz.php" method="get">
      <input type="submit" class="button_add btn btn-inverse button_powrot" value="Powrot"
           name="Submit" id="frm1_submit" />
    </form>
  </div>
</div>

