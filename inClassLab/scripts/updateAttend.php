<?php 

include("connect.php");

if(filter_has_var(INPUT_POST, "stuName")){

	$stuName = filter_input(INPUT_POST, 'stuName');
	$secretWord = filter_input(INPUT_POST, 'secretWord');
	$dateTime = date("F j, Y, g:i a");

	$sName = mysqli_real_escape_string($connect, $stuName);
	$secretW = mysqli_real_escape_string($connect, $secretWord);
	$date = mysqli_real_escape_string($connect, $dateTime);



	$sql = "INSERT INTO 
                    total_attendance (student_name, word, time)
                VALUES ('$sName', '$secretW', '$date')";

               

	if (!mysqli_query($connect,$sql)) {
                  die('Error: ' . mysqli_error($connect));
                }
                echo "<strong>1 record added</strong><br/><br/>";

}






?>