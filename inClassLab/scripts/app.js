$(document).ready(function(){
	populateDrop();
	takeAttendance();
	addStudent();
	// var dt = new Date();
	// var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

	// alert(time);
	$("input").click(function(e){
		$(this).attr("placeholder", "");
	})
})


function populateDrop(){
	var dropData = $.post("./scripts/populateData.php", function(){

	})

	.done(function (result){
		$("#studName").append(result);
	})

	.fail(function(){
		alert("You suck");
	})
}

function takeAttendance(){
	$("#btnSubmit").click(function(e){
		//e.preventDefault();	
		var stuName = $("#studName").val();
		var secretWord = $("#word").val();

		var stuData = $.post("./scripts/updateAttend.php",{
			stuName: stuName,
			secretWord: secretWord	
		})
	})
}

function addStudent(){
	$("#addStu").click(function(e){
		//e.preventDefault();	
		var newName = $(".newName").val();
		var newData = $.post("./scripts/addStudent.php",{
			newName: newName			
		})
	})
}