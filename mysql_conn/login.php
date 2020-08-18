<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$conn = mysqli_connect("localhost","root","","freefood");
	$result = mysqli_query($conn, "select * from login where username='" .$user ."' and password='" .$pass ."';");
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		echo $user.",".$row['uid'];
	}
	else
		echo "0";
?>