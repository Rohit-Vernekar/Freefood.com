<?php
	$conn = mysqli_connect("localhost","root","","freefood");
	$result = mysqli_query($conn, "select * from restaurant;");
	$data = array();
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	echo json_encode($data);
?>
