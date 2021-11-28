<?php
	$conn = new mysqli("localhost","root","1234","inventory");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>