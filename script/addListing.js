function openListing(){
    if(logged){
        var ajax = new XMLHttpRequest();
		var method = "POST";
		var url = "mysql_conn/addListing.php";
		var qu = 'type=0'+'&uid=' +window.encodeURIComponent(uid);
		ajax.open(method, url, true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send(qu);
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var data = this.responseText;
				var result = data.toString().split(";");
				document.getElementById("welcome").innerHTML = "Welcome " +loggeduser +"!";
				document.getElementById("name").innerHTML = result[0];
				document.getElementById("addr").innerHTML = result[1];
				document.getElementById("phone").innerHTML = result[2];
				document.getElementById("website").innerHTML = result[3];
        	}
        }
        openTab(event, 'addListing');

    }
    else
        alert("Please log in to Add a Listing!");
}

function addfood() {
	var foodDesc = document.getElementById("foodDesc").value;
	if(foodDesc == ""){
		alert('Please enter food details');
	}
	else{
		var ajax = new XMLHttpRequest();
		var method = "POST";
		var url = "mysql_conn/addListing.php";
		var qu = 'type=1'+'&uid=' +window.encodeURIComponent(uid)
		+'&food=' +window.encodeURIComponent(foodDesc);
		ajax.open(method, url, true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send(qu);
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var data = this.responseText;
				if(data == "0"){
					alert('Food Description added Successfully!');
					document.getElementById("foodDesc").value = "";
				}
			}
		}
	}
}