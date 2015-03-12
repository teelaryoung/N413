<?php 

include("connect.php");

if(filter_has_var(INPUT_POST, "newName")){

	$newName = filter_input(INPUT_POST, 'newName');
	

	$nName = mysqli_real_escape_string($connect, $newName);
	



	$sql2 = "INSERT INTO 
                    attendance (stu_name)
                VALUES ('$nName')";

               

	if (!mysqli_query($connect,$sql2)) {
                  die('Error: ' . mysqli_error($connect));
                }
                echo "<strong>1 record added</strong><br/><br/>";

}






?>