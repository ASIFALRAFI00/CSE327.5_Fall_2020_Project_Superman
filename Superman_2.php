<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
	
	$firstname = $_POST['First name'];
	$surname = $_POST['Surname'];
	$contact = $_POST['Mobile number or email'];
	$password = $_POST['New password'];

	
				
	$sql = "INSERT  INTO user(fname, sname, tcontact, tpassword) 
	
	VALUES('$firstname', '$rurname', '$contact', '$password')";
	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>Information Added</h1>";
		
	}


?>