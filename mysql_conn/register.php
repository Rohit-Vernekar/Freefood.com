<?php
	$name = $_POST['name'];
	$addr = $_POST['addr'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$website = $_POST['website'];
	$b_email = $_POST['b_email'];
	$desc = $_POST['desc'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$conn = mysqli_connect("localhost","root","","freefood");

	$res1 = mysqli_query($conn, "select * from login where username='" .$email ."';");
	if(mysqli_num_rows($res1)>0){
		echo "0";
	}
	else{
		$res2 = mysqli_query($conn, "select * from details;");
		$row = mysqli_fetch_assoc($res2);
		$uid = $row["uid"];
		$nuid = $uid + 1;
		mysqli_query($conn, "update details set uid=".$nuid." where uid=".$uid.";");

		mysqli_query($conn, "insert into login values(".$nuid.", '".$email."', '".$pass."');");
		mysqli_query($conn, "insert into restaurant values(".$nuid.", '".$name."', ".$lat.", ".$lng.", 0);");
		mysqli_query($conn, "insert into user values(".$nuid.", '".$name."', '".$addr."', '".$city."', '".$state."', '".$zip."', '".$phone."', '".$website."', '".$b_email."', '".$desc."');");
		
		echo "1";
	}
?>