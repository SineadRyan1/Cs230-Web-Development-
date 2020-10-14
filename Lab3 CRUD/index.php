
<!DOCTYPE html>
<html>
<head>
     <title></title>
</head>
<link rel = "stylesheet" href= "styler.css">

<body>
<div class= "">

<h2>Enter information to insert: </h2>
<form class = "Insert",action = "Insert.php",method = "post">
creator: <input type = "text" name = "creator" value = ""><br>
title:<input type = "text" name = "title" value = ""><br>
type:<input type = "text" name = "type" value = ""><br>
identifier:<input type = "text" name = "identifier" value = ""><br>
date:<input type = "date" name = "date" value = ""><br>
language:<input type = "text" name = "language" value = ""><br>
description:<input type = "text" name = "description" value = ""><br>

<input type = "submit" name = "submit" value = "submit">
<button type = "submit" name = "submit" >Create Row</button>
<br>

</form>
</div>
<br>

<div class"">

<h2>Enter information to update:</h2>
<form class = "Update" action "Update.php" method = "POST">
id: <input type = "text" name = "Id" value = ""><br>
creator: <input type = "text" name = "creator" value = ""><br>
title:<input type = "text" name = "title" value = ""><br>
type:<input type = "text" name = "type" value = ""><br>
identifier:<input type = "text" name = "identifier" value = ""><br>
date:<input type = "date" name = "date" value = ""><br>
language:<input type = "text" name = "language" value = ""><br>
description:<input type = "text" name = "description" value = ""><br>
<button type = "update" name = "Update" >Create Row</button>
<br>
<div class"">

<h2>Enter Id to delete:</h2>
<form class = "delete" action "Delete.php" method = "POST">
<span>id: <input type = "text" name = "id_delete" value = ""><br>
<input type = "Submit"  formaction = "Delete.php" name = "Delete">Delete row</button>
</form >

<br>
</div>
<h1>eBook table: </h1>
<table class = "eBook _metaData">

	<tr>
			<th> Id</th>
			<th> creator</th>
			<th> title</th>
			<th> type</th>
			<th>identifier<th>
			<th>Date</th>
			<th>language</th>
			<th>description</th>
			
			</tr>
			
			

<?php 
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'Sineaddb';
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
					}
	$sql = "SELECT * FROM  eBook_MetaData";
	$query = mysqli_query($conn, $sql);
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
		 
		
		 while($row = mysqli_fetch_array($query)) {
            echo '<tr>
			<td>'
			. $row['id']. "</td>
			<td>"
			. $row["creator"]. "</td>
			<td>". $row["title"]. "</td><td> "
            . $row["type"]. "</td>
			<td>". $row["identifier"]. "</td>
			<td>"
			. $row["date"]. "</td>
			<td>". $row["language"]. "</td>
			<td>"
            . $row["description"]. "</td>
			</tr>";
			
			}
			echo "</table>";
		?>
	
		
		
		
	
	
</body>


</html>
