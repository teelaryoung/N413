<?php

include("connectScript.php");

$query = "SELECT * FROM main_menu_N413";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo '<a href="#">'.$row["item"].'</a><br/><br/>';
	// var_dump($row);
	
}


?>