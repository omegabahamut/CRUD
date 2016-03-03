<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$position = $_POST['position'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($name)) {
				
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>products field is empty.</font><br/>";
		}
		
		if(empty($position)) {
			echo "<font color='red'>products field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO user(username,password,name,position) VALUES('$username','$password','$name','$position')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
