/**
 * проверка заполнения формы 
 */
// // Material Select Initialization
// $(document).ready(function() {
// 	$('.mdb-select').materialSelect();
//    });

function overify_login(f) {
	if (f.login.value  =='') {
		document.getElementById("massage").innerHTML ="Enter the login!";
		return false;	
	}
	var pass=f.pass.value;
				
	if (pass  =='')	{
		document.getElementById("massage").innerHTML = "Enter the password!";
		return false;	
	}
	if (pass.length < 4) {
		document.getElementById("massage").innerHTML = "Password should contain at least 4 symbols! ";			
		return false;   
	}
}
