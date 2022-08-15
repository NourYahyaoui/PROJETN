<!DOCTYPE html>
<html lang="en">
<head>
	<title>consultation des demandes</title>
	<link rel="stylesheet" href="css/listestyle.css">
</head>

<body bgcolor="#DEB887">

<img src=".\img\logo.png" width="175" height="105" alt="" >

<br>
<center><h1>Liste des demandes</h1></center>
<br>


<?php 
$conn = mysqli_connect("localhost", "root", "", "elearning");
  
if ($conn === false) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
  
$sql = "SELECT * FROM demande";
if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<center><table  border='1em' width='100%' ></center>";
		echo "<tr bgcolor='PERU'>";
      
        echo "<th>Nom</th>";
        echo "<th>Prenom</th>";
        echo "<th>Email</th>";
		echo "<th>Telephone</th>";
		echo "<th>Etablissement</th>";
		echo "<th>Description</th>";
	    echo "</tr>";
       
	   while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['email']."</td>";
			echo "<td>".$row['telephone']."</td>";
			echo "<td>".$row['etablissement']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn);
}
mysqli_close($conn);


?>


<br>
<br>
<br>
<br>

<div class="user-widget">
<form>
  <?php  ?>
   <button class="button-73" role="button"><a href="logout.php">Se deconnecter</a></button>
  <?php ?>
 </form>
</div>

</html>