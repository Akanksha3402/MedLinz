<?php
	$Name = $_POST['Name'];
	$Title = $_POST['Title'];
	$Discription  = $_POST['Description'];
	$Category = $_POST['Category'];
	$Request = $_POST['Request'];
	
	
    $dbhost="localhost";
	$dbname="root";
	$dbpass="Kuber@123";
	$dbname="jobin";
	// Database connection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into jobin(Name, Title, Discription,Category, Request ) values(?, ?, ?, ? , ?)");
		$stmt->bind_param("sssss", $Name, $Title, $Discription,$Category, $Request);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: post.php');
		$stmt->close();
		$conn->close();
	}
	

?>