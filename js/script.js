
	function checkAvailability() {

jQuery.ajax({
	url: "zapytanie.php",
	data:'username='+$("#username").val(),
	type: "POST",
success:function(data){
	$("#printCheck").html(data);
	var x = data.trim();
	var message = document.getElementById("printCheck");
	var regButtonCheck = document.getElementById("regButton");
	var user = document.getElementById("username");
	if(x != "true"){
		if(user.value == ""){
			message.style.display = 'none';
		}
		else{
		message.style.display = 'block';
		message.innerHTML = "Nazwa użytkownika dostępna";
		message.disabled = false;
		message.className -= " wrong";
		regButtonCheck.disabled = false;
		}
	}
	else{
		message.style.display = 'block';
		message.innerHTML = "Nazwa użytkownika niedostępna";
		message.disabled = true;
		message.className += " wrong";
		regButtonCheck.disabled = true;
	}
	
},
error:function (){}
});
}


