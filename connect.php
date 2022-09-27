<?php
	$First Name = $_POST['First Name'];
	$Last Name = $_POST['Last Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Confirm Password  = $_POST['Confirm Password'];

	// Database connection
	$conn = new mysqli('localhost','root','','trial');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(First Name, Last Name, Email, Password, Confirm Password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $First Name, $Last Name, $Email, $Password, $Confirm Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>