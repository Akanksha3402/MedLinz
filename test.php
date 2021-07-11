<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone  = $_POST['Phone'];
	$Comment = $_POST['Comment'];
	$Suggestion = $_POST['Suggestion'];
	
    $dbhost="localhost";
	$dbname="root";
	$dbpass="Kuber@123";
	$dbname="contact_info";
	// Database connection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_info(Name, Email, Phone, Comment, Suggestion ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $Name, $Email, $Phone, $Comment, $Suggestion);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>