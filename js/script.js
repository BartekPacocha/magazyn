
	function checkAvailability() {

jQuery.ajax({
	url: "zapytanie.php",
	data:'username='+$("#username").val(),
	type: "POST",
success:function(data){
	$("#printCheck").html(data);
	var x = data.trim();
	var message = document.getElementById("printCheck");
	if(x != "true"){
		message.style.display = 'block';
		message.innerHTML = "Nazwa użytkownika dostępna";
		message.disabled = false;
	}
	else{
		message.style.display = 'block';
		message.innerHTML = "Nazwa użytkownika niedostępna";
		message.disabled = true;
		message.className += " wrong";;
	}
	
},
error:function (){}
});
}


// zmiana 
// zmiana 2