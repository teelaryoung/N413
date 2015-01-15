$(document).ready(function(){
	setBindings();
})

function setBindings(){
	

		var getData = $.post("./script/navData.php", function(){
			// alert("Success");
		})

			.done(function (result){
				// alert("Success " + result);
				$(".dataList").append(result);
				
			})
			.fail(function(){
				alert("ERROR! Could not establish connection");
			})
	
}