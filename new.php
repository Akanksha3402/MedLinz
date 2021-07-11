<?php
	$EmailId = $_POST['EmailId'];
	$Password = $_POST['Password'];
	
	
    $dbhost="localhost";
	$dbname="root";
	$dbpass="Kuber@123";
	$dbname="login";
	// Database connection
	$conn = new mysqli('localhost:3360','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_info(EmailId, Password ) values(?, ?)");
		$stmt->bind_param("ss", $EmailId, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Successfully LogedIn.";
		$stmt->close();
		$conn->close();
	}
?>