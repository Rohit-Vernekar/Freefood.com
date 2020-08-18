<?php
	$type = $_POST['type'];
	if($type==0){
		$uid = $_POST['uid'];
		$conn = mysqli_connect("localhost","root","","freefood");

		$res1 = mysqli_query($conn, "select * from user where uid=".$uid.";");
		$row = mysqli_fetch_assoc($res1);
		
		$name = $row['name'];	
		$addr = $row['addr'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$phone = $row['phone'];
		$website = $row['website'];
		$descrip = $row['description'];

		echo $name.";".$addr.", ".$city.", ".$state." Pincode : ".$zip.";".$phone.";".$website.";".$descrip;
	}
	else {
		$uid = $_POST['uid'];
		$conn = mysqli_connect("localhost","root","","freefood");
		
		$res1 = mysqli_query($conn, "select * from food where uid=".$uid.";");
		$str = "";
		while($row = mysqli_fetch_assoc($res1)){
			$str = $str.$row['food'].";";
		}
		
		echo $str;
	}
?>