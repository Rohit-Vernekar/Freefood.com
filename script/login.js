var logged = false;
var uid;
var loggeduser;
$(document).ready(function(){
	document.getElementById("defaultOpen").click();
	var arrow = $(".arrow-up");
	var form = $(".login-form");
	var status = false;
	$("#login").click(function(event){
		event.preventDefault();
		if(status == false && logged == false){
			arrow.fadeIn();
			form.fadeIn();
			status=true;
		}
		else if(status == true){
			arrow.fadeOut();
			form.fadeOut();
			status=false;
		}
	});
});
function login(){
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	if(user!="" && pass!=""){
		var ajax = new XMLHttpRequest();
		var method = "POST";
		var url = "mysql_conn/login.php";
		var qu = 'user=' +window.encodeURIComponent(user)+'&pass=' +window.encodeURIComponent(pass);
		ajax.open(method, url, true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send(qu);
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var data = this.responseText;
				if(data==0){
					alert('Username or Password is incorrect');
				}
				else{
					logged = true;
					document.getElementById("login").click();
					alert("User logged in successfully");
					var result = data.toString().split(",");
					document.getElementById("login").innerHTML = result[0];
					uid = result[1];
					loggeduser = result[0];
				}
			}
		}
	}
	else{
		alert("Please enter a valid Username and Password!")
	}
}