<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone  = $_POST['Phone'];
	$Password  = $_POST['Password'];
	$PasswordCM = $_POST['PasswordCM'];
	
	
    $dbhost="localhost";
	$dbname="root";
	$dbpass="Kuber@123";
	$dbname="signup";
	// Database connection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(Name, Email, Phone, Password, PasswordCM ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $Name, $Email, $Phone, $Password, $PasswordCM);
		$execval = $stmt->execute();
		header('Location: who.php');
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>