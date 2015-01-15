$(document).ready(function(){
	setBindings();
})

function setBindings(){
	$(".dataButton").click(function(e){

		var getData = $.post("./script/script.php", function(){
			// alert("Success");
		})

			.done(function (result){
				// alert("Success " + result);
				$(".dataList").append(result);
				
			})
			.fail(function(){
				alert("ERROR! Could not establish connection");
			})
	})
}