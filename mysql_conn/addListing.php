<?php
	$type = $_POST['type'];
	if($type==0){
		$uid = $_POST['uid'];
		$conn = mysqli_connect("localhost","root","","freefood");

		$res1 = mysqli_query($conn, "select * from user where uid=".$uid.";");
		$row = mysqli_fetch_assoc($res1);
		
		$name = $row['name'];	
		$addr = $row['addr'];
		$phone = $row['phone'];
		$website = $row['website'];

		echo $name.";".$addr.";".$phone.";".$website;
	}
	else {
		$uid = $_POST['uid'];
		$food = $_POST['food'];
		$conn = mysqli_connect("localhost","root","","freefood");
		
		$res1 = mysqli_query($conn, "select * from restaurant where uid=".$uid.";");
		$row = mysqli_fetch_assoc($res1);
		$count = $row['count'];
		$ncount = $count + 1;
		mysqli_query($conn, "update restaurant set count=".$ncount." where uid=".$uid.";");
		mysqli_query($conn, "insert into food values(".$uid.", '".$food."');");

		echo "0";
	}
?>