<?php

	
    $dbhost="localhost";
	$dbname="root";
	$dbpass="Kuber@123";
	$dbname="jobin";
	// Database connection
		//
		//("SELECT  AS _message FROM DUAL");
		//
		//echo htmlentities($row['_message']);
	$mysqli = new mysqli("localhost", "root", "", "contact");
	if($mysqli->connect_error){
		echo "$mysqli->connect_error";
		die("Connection Failed : ". $mysqli->connect_error);
	} else {
		$result = $mysqli->query("SELECT * FROM `jobin` ");
		echo "<h1>All user post</h1>";
		while($row = $result->fetch_assoc())
		{
			$Name = $row['Name'];
			$Title = $row['Title'];
			$Discription = $row['Discription'];
			$Category = $row['Category'];
			$Request = $row['Request'];

			$Name = htmlspecialchars($row['Name'],ENT_QUOTES);
			$Title = htmlspecialchars($row['Title'],ENT_QUOTES);
			$Discription = htmlspecialchars($row['Discription'],ENT_QUOTES);
			$Category = htmlspecialchars($row['Category'],ENT_QUOTES);
			$Request = htmlspecialchars($row['Request'],ENT_QUOTES);
  
  // We will now print the comment to the screen
  
  echo "  <div style='margin:50px 20px;'><h2>
      Name: $Name<br />
      Title: $Title<br />
      Discription: $Discription<br />
      Category: $Category<br />
      Request: $Request
	  </h2>
    </div>
  ";
			
			
		}
	}

?>