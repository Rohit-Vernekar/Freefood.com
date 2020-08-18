function register(){
	var name = document.getElementById("title").value;
	var addr = document.getElementById("address").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var zip = document.getElementById("zip").value;
	var phone = document.getElementById("phone").value;
	var lat = document.getElementById("lat").value;
	var lng = document.getElementById("lng").value;
	var website = document.getElementById("website").value;
	var b_email = document.getElementById("business_email").value;
	var desc =  document.getElementById("description").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("password").value;

	if(name == "" || addr == "" || city == "" || state == "" || zip == "" || phone == "" || lat == "" || 
	lng == "" || email == "" || pass == ""){
		alert('Please fill all the required fields!')
	}
	else{
		if(isNaN(zip)){
			alert('Invalid Zip Code!');
		}
		else{
			if(isNaN(phone) || phone.length != 10){
				alert('Invalid Phone Number!');
			}
			else{
				if(isNaN(lat) || isNaN(lng)){
					alert('Invalid Co-ordinates!');
				}
				else{
					var ajax = new XMLHttpRequest();
					var method = "POST";
					var url = "mysql_conn/register.php";
					var qu = 'name=' +window.encodeURIComponent(name)+'&addr=' +window.encodeURIComponent(addr)+
					'&city=' +window.encodeURIComponent(city)+'&state=' +window.encodeURIComponent(state)+
					'&zip=' +window.encodeURIComponent(zip)+'&phone=' +window.encodeURIComponent(phone)+
					'&lat=' +window.encodeURIComponent(lat)+'&lng=' +window.encodeURIComponent(lng)+
					'&website=' +window.encodeURIComponent(website)+'&b_email=' +window.encodeURIComponent(b_email)+
					'&desc=' +window.encodeURIComponent(desc)+'&email=' +window.encodeURIComponent(email)+
					'&pass=' +window.encodeURIComponent(pass);
					ajax.open(method, url, true);
					ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					ajax.send(qu);
					ajax.onreadystatechange = function(){
						if(this.readyState == 4 && this.status == 200){
							var data = this.responseText;
							if(data==0){
								alert('The E-mail ID entered is already registered with us.');
							}							
							else{
								alert("Registration Successful!\nPlease Log in to continue.");
								close();
							}
						}
					}
				}
			}
		}
	}
}