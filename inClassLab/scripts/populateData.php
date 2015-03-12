<?php 

include("connect.php");

$query = "SELECT * FROM attendance";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	echo '<option value="'.$row["stu_name"].'">'.$row["stu_name"].'</option>';
	
}







?>