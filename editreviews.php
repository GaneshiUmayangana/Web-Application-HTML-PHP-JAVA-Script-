<html>
<head>
	<title>Review Edit Page</title>
	<style type="text/css">
		td{
			padding:10px;
		}
	</style>
</head>
<body>
<?php

session_start();

require_once "./dbconn/data.php";
require_once "./dbconn/connection.php";

$sql="Select * from reviewdb";
$result= mysqli_query($connect,$sql);
?>


<?php 

if(mysqli_num_rows($result)>0){
	echo "<table border=1 cellspacing=0 style='color:white;'>";
	echo "<tr>
		<th>id</th>
		<th>Name</th>
		<th>Comment</th>
	</tr>";
	while ($row=mysqli_fetch_assoc($result)){
		?>
<tr>
<td ><?php echo $row["id"]; ?></td>
<td ><?php echo $row["Name"]; ?></td>
<td ><?php echo $row["Comment"]; ?></td>
<td><?php echo "<a style='color:red;text-decoration:none;' href=deleteReviews.php?id=".$row['id'].">Delete</a>";?> </td>
</tr>
<?php
}
	echo "</table>";
}
?>
	
</body>
</html>