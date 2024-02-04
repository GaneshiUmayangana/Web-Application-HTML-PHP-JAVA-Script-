
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "reviewdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

if(isset($_POST['submit']))
{

	$Name = $_POST['name'];
	$Comment  = $_POST['comment'];

	$query = "INSERT INTO reviewdb (Name, Comment) VALUES ( '$Name', '$Comment' )";

	$result = mysqli_query($conn, $query);

}

$query = "SELECT Name,Comment FROM reviewdb";

	$result_set = mysqli_query($conn, $query);

	if ($result_set) {
		
		$table = '<div style="height:240px;overflow-y:auto;"><table style="font-size:18px;font-family:cursive;width:1000px;color:white;background:rgba(0,0,0,0.7)" >';
		$table .= '<tr><th>Name</th><th>Reviews</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)) {
			$table .= '<tr>';
			$table .= '<td>' . $record['Name'] . '</td>';
			$table .= '<td>' . $record['Comment'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table></div>';
	}

$conn->close();
?>



<html>

<head>
	<title>Reviews</title>
		<link rel="stylesheet" type="text/css" href="./css/list.css" >
		
		<link rel="stylesheet" type="text/css" href="./css/reviewup.css" >
</head>

<body bgcolor="#475252">
<div>
<center>
	<div class=top>
			<ul>
			<li><a href="index.php">Home</a>
			<li><a href="select.php">Menu</a>
			<li><a href="explore.php">Product</a>
			<li><a href="review.php">Review</a>
			<li><a href="about.php">AboutUs</a>
		</div>
		
		<img  src="./Image/index.jpg" width="100%" height="100%" />

		<div style="position:absolute;top:68px;left:45px;">
			 <img width="85px" src="./Image/logo.jpg" />
		</div>

		<div style="position:absolute;top:15px;left:1365px;">
			<a href="help.html#login"> <img width="50px" src="./Image/help.png" /></a>
		</div>
		
		<div class="contents2">
			<h1><b>We value your comments.......</b></h1>
		</div>
		

		<div style="position:absolute;top:250px;left:45px;">
			 <img width="500px" src="./Image/ee.jpg" />
		</div>


		<div class="para">
			<p>Hello!..... You can write to us about our good or bad service.  Our valid customer your reviews are very inportent to our futhure service. 
			If you have a little time give us a review.</p>
		</div>

		<div class="contents">
				
				
				<?php echo $table; ?>

				<br>
				

					<form style="color:white;" action="review.php" method="POST" id="formstyle">
						
						<label><B>Your Name</B></label><br>
						<input type="text" name="name" id="name" required class="inputstyle">

						<br/>

						<label><B>Review</label></B><br>
						<textarea id="review" name="comment" rows="4" cols="50" required class="inputstyle"></textarea>
						<br/>

					<input type="submit" value="Submit" name="submit" id="submit">
					</form>
		</div>
</center>
</div>

</body>
		<!-- To avoid auto resubmission of the form -->
		<script>
			if ( window.history.replaceState ) {
			  window.history.replaceState( null, null, window.location.href );
			}
		</script>
</html>
