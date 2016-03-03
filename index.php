<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM user ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>username</td>
		<td>password</td>
		<td>name</td>
		<td>position</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['password']."</td>";
		echo "<td>".$res['name']."</td>";	
		echo "<td>".$res['position']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
