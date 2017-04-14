<?php 
require( 'db.php'); 
include( 'inc/header.php'); 
include( 'inc/footer.php'); 
?>







<body>
  <div class="container-fluid">
  <div class="table_container">

<h1>Spis produktow</h1>

<form class="navbar-form navbar-left form_sort" action="" method="POST">
  <p>Sortuj:  </p>
	<input type="submit" name="sub1" class="btn btn-inverse" value="nazwa">
	<input type="submit" name="sub1" class="btn btn-inverse" value="miejsce">
</form><br>







<?php





if(isset( $_POST['sub1'])){
  if($_POST['sub1'] == "miejsce"){
    $sort = "CAST(miejsce AS int)";
  }
  else {
    $sort = "nazwa";
  }

}
else {
  $sort = "nazwa";
}





    $sql = "SELECT produkt.id_produkt,produkt.nazwa, produkt.ilosc, pozycja.miejsce FROM produkt INNER JOIN pozycja ON produkt.id_pozycja = pozycja.id_pozycja ORDER BY $sort ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-hover table-responsive text-center'><tr><th>Produkt</th><th>Ilosc</th><th>Paleta</th><th>Edytuj</th><th>Usuń</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["nazwa"]."</td><td>".$row["ilosc"]."</td><td>".$row["miejsce"]."</td><td><a href='edit.php?id=".$row['id_produkt']."&name=".$row['nazwa']."&ilosc=".$row['ilosc']."'>Edit</a></td><td><a href='delete.php?id=".$row["id_produkt"]."'>x</a></td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }




	$conn->close();

	?>



  <form action="index.php" method="get" class="navbar-form navbar-left">
    <input type="submit" class="btn btn-inverse" value="Powrot"
         name="Submit" id="frm1_submit" />
  </form>

</div>
</div>


</body>
</html>
